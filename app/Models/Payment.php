<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public function Booking() {
        return $this->belongsTo(Booking::class, 'id_booking');
    }
}
