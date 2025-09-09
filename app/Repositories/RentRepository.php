<?php

namespace App\Repositories;

use App\Models\RoomRent;
use App\Repositories\Interface\RentRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class RentRepository extends BaseRepository implements RentRepositoryInterface
{
    protected function getModelClass() {
        return RoomRent::class;
    }

    public function all(): Collection {
        return $this->model::all();
    }

    public function allAvailable(): Collection {
        return $this->model::with('pictures')->get();
    }

    public function getPictures($id): Collection {
        return RoomPicture::where('id_room', $id)->get();
    }

    public function find($id): Model {
        return $this->model::find($id);
    }

    public function create(array $data): Model {
        return $this->transaction(function() use ($data): Model {
            $model = new $this->model;
            $model = $this->fillModel($model, $data);
            $model->save();

            return $model;
        });
    }

    public function savePicture($id, UploadedFile $file): Model {
        return $this->transaction(function() use ($id, $file) {
            $folder = "ID_{$id}";
            $name = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $ext = $file->getClientOriginalExtension();
            $filename = Str::slug($name, '_') . ".$ext";
            $path = $file->storeAs("images/rooms/{$folder}", $filename, 'public');

            $data = [
                "name" => $filename,
                "url" => $path,
            ];

            $model = new RoomPicture();
            $model->id_room = $id;
            $this->fillModel($model, $data);
            $model->save();
            
            return $model;
        });
    }

    public function createWithPictures(array $data, array $pictures = []): Model {
        return $this->transaction(callback: function () use ($data, $pictures) {
            $room = $this->create($data);
    
            if (!empty($pictures)) {
                foreach ($pictures as $file) {    
                    $this->savePicture($room->id, $file);
                }

                $room->load('pictures');
            }

            return $room;
        });
    }    

    public function update(Model $model, array $data, array $pictures): Model {
        return $this->transaction(function() use ($data, $model, $pictures): Model {
            $model = $this->fillModel($model, $data);
            $model->save();

            if (!empty($pictures)) {
                foreach ($pictures as $row) {
                    $this->savePicture($model->id, $row);
                }
            }

            if (!empty($data['deleted'])) {
                $validatedIDs = RoomPicture::whereIn('id', $data['deleted'])->where('id_room', $model->id)->pluck('id')->toArray();

                foreach ($validatedIDs as $value) {
                    $this->deletePicture($value);
                }
            }

            return $model;
        });
    }

    public function delete(Model $model): Model {
        $pictures = RoomPicture::where('id_room', $model->id)->get();

        foreach ($pictures as $row) {
            $picture = $this->deletePicture($row->id);
        }

        $model->delete();

        $model->deleted_pictures = $pictures;

        return $model;
    }

    public function deletePicture($id): Model {
        $model = RoomPicture::findOrFail($id);

        if ($model->url && Storage::disk('public')->exists($model->url)) {
            Storage::disk('public')->delete($model->url);
        }

        $model->delete();

        return $model;
    }
}