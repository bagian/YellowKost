<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'role:admin'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('role:admin')->group(function() {
    Route::resource('/kamar', RoomController::class)->parameters([
        "kamar" => "room"
    ]);
    // Route::resource('penyewa', )
});

Route::get('/penyewa', function() {
    return view('pages.form-penyewa.forminputs');
})->name('form.penyewa');

Route::get('/infokamar', function() {
    return view('pages.kamar.kamars');
})->name('info.kamar');

require __DIR__.'/auth.php';
