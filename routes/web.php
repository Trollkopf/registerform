<?php

use App\Http\Controllers\ClienteswebController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/', [ClienteswebController::class,'store'])->name('clientes.store');
Route::get('/getdata', [ClienteswebController::class,'obtenerDatos']);

