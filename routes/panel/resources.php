<?php

use App\Http\Controllers\ResourcesController;
use Illuminate\Support\Facades\Route;

Route::middleware('can:manageResources')->group(function () {
  Route::get('/', [ResourcesController::class, 'index'])
    ->name('resources.index');

  Route::get('/create', [ResourcesController::class, 'create'])
    ->name('resources.create');

  Route::post('/', [ResourcesController::class, 'store'])
    ->name('resources.store');

  Route::get('/{resource}/edit', [ResourcesController::class, 'edit'])
    ->name('resources.edit');

  Route::put('/{resource}/edit', [ResourcesController::class, 'update'])
    ->name('resources.update');
});
