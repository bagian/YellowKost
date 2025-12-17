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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('id_room')->constrained('rooms')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_user')->nullable()->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->enum('category', ['maintenance', 'supply', 'service']);
            $table->integer('amount')->nullable();
            $table->enum('priority', ['high', 'medium', 'low']);
            $table->date('date');
            $table->enum('status', ['completed', 'progress', 'incomplete'])->default('incomplete');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maintenances');
    }
};
