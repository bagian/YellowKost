<?php

namespace App\Repositories\Interface;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

interface BookingRepositoryInterface
{
    public function all(): Collection;

    public function get(): LengthAwarePaginator;

    public function getUserBooking($idUser, array $status = []): LengthAwarePaginator;

    public function find($id): ?Model;

    public function confirmedBookings(): Collection;

    public function create(array $data): Model;

    public function update(Model $model, array $data): Model;

    public function delete(Model $model): Model;
}