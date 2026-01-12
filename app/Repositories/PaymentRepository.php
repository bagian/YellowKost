<?php

namespace App\Repositories;

use App\Models\Payment;
use App\Repositories\Interface\BookingRepositoryInterface;
use App\Repositories\Interface\PaymentRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
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

    public function all(): Collection {
        return $this->model::all();
    }

    public function get(): Collection {
        return $this->model::with()->get();
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

    public function create(array $data): Model {
        return $this->transaction(function() use ($data): Model {
            $model = new $this->model;
            $model = $this->fillModel($model, $data);
            $model->save();

            return $model;
        });
    }

    public function update(Model $model, array $data): Model {
        return $this->transaction(function() use ($data, $model): Model {
            $model = $this->fillModel($model, $data);
            $model->save();

            return $model;
        });
    }

    public function delete(Model $model): Model {
        $model->delete();

        return $model;
    }
}