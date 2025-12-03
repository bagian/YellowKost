<?php

namespace App\Repositories;

use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;

abstract class BaseRepository
{
    protected $model;

    abstract protected function getModelClass();

    public function __construct() {
        $this->model = $this->getModelClass();
    }

    protected function getPagination($queryBuilder = null, int $perPage = 10, array $columns = ['*'], string $pageName = 'page', ?int $page = null): LengthAwarePaginator {
        $builder = $queryBuilder ?? (new $this->model)->newQuery();

        return $builder->paginate($perPage, $columns, $pageName, $page);
    }

    protected function fillModel(Model $model, array $data) {
        foreach ($data as $key => $value) {
            $model->$key = $value;
        }

        return $model;
    }

    protected function transaction(callable $callback): mixed {
        DB::beginTransaction();

        try {
            $result = $callback();
            DB::commit();

            return $result;
        } catch (Exception $e) {
            DB::rollBack();

            throw $e;
        }
    }
}