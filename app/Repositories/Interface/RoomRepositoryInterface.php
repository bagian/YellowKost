<?php

namespace App\Repositories\Interface;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Pagination\LengthAwarePaginator;

interface RoomRepositoryInterface extends BaseRepositoryInterface
{
    public function available(): Collection;

    public function allWithPictures(): Collection;

    public function getWithPictures(): LengthAwarePaginator;

    public function createWithPictures(array $data, array $pictures): Model;

    public function update(Model $model, array $data, ?array $pictures = []): Model;

    public function deletePicture($id): Model;
}