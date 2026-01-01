<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormationModelController;
use App\Http\Controllers\SessionModelController;
use App\Http\Controllers\EtudiantModelController;
use App\Http\Controllers\SpecialiteModelController;

Route::resource('sessions', SessionModelController::class);
Route::resource('formations', FormationModelController::class);
Route::resource('etudiants', EtudiantModelController::class);
Route::resource('specialites', SpecialiteModelController::class);
