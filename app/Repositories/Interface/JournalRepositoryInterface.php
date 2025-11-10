<?php

namespace App\Repositories\Interface;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface JournalRepositoryInterface
{
    public function all(): Collection;

    public function report($period): Collection;

    public function find($id): ?Model;

    public function create(array $data): Model;
}