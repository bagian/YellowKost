<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoomPicture extends Model
{
    //
    public function room() {
        return $this->belongsTo(Room::class, 'id_room');
    }
}
