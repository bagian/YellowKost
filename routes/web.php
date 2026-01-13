<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\Auth\SocialLoginController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\JournalController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsletterController;

/* -------------------------------------------------------------------------- */
/*                                  Homepage                                  */
/* -------------------------------------------------------------------------- */
Route::get('/', [HomepageController::class, 'index'])->name('home');

Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');


Route::get('/profile-setting', function(){
    return view('pages.settingAccount._settingAccount');
})->name('profile');

/* -------------------------- For Tenant's Booking -------------------------- */
Route::get('/penyewa/form', [BookingController::class, 'form'])->name('booking.form');
Route::post('/penyewa/submit', [BookingController::class, 'submit'])->name('booking.submit');

Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');

Route::get('/tentang-kami', function () {
    return view('landingpage.pages._aboutPage');
})->name('about.us');

Route::get('/fasilitas', function () {
    return view('landingpage.pages._facilitiesPage');
})->name('facilities');

Route::get('/gallery', function () {
    return view('landingpage.pages._galleryPage');
})->name('gallery');

Route::get('/kontak', function () {
    return view('landingpage.pages._contactPage');
})->name('contact.us');

Route::get('/p/kebijakan-privasi', function () {
    return view('landingpage.pages._privacyPolicyPage');
})->name('privacy.policy');

Route::get('/p/syarat-dan-ketentuan', function () {
    return view('landingpage.pages._termsConditionsPage');
})->name('terms.conditions');

Route::post('/midtrans/webhook', [PaymentsController::class, 'handleWebhook'])->name('payment.webhook');

/* -------------------------------------------------------------------------- */
/*                                  Dashboard                                 */
/* -------------------------------------------------------------------------- */

/* ------------------------------ Login social ------------------------------ */
Route::get('auth/{provider}', action: [SocialLoginController::class, 'redirect'])->name('auth.social');
Route::get('auth/{provider}/callback', [SocialLoginController::class, 'handleProviderCallback']);

/* ----------------------------- Admin and User ----------------------------- */
Route::middleware('auth')->group(function () {

    Route::get('/profile-setting', function () {
        return view('pages.settingAccount._settingAccount');
    })->name('profile');

    Route::resource('/profile', ProfileController::class);
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

    /* -------------------------------- User Only ------------------------------- */
    Route::middleware('role:superadmin,user')->group(function() {

        // Route::get('/unggah-bukti-pembayaran', [BookingController::class, 'payment'])->name('booking.bukti');
        // Route::post('/unggah-bukti-pembayaran', [BookingController::class, 'paymentSubmit'])->name('booking.payment.submit');

        Route::get('/pembayaran', [PaymentsController::class, 'index'])->name('booking.payment');
        Route::get('/pembayaran/checkout', [PaymentsController::class, 'checkout'])->name('payment.checkout');
        Route::get('/pembayaran/finish', [PaymentsController::class, 'finish'])->name('payment.finish');
        Route::get('/pembayaran/unfinish', [PaymentsController::class, 'unfinish'])->name('payment.unfinish');
        Route::get('/pembayaran/error', [PaymentsController::class, 'error'])->name('payment.error');
        Route::get('/pembayaran/history', [PaymentsController::class, 'history'])->name('payment.history');

        Route::get('/status-pengajuan', [BookingController::class, 'status'])->name('booking.status');
        Route::post('/status-pengajuan/detail', [BookingController::class, 'statusDetail'])->name('booking.status.detail');

        Route::resource('/testimonial', TestimonialController::class);
    });

    /* ------------------------------- Admin Only ------------------------------- */
    Route::middleware('role:superadmin,admin')->group(function () {

        Route::resource('/kamar', RoomController::class)->parameters([
            "kamar" => "room"
        ]);

        Route::resource('/penyewa', BookingController::class)->parameters([
            "penyewa" => "booking"
        ]);

        Route::get('/journal/pos', [JournalController::class, 'pos'])->name('journal.pos');
        Route::get('/journal/report', [JournalController::class, 'report'])->name('journal.report');
        Route::resource('/journal', JournalController::class);
        Route::get('/activity/data', [ActivityController::class, 'getData'])->name('activity.data');
        Route::resource('/activity', ActivityController::class);

    });
});

require __DIR__.'/auth.php';
