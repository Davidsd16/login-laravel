<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
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

// Ruta para mostrar el formulario de inicio de sesión
Route::get('/login', [LoginController::class, 'show']);

// Ruta para procesar la solicitud de inicio de sesión
Route::post('/login', [LoginController::class, 'login']);

//Definición de ruta para mostrar la página de inicio.
Route::get('/home', [HomeController::class, 'index']);

// Definición de ruta para cerrar sesión de usuario.
Route::get('/logout', [LogoutController::class, 'logout']);
