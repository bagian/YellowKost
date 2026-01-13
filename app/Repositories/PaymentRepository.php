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

    public function all(): Collection {
        return $this->model::all();
    }

    public function get(array $with = [], array $filters = []): LengthAwarePaginator {
        $query = $this->model->newQuery()
            ->when($with, fn($q) => $q->with($with))
            ->when($filters, function ($q) use ($filters) {
                foreach ($filters as $filter) {
                    // Support both ['column' => value] and ['column', 'operator', 'value'] and ['column', 'value']
                    if (is_array($filter) && count($filter) === 3) {
                        [$column, $operator, $value] = $filter;
                        $q->where($column, $operator, $value);
                    } elseif (is_array($filter) && count($filter) === 2) {
                        [$column, $value] = $filter;
                        $q->where($column, $value);
                    } elseif (is_string($column = key($filter))) {
                        $q->where($column, current($filter));
                    }
                }
            });

        return $this->getPagination($query);
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