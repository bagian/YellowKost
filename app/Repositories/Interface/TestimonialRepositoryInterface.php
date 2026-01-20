<?php

namespace App\Repositories\Interface;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface TestimonialRepositoryInterface extends BaseRepositoryInterface
{
    public function getByUser($idUser): Collection;
}