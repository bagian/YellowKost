<?php

namespace App\Repositories;

use App\Models\Testimonial;
use App\Models\User;
use App\Repositories\Interface\TenantRepositoryInterface;
use App\Repositories\Interface\TestimonialRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TestimonialRepository extends BaseRepository implements TestimonialRepositoryInterface
{
    protected $tenantRepository;

    protected function getModelClass() {
        return Testimonial::class;
    }

    public function __construct(TenantRepositoryInterface $tenantRepository) {
        parent::__construct();

        $this->tenantRepository = $tenantRepository;
    }

    public function all(): Collection {
        return $this->model::with('user')->all();
    }

    public function get(): Collection {
        return $this->model::get();
    }

    public function getByUser($idUser): Collection {
        return $this->model::where('id_user', $idUser)->with('user')->get();
    }

    public function find($id): Model {
        return $this->model::find($id);
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
        return $this->transaction(function() use ($model, $data): Model {
            $model = $this->fillModel($model, $data);

            $model->save();

            return $model;
        });
    }
}