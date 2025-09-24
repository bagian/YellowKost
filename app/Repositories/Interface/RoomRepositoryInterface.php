<?php

namespace App\Repositories\Interface;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;

interface RoomRepositoryInterface
{
    public function all(): Collection;

    public function available(): Collection;

    public function allWithPictures(): Collection;

    public function find($id): ?Model;

    public function create(array $data): Model;

    public function createWithPictures(array $data, array $pictures): Model;

    public function update(Model $model, array $data, array $pictures): Model;

    public function delete(Model $model): Model;

    public function deletePicture($id): Model;
}