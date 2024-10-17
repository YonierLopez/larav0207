<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OperacionesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/saludo',[ProductController::class,'saludo']);
Route::get('/sumar/{num1}/{num2}',[OperacionesController::class,'suma']);
Route::get('/restar/{num1}/{num2}',[OperacionesController::class,'resta']);
Route::get('/dividir/{num1}/{num2}',[OperacionesController::class,'division']);
Route::get('/multiplicar/{num1}/{num2}',[OperacionesController::class,'multiplicacion']);

Route::get('/cuadratica',[OperacionesController::class,'formulacuadratica'])->name('operaciones.fcuadratica');