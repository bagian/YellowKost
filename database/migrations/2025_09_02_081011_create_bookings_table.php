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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_room')->nullable()->constrained('rooms')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_user')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->date('check_in');
            $table->date('check_out')->nullable();
            $table->string('payment_proof')->nullable();
            $table->string('notes')->nullable();
            $table->enum('status', ['pending', 'confirmed', 'cancelled', 'completed']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room_rents');
    }
};
