<?php

namespace App\Services;

use App\Services\Interface\ImageServiceInterface;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ImageService implements ImageServiceInterface {
    public function save(UploadedFile $file, string $folder): array {
        $name = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $ext = $file->getClientOriginalExtension();
        $filename = Str::slug($name, '_') . ".$ext";
        $path = $file->storeAs("images/{$folder}", $filename, 'public');

        $data = [
            "name" => $filename,
            "url" => $path,
        ];

        return $data;
    }

    public function delete(string $url): bool {
        if ($url && Storage::disk('public')->exists($url)) {
            return Storage::disk('public')->delete($url);
        }
        return true;
    }
}