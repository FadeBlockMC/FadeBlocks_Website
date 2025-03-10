<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\auth\AuthenticatedSessionController;

use App\Http\Middleware\Authenticator;


use App\Livewire\Rules;


use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/rules', Rules::class);

// apply

Route::get('/apply', function () {
    return view('forums.home');
});


Route::middleware([Authenticator::class])->group(function () {


    Route::get('/applications/staff', [ApplicationController::class, 'staff']);
    Route::get('/applications/media', [ApplicationController::class, 'media']);
    Route::get('/applications/developer', [ApplicationController::class, 'developer']);
    Route::post('/applications/store', [ApplicationController::class, 'store'])->name('application.store');

// Appeal Routes
Route::get('/appeals/punishment', [ReportController::class, 'punishment']);

// Report Routes
Route::get('/reports/player', [ReportController::class, 'player']);
Route::get('/reports/bug', [ReportController::class, 'bug']);
Route::post('/reports/store', [ReportController::class, 'store'])->name('reports.store');

});


Route::get('/development', function () {
    return view('development');
});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
