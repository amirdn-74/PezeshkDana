<?php

use App\Http\Controllers\AttributesController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\IllnessesController;
use App\Http\Controllers\ScientificLevelsController;
use App\Http\Controllers\SpecialtiesController;
use Illuminate\Support\Facades\Route;

Route::middleware('can:manageCategories')->group(function () {
  Route::get('/', [CategoriesController::class, 'index'])
    ->name('categories.index');

  Route::get('/scientific-levels', [ScientificLevelsController::class, 'index'])
    ->name('categories.scientificLevels.index');
  Route::get('/scientific-levels/create', [ScientificLevelsController::class, 'create'])
    ->name('categories.scientificLevels.create');
  Route::post('/scientific-levels', [ScientificLevelsController::class, 'store'])
    ->name('categories.scientificLevels.store');
  Route::get('/scientific-levels/{level}/edit', [ScientificLevelsController::class, 'edit'])
    ->name('categories.scientificLevels.edit');
  Route::patch('/scientific-levels/{level}/edit', [ScientificLevelsController::class, 'update'])
    ->name('categories.scientificLevels.update');
  Route::delete('/scientific-levels/{level}', [ScientificLevelsController::class, 'destroy'])
    ->name('categories.scientificLevels.destroy');

  Route::get('/specialties', [SpecialtiesController::class, 'index'])
    ->name('categories.specialties.index');
  Route::get('/specialties/create', [SpecialtiesController::class, 'create'])
    ->name('categories.specialties.create');
  Route::post('/specialties', [SpecialtiesController::class, 'store'])
    ->name('categories.specialties.store');
  Route::get('/specialties/{specialty}/edit', [SpecialtiesController::class, 'edit'])
    ->name('categories.specialties.edit');
  Route::patch('/specialties/{specialty}/edit', [SpecialtiesController::class, 'update'])
    ->name('categories.specialties.update');
  Route::delete('/specialties/{specialty}', [SpecialtiesController::class, 'destroy'])
    ->name('categories.specialties.destroy');

  Route::get('/illnesses', [IllnessesController::class, 'index'])
    ->name('categories.illnesses.index');
  Route::get('/illnesses/create', [IllnessesController::class, 'create'])
    ->name('categories.illnesses.create');
  Route::post('/illnesses', [IllnessesController::class, 'store'])
    ->name('categories.illnesses.store');
  Route::get('/illnesses/{illness}/edit', [IllnessesController::class, 'edit'])
    ->name('categories.illnesses.edit');
  Route::patch('/illnesses/{illness}/edit', [IllnessesController::class, 'update'])
    ->name('categories.illnesses.update');
  Route::delete('/illnesses/{illness}', [IllnessesController::class, 'destroy'])
    ->name('categories.illnesses.destroy');

  Route::get('/attributes', [AttributesController::class, 'index'])
    ->name('categories.attributes.index');
  Route::get('/attributes/create', [AttributesController::class, 'create'])
    ->name('categories.attributes.create');
  Route::post('/attributes', [AttributesController::class, 'store'])
    ->name('categories.attributes.store');
  Route::get('/attributes/{attribute}/edit', [AttributesController::class, 'edit'])
    ->name('categories.attributes.edit');
  Route::patch('/attributes/{attribute}/edit', [AttributesController::class, 'update'])
    ->name('categories.attributes.update');
  Route::delete('/attributes/{attribute}', [AttributesController::class, 'destroy'])
    ->name('categories.attributes.destroy');
});
