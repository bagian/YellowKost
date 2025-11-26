<?php

use App\Http\Controllers\Auth\SocialLoginController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\JournalController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\TenantController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsletterController;

// Route::get('/', function () {
//     return view('templates.frontend.index');
// });
Route::get('/', function () {
    return view('landingpage._maincontent');
})->name('home');

Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');

Route::get('/form-testimonial', function () {
    return view('pages.testimonials._createTestimonial');
})->name('testimonial');


Route::get('/profile-setting', function(){
    return view('pages.settingAccount._settingAccount');
})->name('profile');


Route::post('/sewa/submit', [BookingController::class, 'submit'])->name('rent.submit');

Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');

// Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('auth.google');
// Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);


Route::get('/form-testimonial', function () {
    return view('pages.testimonials._createTestimonial');
})->name('testimonial');


// Route::get('/testerror', function() {
//     abort(419, 'Unauthorized action.');
// })->name('test.error');


Route::get('/profile-setting', function(){
    return view('pages.settingAccount._settingAccount');
})->name('profile');

Route::get('auth/{provider}', action: [SocialLoginController::class, 'redirect'])->name('auth.social');
Route::get('auth/{provider}/callback', [SocialLoginController::class, 'handleProviderCallback']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'role:admin,user'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/penyewa/form', [BookingController::class, 'form'])->name('booking.form');
Route::post('/penyewa/submit', [BookingController::class, 'submit'])->name('booking.submit');


Route::middleware('role:admin')->group(function() {
    Route::resource('/kamar', RoomController::class)->parameters([
        "kamar" => "room"
    ]);
    Route::resource('/penyewa', BookingController::class)->parameters([
        "penyewa" => "booking"
    ]);

    Route::get('/journal/pos', [JournalController::class, 'pos'])->name('journal.pos');
    Route::get('/journal/report', [JournalController::class, 'report'])->name('journal.report');
    Route::resource('/journal', JournalController::class);
});


Route::get('/infokamar', function() {
    return view('pages.kamar.create');
})->name('info.kamar');
require __DIR__.'/auth.php';