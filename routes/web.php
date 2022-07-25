<?php

use App\Http\Controllers\Auth\AuthProvidersController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.main');
});

// ========== ATHENTICATION ==========

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'show'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);

    Route::get('/register', [RegisterController::class, 'show'])->name('register');
    Route::post('/register', [RegisterController::class, 'createUser']);
});

Route::delete('logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('/auth/google/redirect', [AuthProvidersController::class, 'redirect']);
Route::get('/auth/google/callback', [AuthProvidersController::class, 'callback']);
