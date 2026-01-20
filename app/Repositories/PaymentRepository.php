<?php

namespace App\Repositories;

use App\Models\Payment;
use App\Repositories\Interface\BookingRepositoryInterface;
use App\Repositories\Interface\PaymentRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;

class PaymentRepository extends BaseRepository implements PaymentRepositoryInterface
{
    protected $bookingRepository;

    public function __construct(BookingRepositoryInterface $bookingRepository){
        parent::__construct();

        $this->bookingRepository = $bookingRepository;
    }

    protected function getModelClass() {
        return Payment::class;
    }

    public function getNextPeriod($idBooking): ?string {
        $lastPayment = $this->model::where('id_booking', $idBooking)->select('period')->orderBy('period', 'desc')->first();

        if (!$lastPayment) {
            $booking = $this->bookingRepository->find($idBooking, ['room']);
            $roomPeriod = $booking->room->period;
            if ($roomPeriod == 'month') {
                return $booking->check_in->format('Y-m');
            } else if ($roomPeriod == 'year') {
                return $booking->check_in->format('Y');
            }
            return null;
        }

        $date = \Carbon\Carbon::parse($lastPayment->period);

        // If it's a monthly room (contains a dash)
        if (str_contains($lastPayment->period, '-')) {
            return $date->addMonth()->format('Y-m');
        }

        // If it's a yearly room
        return $date->addYear()->format('Y');
    }
}