<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    public function booking() {
        return $this->belongsTo(Booking::class, 'id_booking');
    }

    public function payMethod() {
        return $this->belongsTo(PaymentMethod::class, 'payment_method');
    }
}
