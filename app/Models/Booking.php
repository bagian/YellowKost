<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function Room() {
        return $this->belongsTo(Room::class, 'id_room');
    }

    public function User() {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function Payment() {
        return $this->hasMany(Payment::class, 'id_booking');
    }
}
