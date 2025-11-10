<?php

namespace App\Repositories;

use App\Models\Payment;
use App\Repositories\Interface\PaymentRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class PaymentRepository extends BaseRepository implements PaymentRepositoryInterface
{
    protected $tenantRepository;

    protected function getModelClass() {
        return Payment::class;
    }

    public function all(): Collection {
        return $this->model::all();
    }

    public function get(): Collection {
    return $this->model::with()->get();
    }

    public function find($id): Model {
        return $this->model::find($id);
    }

    public function create(array $data): Model {
        return $this->transaction(function() use ($data): Model {
            $dataUser = $data;

            $checkIn = $data['check_in'];
            unset($dataUser['check_in']);

            $user = Auth::user();
            $user = $this->tenantRepository->update($user, $dataUser);

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

            return $model;
        });
    }

    public function delete(Model $model): Model {
        $model->delete();

        return $model;
    }
}