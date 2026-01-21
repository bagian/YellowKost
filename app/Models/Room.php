<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    /** @use HasFactory<\Database\Factories\RoomFactory> */
    use HasFactory;
    protected $casts = [
        'price' => 'float',
    ];

    public function pictures() {
        return $this->hasMany(RoomPicture::class, 'id_room');
    }

    public function bookings() {
        return $this->hasMany(Booking::class, 'id_room');
    }

    public function confirmedBooking() {
        return $this->hasMany(Booking::class, 'id_room')
            ->where('status', 'confirmed');

    }

    public function getPriceFormattedAttribute(): string
    {
        return 'Rp ' . number_format($this->price, 2, ',', '.');
    }

    public function activity() {
        return $this->hasMany(Activity::class, 'id_room');
    }
}
