<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    public function payMethod() {
        return $this->belongsTo(PaymentMethod::class, 'payment_method');
    }
}
