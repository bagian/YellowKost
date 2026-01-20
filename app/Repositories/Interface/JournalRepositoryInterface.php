<?php

namespace App\Repositories\Interface;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface JournalRepositoryInterface extends BaseRepositoryInterface
{
    public function report($period): Collection;
}