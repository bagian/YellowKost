<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    public function payments() {
        return $this->hasMany(Payment::class, 'payment_method');
    }

    public function journals() {
        return $this->hasMany(Journal::class, 'payment_method');
    }
}
