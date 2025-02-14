<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\ProfileController;

use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\StaffMiddleware;

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
Route::get('/staff/home', [StaffController::class, 'index'])->middleware(middleware: StaffMiddleware::class);


Route::get('/staff/list', function () {
    return view('staff.staff_list');
});

// TODO ADD AUTH/Protection
Route::get('/staff/applications', function () {
    return view('staff.applications');
});

Route::get('/staff/punishments', function () {
    return view('staff.only_staff.staff_punishments');
});


Route::get('/staff/rules', function () {
    return view('staff.only_staff.staff_rules');
});

// Admin
Route::middleware([AdminMiddleware::class])->group(function () {
    Route::get('/admin/home',
     [AdminController::class, 'index']);
});

Route::get('/admin/application', function () {
    return view('admin.applications');
});
Route::middleware([AdminMiddleware::class])->group(function () {
    Route::get('/admin/home', [AdminController::class, 'index']);
    Route::get('/admin/messages', [MessageController::class, 'index'])->name('admin.messages');
    Route::post('/admin/messages/update/{id}', [MessageController::class, 'update'])->name('admin.messages.update');
});
Route::get('/admin/panel/message', function () {
    return view('admin.message_panel');
});


// Applications


// Forums


// Contact

Route::get('/test-email', function () {
    Mail::raw('This is a test email', function ($message) {
        $message->to('renswinckens@gmail.com')
                ->subject('Test Email');
    });

    return 'Test email sent!';
});

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
