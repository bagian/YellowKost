<?php

namespace App\Repositories;

use App\Models\Testimonial;
use App\Models\User;
use App\Repositories\Interface\TenantRepositoryInterface;
use App\Repositories\Interface\TestimonialRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TestimonialRepository extends BaseRepository implements TestimonialRepositoryInterface
{
    protected $tenantRepository;

    protected function getModelClass() {
        return Testimonial::class;
    }

    public function __construct(TenantRepositoryInterface $tenantRepository) {
        parent::__construct();

        $this->tenantRepository = $tenantRepository;
    }

    public function getByUser($idUser): Collection {
        return $this->model::where('id_user', $idUser)->with('user')->get();
    }
}