<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('home');
})->name('home');

// rules
Route::get('/rules', function () {
    return view('rules.home');
});
Route::get('/rules/network', function () {
    return view('rules.network');
});
Route::get('/rules/skyblock', function () {
    return view('rules.skyblock');
});
Route::get('/rules/allowed-modifications', function () {
    return view('rules.allowed-modifications');
});
Route::get('/rules/forum', function () {
    return view('rules.forum-rules');
});

// Wiki
Route::get('/wiki', function () {
    return view('wiki.home');
});
Route::get('/wiki/faq', function () {
    return view('wiki.faq');
});
Route::get('/wiki/commands', function () {
    return view('wiki.commands');
});
Route::get('/wiki/ranks', function () {
    return view('wiki.ranks');
});
Route::get('/wiki/skyblock', function () {
    return view('wiki.skyblock');
});

// Staff
Route::get('/staff', function () {
    return view('staff.staff');
});

// Applications


// Forums


// Contact




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Email verification routes
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
    ->middleware(['auth', 'signed'])
    ->name('verification.verify');

Route::post('/email/resend', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.resend');

require __DIR__.'/auth.php';
