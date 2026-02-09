<?php

namespace App\Repositories;

use App\Models\Booking;
use App\Models\User;
use App\Repositories\Interface\JournalRepositoryInterface;
use App\Repositories\Interface\PaymentRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Collection as SupportCollection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class JournalRepository extends BaseRepository implements JournalRepositoryInterface
{
    protected $paymentRepository;

    protected function getModelClass() {
        return Booking::class;
    }

    public function __construct(PaymentRepositoryInterface $paymentRepository) {
        parent::__construct();

        $this->paymentRepository = $paymentRepository;
    }

    public function report($period): SupportCollection {
        $payments = DB::table('payments')
            ->join('bookings', 'payments.id_booking', '=', 'bookings.id')
            ->join('users', 'bookings.id_user', '=', 'users.id')
            ->join('rooms', 'bookings.id_room', '=', 'rooms.id')
            ->select(
                DB::raw("'earnings' as type"),
                DB::raw("concat('Room ', rooms.room_name, ' - ', users.full_name) as detail"),
                'amount',
                'date'
            )
            ->whereMonth('date', $period['month'])
            ->whereYear('date', $period['year']);

        $journal = DB::table('journals')
            ->select(
                'type',
                'detail',
                'amount',
                'date'
            )
            ->whereMonth('date', $period['month'])
            ->whereYear('date', $period['year']);

        $union = $journal->unionAll($payments)->orderBy('date')->get();

        return $union;
    }

    public function create(array $data): Model {
        if ($data['type'] == "payment") {
            unset($data['type']);
            return $this->paymentRepository->create($data);
        }

        return parent::create($data);
    }
}