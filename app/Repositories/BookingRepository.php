<?php

namespace App\Repositories;

use App\Models\Booking;
use App\Models\Room;
use App\Models\User;
use App\Repositories\Interface\BookingRepositoryInterface;
use App\Repositories\Interface\RoomRepositoryInterface;
use App\Repositories\Interface\TenantRepositoryInterface;
use App\Services\Interface\ImageServiceInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;

class BookingRepository extends BaseRepository implements BookingRepositoryInterface
{
    protected $tenantRepository, $roomRepository, $imageService;

    protected function getModelClass() {
        return Booking::class;
    }

    public function __construct(TenantRepositoryInterface $tenantRepository, RoomRepositoryInterface $roomRepository, ImageServiceInterface $imageService) {
        parent::__construct();

        $this->tenantRepository = $tenantRepository;
        $this->roomRepository = $roomRepository;
        $this->imageService = $imageService;
    }

    public function getUserBooking($idUser, array $status = [], array $with = []): LengthAwarePaginator {
        $page = 10;
        if ($idUser == null) {
            return new LengthAwarePaginator(
                new Collection(),
                0,
                $page,
                1
            );
        }
        $query = $this->model->newQuery();
        $query = $query->where('id_user', $idUser);

        if (!empty($status)) {
            $query->whereIn('status', $status);
        }

        if (!empty($with)) {
            $query->with($with);
        }

        return $this->getPagination($query);
    }

    public function getActiveBooking($idUser, array $status = ['confirmed'], array $with = []): ?Model {
        $query = $this->model->newQuery();
        $query = $query->where('id_user', $idUser);

        if (!empty($status)) {
            $query->whereIn('status', $status);
        }

        if (!empty($with)) {
            $query->with($with);
        }

        return $query->orderBy('created_at', 'desc')->first();
    }

    public function confirmedBookings(): Collection {
        return $this->model::where('status', 'confirmed')->with('user', 'room')->get();
    }

    public function create(array $data): Model {
        return $this->transaction(function() use ($data): Model {

            $checkIn = $data['check_in'];
            unset($data['check_in']);

            if(isset($data['id_user'])) {
                $user = User::find($data['id_user']);
                unset($data['id_user']);
            } else {
                $user = Auth::user();
            }
            $user = $this->tenantRepository->update($user, $data);

            $model = new $this->model;
            $model->id_user = $user->id;
            $model->check_in = $checkIn;
            $model->status = 'pending';
            $model->save();

            return $model;
        });
    }

    public function update(Model $model, array $data): Model {
        return $this->transaction(function() use ($data, $model): Model {
            if (isset($data['payment_proof'])) {
                $name = "payment_proof_{$model->id}";
                $savedPicture = $this->imageService->save($data['payment_proof'], 'payment_proof', $name);
                $data['payment_proof'] = $savedPicture['url'];
            }

            $model = $this->fillModel($model, $data);
            $model->save();

            if (isset($data['status'])) {
                if($data['status'] === 'confirmed') {
                    $updateRoom['is_available'] = false;
                } else {
                    $updateRoom['is_available'] = true;
                }
            }

            if(isset($updateRoom['is_available'])) {
                $room = Room::find($model->id_room);
                $room = $this->roomRepository->update($room, $updateRoom);
            }

            return $model;
        });
    }
}