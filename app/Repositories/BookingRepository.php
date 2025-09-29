<?php

namespace App\Repositories;

use App\Models\Booking;
use App\Models\User;
use App\Repositories\Interface\BookingRepositoryInterface;
use App\Repositories\Interface\TenantRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class BookingRepository extends BaseRepository implements BookingRepositoryInterface
{
    protected $tenantRepository;

    protected function getModelClass() {
        return Booking::class;
    }

    public function __construct(TenantRepositoryInterface $tenantRepository) {
        parent::__construct();

        $this->tenantRepository = $tenantRepository;
    }

    public function all(): Collection {
        return $this->model::all();
    }

    public function find($id): Model {
        return $this->model::find($id);
    }

    public function create(array $data): Model {
        return $this->transaction(function() use ($data): Model {
            $dataUser = $data;

            $checkIn = $data['check_in'];
            unset($dataUser['check_in']);

            $idUser = $data['id_user'];
            unset($dataUser['id_user']);

            if (empty($idUser)) {
                $user = $this->tenantRepository->create($dataUser);
                $idUser = $user->id_user;
            } else {
                $user = User::findOrFail($idUser);
                $user = $this->tenantRepository->update($user, $dataUser);
            }

            $model = new $this->model;
            $model->id_user = $idUser;
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

            return $model;
        });
    }

    public function delete(Model $model): Model {
        $model->delete();

        return $model;
    }
}