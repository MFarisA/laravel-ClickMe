<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SpaceController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest', 'preventBackHistory')->group(function() {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);

    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

Route::middleware('auth', 'preventBackHistory')->group(function() {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/', function () {
        return view('home');
    })->name('home');
});

Route::get('/home', [SpaceController::class, 'index'])->name('home');

Route::get('/space/{id}', [SpaceController::class, 'show'])->name('space.show');
Route::post('/space', [SpaceController::class, 'store'])->name('space.store');

Route::get('/setting', function () {
    return view('setting');
}) ;

