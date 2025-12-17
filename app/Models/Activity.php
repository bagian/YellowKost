<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    //
    use HasFactory;

    protected $casts = [
        'date' => 'date'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function room() {
        return $this->belongsTo(Room::class, 'id_room');
    }
}
