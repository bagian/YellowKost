<?php

namespace App\Repositories;

use App\Models\Booking;
use App\Models\Room;
use App\Models\User;
use App\Repositories\Interface\BookingRepositoryInterface;
use App\Repositories\Interface\RoomRepositoryInterface;
use App\Repositories\Interface\TenantRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class BookingRepository extends BaseRepository implements BookingRepositoryInterface
{
    protected $tenantRepository, $roomRepository;

    protected function getModelClass() {
        return Booking::class;
    }

    public function __construct(TenantRepositoryInterface $tenantRepository, RoomRepositoryInterface $roomRepository) {
        parent::__construct();

        $this->tenantRepository = $tenantRepository;
        $this->roomRepository = $roomRepository;
    }

    public function all(): Collection {
        return $this->model::all();
    }

    public function get(): Collection {
        return $this->model::with('user')->get();
    }

    public function find($id): Model {
        return $this->model::find($id);
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
            $model = $this->fillModel($model, $data);
            $model->save();

            if($data['status'] === 'confirmed') {
                $room = Room::find($model->id_room);
                $data['is_available'] = false;
                $room = $this->roomRepository->update($room, $data);
            }

            return $model;
        });
    }

    public function delete(Model $model): Model {
        $model->delete();

        return $model;
    }
}