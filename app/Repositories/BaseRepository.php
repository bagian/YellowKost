<?php

namespace App\Repositories;

use Exception;
use Illuminate\Support\Facades\DB;

abstract class BaseRepository
{
    protected $model;

    abstract protected function getModelClass();

    public function __construct() {
        $this->model = $this->getModelClass();
    }

    protected function fillModel($model, array $data) {
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