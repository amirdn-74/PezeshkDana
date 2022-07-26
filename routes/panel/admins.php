<?php

use App\Http\Controllers\AdminsController;
use Illuminate\Support\Facades\Route;

Route::middleware('can:manageAdmins')->group(function () {
  Route::get('/', [AdminsController::class, 'index'])
    ->name('admins.index');

  Route::get('/create', [AdminsController::class, 'create'])
    ->name('admins.create');

  Route::post('/', [AdminsController::class, 'store'])
    ->name('admins.store');

  Route::patch('/{user}', [AdminsController::class, 'edit'])
    ->name('admins.patch');
});
