<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function room() {
        return $this->belongsTo(Room::class, 'id_room');
    }

    public function user() {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function payments() {
        return $this->hasMany(Payment::class, 'id_booking');
    }
}
