<?php

namespace App\Repositories\Interface;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

interface PaymentRepositoryInterface extends BaseRepositoryInterface
{
    public function getNextPeriod($idBooking, bool $isDueDate = false): ?string;

    public function getReport($year = null): object;
}