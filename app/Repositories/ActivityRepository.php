<?php

namespace App\Repositories;

use App\Models\Activity;
use App\Models\User;
use App\Repositories\Interface\ActivityRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ActivityRepository extends BaseRepository implements ActivityRepositoryInterface
{
    protected function getModelClass() {
        return Activity::class;
    }

    public function __construct() {
        parent::__construct();
    }

    public function all(): Collection {
        return $this->model::all();
    }

    public function get(): LengthAwarePaginator {
        $query = $this->model::with('user', 'room');
        return $this->getPagination($query);
    }

    public function create(array $data): Model {
        return $this->transaction(function() use ($data): Model {
            $dataUser = $data;

            $model = new $this->model;

            $model = $this->fillModel($model, $data);

            $model->save();

            return $model;
        });
    }

    public function update(Model $model, array $data): Model {
        return $this->transaction(function() use ($model, $data): Model {
            $model = $this->fillModel($model, $data);

            $model->save();

            return $model;
        });
    }
}