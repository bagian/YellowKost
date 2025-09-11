<?php

namespace App\Repositories;

use App\Models\Room;
use App\Models\RoomPicture;
use App\Repositories\Interface\RoomRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class RoomRepository extends BaseRepository implements RoomRepositoryInterface
{
    protected function getModelClass() {
        return Room::class;
    }

    public function all(): Collection {
        return $this->model::all();
    }

    public function allWithPictures(): Collection {
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
            if (!empty($data['deleted'])) {
                $validatedIDs = RoomPicture::whereIn('id', $data['deleted'])->where('id_room', $model->id)->pluck('id')->toArray();

                foreach ($validatedIDs as $value) {
                    $this->deletePicture($value);
                }

                unset($data['deleted']);
            }

            if (!empty($pictures)) {
                foreach ($pictures as $row) {
                    $this->savePicture($model->id, $row);
                }
            }

            $model = $this->fillModel($model, $data);
            $model->save();

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

        $model->delete();

        if ($model->url && Storage::disk('public')->exists($model->url)) {
            Storage::disk('public')->delete($model->url);
        }

        return $model;
    }
}