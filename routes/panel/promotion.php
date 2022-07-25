<?php

use App\Http\Controllers\RequestsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [RequestsController::class, 'index'])
  ->name('requests.index');
Route::post('/', [RequestsController::class, 'store'])
  ->can('submitRequest')
  ->name('requests.store');
