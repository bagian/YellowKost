<?php

namespace App\Repositories;

use App\Models\Room;
use App\Models\RoomPicture;
use App\Models\User;
use App\Repositories\Interface\TenantRepositoryInterface;
use App\Services\Interface\ImageServiceInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TenantRepository extends BaseRepository implements TenantRepositoryInterface
{
    protected $imageService;

    public function __construct(ImageServiceInterface $imageService) {
        parent::__construct();

        $this->imageService = $imageService;
    }

    protected function getModelClass() {
        return User::class;
    }

    public function all(): Collection {
        return $this->model::all();
    }

    public function find($id): Model {
        return $this->model::find($id);
    }

    public function create(array $data): Model {
    }

    public function update(Model $model, array $data): Model {
    }

    public function delete(Model $model): Model {
    }
}