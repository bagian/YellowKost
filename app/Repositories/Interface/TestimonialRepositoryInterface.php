<?php

namespace App\Repositories\Interface;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface TestimonialRepositoryInterface
{
    public function all(): Collection;

    public function get(): Collection;

    public function getByUser($idUser): Collection;

    public function find($id): ?Model;

    public function create(array $data): Model;

    public function update(Model $model, array $data): Model;
}