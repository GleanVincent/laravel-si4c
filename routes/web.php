<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FakultasController;
Route::get('/', function () {
    return view('welcome');
});

Route::resource('fakultas', FakultasController::class);
