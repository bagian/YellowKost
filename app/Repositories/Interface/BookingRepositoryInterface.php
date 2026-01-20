<?php

namespace App\Repositories\Interface;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

interface BookingRepositoryInterface extends BaseRepositoryInterface
{
    public function getUserBooking($idUser, array $status = [], array $with = []): LengthAwarePaginator;

    public function getActiveBooking($isUser, array $status = ['confirmed'], array $with = []): ?Model;

    public function confirmedBookings(): Collection;
}