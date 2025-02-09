<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SpaceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

// login-register
Route::middleware('guest', 'preventBackHistory')->group(function() {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);

    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

// logout
Route::middleware('auth', 'preventBackHistory')->group(function() {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/', function () {
        return view('home');
    })->name('home');
});

// home
Route::get('/home', [SpaceController::class, 'index'])->name('home');

// space
Route::get('/space/{id}', [SpaceController::class, 'show'])->name('space.show');
Route::post('/space', [SpaceController::class, 'store'])->name('space.store');

// update-profile-setting
Route::middleware(['auth', 'preventBackHistory'])->group(function () {
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
});

Route::get('/accountSetting', function () {
    return view('accountSetting');
}) ;

Route::get('/calendar', function () {
    return view('calendar');
}) ;

Route::get('/kanban', function () {
    return view('kanban');
}) ;
