<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

// Ruta para mostrar la página de inicio
Route::get('/', function () {
    return view('welcome');
});

// Ruta para mostrar el formulario de registro
Route::get('/register', [RegisterController::class, 'show']);

// Ruta para procesar el formulario de registro
Route::post('/register', [RegisterController::class, 'register']);
