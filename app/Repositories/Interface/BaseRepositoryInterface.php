<?php

namespace App\Repositories\Interface;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

interface BaseRepositoryInterface
{
    public function setPaginationOptions(string $orderBy = 'asc', int $perPage = 10, array $columns = ['*'], string $pageName = 'page', ?int $page = null): static;

    public function all(): Collection;

    public function get(array $with = [], array $filters = []): LengthAwarePaginator;

    public function find($id, array $with = []): ?Model;

    public function create(array $data): Model;

    public function update(Model $model, array $data): Model;

    public function delete(Model $model): Model;
}