<?php

use App\Http\Controllers\Panel\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])
  ->name('dashboard');
  // ->can('seeDashboard');
