<?php

namespace App\Repositories;

use App\Models\Room;
use App\Models\RoomPicture;
use App\Repositories\Interface\RoomRepositoryInterface;
use App\Services\Interface\ImageServiceInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class RoomRepository extends BaseRepository implements RoomRepositoryInterface
{
    protected $imageService;

    public function __construct(ImageServiceInterface $imageService) {
        parent::__construct();

        $this->imageService = $imageService;
    }

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

    private function addPictures(int $id, array $data) {
        $model = new RoomPicture();
        $model->id_room = $id;
        $this->fillModel($model, $data);
        $model->save();

        return $model;
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

    public function createWithPictures(array $data, array $pictures = []): Model {
        return $this->transaction(callback: function () use ($data, $pictures) {
            $room = $this->create($data);
    
            if (!empty($pictures)) {
                foreach ($pictures as $file) {
                    $folder = "rooms/ID_{$room->id}";
                    $data = $this->imageService->save($file, $folder);

                    $picture = $this->addPictures($room->id, $data);
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
                    $folder = "rooms/ID_{$model->id}";
                    $data = $this->imageService->save($row, $folder);

                    $picture = $this->addPictures($model->id, $data);
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

        $this->imageService->delete($model->url);

        return $model;
    }
}