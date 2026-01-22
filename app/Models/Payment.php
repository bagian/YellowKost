<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $casts = [
        'date' => 'date'
    ];

    public function booking() {
        return $this->belongsTo(Booking::class, 'id_booking');
    }

    public function payMethod() {
        return $this->belongsTo(PaymentMethod::class, 'payment_method');
    }

    public function getAmountFormattedAttribute(): string
    {
        return 'Rp ' . number_format($this->amount, 2, ',', '.');
    }
}
