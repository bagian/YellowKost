<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    use HasFactory;

    public function payMethod() {
        return $this->belongsTo(PaymentMethod::class, 'payment_method');
    }

    public function getAmountFormattedAttribute(): string
    {
        return 'Rp ' . number_format($this->amount, 2, ',', '.');
    }
}
