<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_booking')->constrained('bookings')->onDelete('restrict')->onUpdate('cascade');
            $table->decimal('amount', 20, 2);
            $table->date('date');
            $table->enum('status', ['confirmed', 'pending', 'failed']);
            $table->boolean('is_dp')->default(false);
            $table->foreignId('payment_method')->constrained('payment_methods')->onDelete('restrict')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
