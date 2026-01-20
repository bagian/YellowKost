<?php

namespace App\Repositories;

use App\Models\Activity;
use App\Models\User;
use App\Repositories\Interface\ActivityRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ActivityRepository extends BaseRepository implements ActivityRepositoryInterface
{
    protected function getModelClass() {
        return Activity::class;
    }

    public function __construct() {
        parent::__construct();
    }
}