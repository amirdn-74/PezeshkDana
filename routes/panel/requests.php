<?php

use App\Http\Controllers\RequestsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [RequestsController::class, 'list'])->name('requests.list');
Route::get('/{request}', [RequestsController::class, 'show'])
  ->can('watch', 'request')
  ->name('requests.show');

Route::patch('/{request}/accept', [RequestsController::class, 'accept'])
  ->can('modify', 'request')
  ->name('requests.accept');

Route::patch('/{request}/reject', [RequestsController::class, 'reject'])
  ->can('modify', 'request')
  ->name('requests.reject');
