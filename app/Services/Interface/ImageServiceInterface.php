<?php

namespace App\Services\Interface;

use Illuminate\Http\UploadedFile;

interface ImageServiceInterface {
    public function save(UploadedFile $file, string $folder): array;

    public function delete(string $url): bool;
}