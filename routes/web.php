<?php

use App\Http\Controllers\ClienteswebController;
use App\Http\Controllers\LanguageSwitcher;
use Illuminate\Support\Facades\Route;

Route::get('/', [LanguageSwitcher::class, 'es'])->name('esp');

Route::post('/', [ClienteswebController::class,'store'])->name('clientes.store');
Route::get('/getdata', [ClienteswebController::class,'obtenerDatos']);

Route::get('/eng', [LanguageSwitcher::class, 'en'])->name('eng');
