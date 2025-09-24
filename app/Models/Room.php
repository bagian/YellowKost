<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    /** @use HasFactory<\Database\Factories\RoomFactory> */
    use HasFactory;

    public function Pictures() {
        return $this->hasMany(RoomPicture::class, 'id_room');
    }

    public function Booking() {
        return $this->hasMany(Booking::class, 'id_room');
    }
}
