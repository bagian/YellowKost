<?php

namespace App\Repositories;

use App\Models\Journal;
use App\Models\Payment;
use App\Repositories\Interface\BookingRepositoryInterface;
use App\Repositories\Interface\PaymentRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PaymentRepository extends BaseRepository implements PaymentRepositoryInterface
{
    protected $bookingRepository;

    public function __construct(BookingRepositoryInterface $bookingRepository){
        parent::__construct();

        $this->bookingRepository = $bookingRepository;
    }

    /**
     * Return bookings grouped by payment due status.
     *
     * Groups:
     *  - past_due: bookings where due date already passed
     *  - due_soon: bookings where due date is within the next 7 days (inclusive)
     *  - up_to_date: bookings where due date is further in the future or not set
     *
     * Each item will include the original Booking model under 'booking' and these extra keys:
     *  - due_date (Carbon|null)
     *  - due_date_str (string|null) formatted value from getNextPeriod
     *  - days_until_due (int|null) positive if in future, negative if past
     *
     * @return array{
     *     past_due: \Illuminate\Support\Collection,
     *     due_soon: \Illuminate\Support\Collection,
     *     up_to_date: \Illuminate\Support\Collection
     * }
     */
    public function getBookingsByDueStatus(): array {
        $pastDue = collect();
        $dueSoon = collect();
        $dueToday = collect();
        $upToDate = collect();

        // Only consider confirmed bookings
        $bookings = $this->bookingRepository->confirmedBookings();

        foreach ($bookings as $booking) {
            $dueDateStr = $this->getNextPeriod($booking->id, true);

            $dueDate = null;
            $daysUntil = null;

            if ($dueDateStr && $dueDateStr !== '-' ) {
                try {
                    $dueDate = Carbon::parse($dueDateStr);
                    $daysUntil = now()->diffInDays($dueDate, false); // negative when past
                } catch (\Exception $e) {
                    $dueDate = null;
                    $daysUntil = null;
                }
            }

            $item = collect([
                'booking' => $booking,
                'due_date' => $dueDate,
                'due_date_str' => $dueDateStr,
                'days_until_due' => $daysUntil,
            ]);

            if ($dueDate instanceof Carbon && now()->greaterThan($dueDate)) {
                $pastDue->push($item);
                continue;
            }

            if ($dueDate instanceof Carbon && $daysUntil !== null && $daysUntil <= 7) {
                $dueSoon->push($item);
                continue;
            }

            if ($dueDate instanceof Carbon && now()->isSameDay($dueDate)) {
                $dueToday->push($item);
                continue;
            }

            $upToDate->push($item);
        }

        return [
            'past_due' => $pastDue,
            'due_soon' => $dueSoon,
            'due_today' => $dueToday,
            'up_to_date' => $upToDate,
        ];
    }

    protected function getModelClass() {
        return Payment::class;
    }


    public function getNextPeriod ($idBooking, bool $isDueDate = false): ?string {
        if (!$idBooking) {
            return "-";
        }
        $bookings = $this->bookingRepository->find($idBooking);
        if ($bookings->status != "confirmed") {
            return "-";
        }

        $lastPayment = $this->model::where('id_booking', $idBooking)->select('period')->orderBy('period', 'desc')->first();

        if (!$lastPayment) {
            $booking = $this->bookingRepository->find($idBooking, ['room']);
            $roomPeriod = $booking->room->period;
            if ($roomPeriod == 'month') {
                return $booking->check_in->format('F Y');
            } else if ($roomPeriod == 'year') {
                return $booking->check_in->format('Y');
            }
            return null;
        }

        $date = \Carbon\Carbon::parse($lastPayment->period);

        // If it's a monthly room (contains a dash)
        if (str_contains($lastPayment->period, '-') && !$isDueDate) {
            return $date->addMonth()->format('F Y');
        } else if (str_contains($lastPayment->period, '-') && $isDueDate) {
            return $date->addMonth()->endOfMonth()->format('d F Y');
        }

        // If it's a yearly room
        if (!$isDueDate) {
            return $date->addYear()->format('Y');
        } else {
            return $date->addYear()->endOfYear()->format('d F Y');
        }
    }

    public function getReport($year = null): object
    {
        $year = $year ?? now()->year;

        // 1. Get Raw Data
        $rawList = DB::table(function ($query) use ($year) {
            $query->select('amount', 'type', 'date', 'detail')
                ->from('journals')
                ->whereYear('date', $year)
                ->unionAll(
                    DB::table('payments')
                        ->select('amount', DB::raw("'earnings' as type"), 'date', DB::raw("'Pembayaran Sewa' as detail"))
                        ->whereYear('date', $year)
                        ->where('status', 'paid')
                );
        }, 'combined_data')
            ->orderBy('date', 'desc')
            ->get();

        // 2. Hydrate Models (This enables ->amount_formatted)
        $tableModels = $rawList->map(function ($item) {
            $model = ($item->detail === 'Pembayaran Sewa')
                ? new Payment()
                : new Journal();

            $model->setRawAttributes((array) $item, true);
            return $model;
        });

        // 3. Calculate Stats (Use $rawList here for math)
        $monthlyStats = collect(range(1, 12))->map(function ($monthNum) use ($rawList) {
            $monthData = $rawList->filter(fn($item) => date('n', strtotime($item->date)) == $monthNum);

            $earnings = (float) $monthData->where('type', 'earnings')->sum('amount');
            $expends = (float) $monthData->where('type', 'expends')->sum('amount');
            $profit = $earnings - $expends;

            return (object) [
                'month' => $monthNum,
                'month_name' => date('M', mktime(0, 0, 0, $monthNum, 1)),
                'earnings' => $earnings,
                'expends' => $expends,
                'profit' => $profit,
                // Manually format for stats since 'Stats' isn't a Model
                'earning_formatted' => 'Rp ' . number_format($earnings, 2, ',', '.'),
                'expend_formatted' => 'Rp ' . number_format($expends, 2, ',', '.'),
                'profit_formatted' => 'Rp ' . number_format($profit, 2, ',', '.'),
            ];
        });

        return (object) [
            'stats' => $monthlyStats,
            'table' => $tableModels
        ];
    }
}
