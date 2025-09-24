<?php

<<<<<<< Updated upstream
=======
use App\Http\Controllers\Auth\SocialLoginController;
use App\Http\Controllers\BookingController;
>>>>>>> Stashed changes
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\TenantController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingpage._maincontent');
})->name('home');

Route::get('/formulir-pemesanan-kamar', function () {
    return view('landingpage.pages._bookingsRoom');
})->name('booking');

Route::post('/sewa/submit', [BookingController::class, 'submit'])->name('rent.submit');

Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');

// Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('auth.google');
// Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);


Route::get('/form-testimonial', function () {
    return view('pages.testimonials._createTestimonial');
})->name('testimonial');


Route::get('/profile-setting', function(){
    return view('pages.settingAccount._settingAccount');
})->name('profile');

<<<<<<< Updated upstream
// Route::get('auth/{provider}', [SocialLoginController::class, 'redirect'])->name('auth.social');
// Route::get('auth/{provider}/callback', [SocialLoginController::class, 'handleProviderCallback']);
=======
Route::get('auth/{provider}', action: [SocialLoginController::class, 'redirect'])->name('auth.social');
Route::get('auth/{provider}/callback', [SocialLoginController::class, 'handleProviderCallback']);
>>>>>>> Stashed changes

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'role:admin,user'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('role:admin')->group(function() {
<<<<<<< Updated upstream
    Route::resource('/room', RoomController::class);
    // Route::resource('penyewa', )
=======
    Route::resource('/kamar', RoomController::class)->parameters([
        "kamar" => "room"
    ]);
    Route::resource('/penyewa', BookingController::class)->parameters([
        "penyewa" => "booking"
    ]);
>>>>>>> Stashed changes
});

Route::get('/penyewa', function() {
    return view('pages.form-penyewa.forminputs');
})->name('form.penyewa');

Route::get('/infokamar', function() {
    return view('pages.kamar.kamars');
})->name('info.kamar');

require __DIR__.'/auth.php';
