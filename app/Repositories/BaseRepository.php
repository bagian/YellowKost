<?php

namespace App\Repositories;

use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;

abstract class BaseRepository
{
    protected $model;
    protected string $orderBy;
    protected int $perPage;
    protected array $columns;
    protected string $pageName;
    protected ?int $page;

    abstract protected function getModelClass();

    public function __construct() {
        $class = $this->getModelClass();
        $this->model = new $class;

        $this->setPaginationOptions();
    }

    public function setPaginationOptions(string $orderBy = 'asc', int $perPage = 10, array $columns = ['*'], string $pageName = 'page', ?int $page = null): static {
        $this->perPage = $perPage;
        $this->columns = $columns;
        $this->pageName = $pageName;
        $this->orderBy = $orderBy;
        $this->page = $page;

        return $this;
    }

    public function all(): Collection
    {
        return $this->model::all();
    }

    public function get(array $with = [], array $filters = []): LengthAwarePaginator
    {
        /* -------------------------------------------------------------------------- */
        /*                            Example filters data                            */
        /* -------------------------------------------------------------------------- */
        // Support both ['column' => value] and ['column', 'operator', 'value'] and ['column', 'value']
        // $filters = [
        //      'where' => [
        //          ['column' => value],
        //          ['column', 'operator', 'value'],
        //          ['column', 'value']
        //      ],
        //      'whereHas' => [
        //          ['relation' => function ($q) {
        //              $q->where(...);
        //          }],
        //          ['relation' => function ($q) {
        //              $q->where(...);
        //          }]
        //      ]
        // ];
        // Need to be wrapped inside an array

        $query = $this->model->newQuery()
            ->when($with, fn($q) => $q->with($with))
            ->when($filters, function ($q) use ($filters) {
                foreach ($filters as $key => $condition) {
                    switch ($key) {
                        case "where":
                            foreach ($condition as $filter) {
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
                            break;
                        case "whereHas":
                            foreach ($condition as $filter) {
                                if (is_array($filter) && ($relation = key($filter)) && is_callable($filter[$relation])) {
                                    $q->whereHas($relation, $filter[$relation]);
                                }
                            }
                            break;
                    }
                }
            });

        return $this->getPagination($query);
    }

    public function find($id, array $with = []): Model
    {
        return $this->model->newQuery()
            ->when($with, fn($q) => $q->with($with))
            ->findOrFail($id);
    }

    public function create(array $data): Model
    {
        return $this->transaction(function() use ($data): Model {
            $model = new $this->model;
            $model = $this->fillModel($model, $data);
            $model->save();

            return $model;
        });
    }

    public function update(Model $model, array $data): Model
    {
        return $this->transaction(function () use ($model, $data): Model {
            $model = $this->fillModel($model, $data);

            $model->save();

            return $model;
        });
    }

    public function delete(Model $model): Model
    {
        $model->delete();

        return $model;
    }

    protected function getPagination($queryBuilder = null): LengthAwarePaginator {
        $builder = $queryBuilder ?? $this->model->newQuery();

        return $builder->orderBy('created_at', $this->orderBy)->paginate($this->perPage, $this->columns, $this->pageName, $this->page);
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

    protected function priceToNumber(string $price): float {
        $price = str_replace("Rp ", "", $price);
        $price = str_replace(".", "", $price);
        $price = str_replace(",", ".", $price);
        return (float) $price;
    }
}