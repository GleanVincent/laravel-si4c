<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\PeriodeController;
use App\Http\Controllers\beritaController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('fakultas', FakultasController::class);
Route::resource('periode', PeriodeController::class);
Route::resource('berita', BeritaController::class);