<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsletterController;

// Route::get('/', function () {
//     return view('templates.frontend.index');
// });
Route::get('/', function () {
    return view('landingpage._maincontent');
})->name('home');

Route::get('/formulir-pemesanan-kamar', function () {
    return view('landingpage.pages._bookingsRoom');
})->name('booking');

Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');

// Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('auth.google');
// Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);


Route::get('/form-testimonial', function () {
    return view('pages.testimonials._createTestimonial');
})->name('testimonial');


Route::get('/profile-setting', function(){
    return view('pages.settings._settingControl');
})->name('profile');

// Route::get('auth/{provider}', [SocialLoginController::class, 'redirect'])->name('auth.social');
// Route::get('auth/{provider}/callback', [SocialLoginController::class, 'handleProviderCallback']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'role:admin'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('role:admin')->group(function() {
    Route::resource('/room', RoomController::class);
    // Route::resource('penyewa', )
});

Route::get('/penyewa', function() {
    return view('pages.form-penyewa.forminputs');
})->name('form.penyewa');

Route::get('/infokamar', function() {
    return view('pages.kamar.kamars');
})->name('info.kamar');

require __DIR__.'/auth.php';