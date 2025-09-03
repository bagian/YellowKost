<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoomPicture extends Model
{
    //
    public function Rooms() {
        return $this->belongsTo(Room::class, 'id_room');
    }
}
