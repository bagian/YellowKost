<?php

use App\Http\Controllers\Auth\SocialLoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\TenantController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsletterController;

// Route::get('/', function () {
//     return view('templates.frontend.index');
// });
Route::get('/', function () {
    // Panggil file view yang berisi kontennya.
    // Blade akan otomatis memuat layout dari @extends di dalam file ini.
    return view('landingpage._maincontent');
});

Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');

// Route::get('/logins', function () {
//     return view('pages.login.logins');
// })->name('logins');
Route::get('auth/{provider}', [SocialLoginController::class, 'redirect']);
Route::get('auth/{provider}/callback', [SocialLoginController::class, 'handleProviderCallback']);

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
    Route::resource('/penyewa', TenantController::class)->parameters([
        "penyewa" => "tenant"
    ]);
});

Route::get('/infokamar', function() {
    return view('pages.kamar.kamars');
})->name('info.kamar');

require __DIR__.'/auth.php';
