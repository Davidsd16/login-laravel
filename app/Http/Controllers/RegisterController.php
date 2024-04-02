<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;


class RegisterController extends Controller
{
    // Método para mostrar el formulario de registro
    public function show(){

        // Verifica si el usuario ha iniciado sesión
        if (Auth::check()) {
            
            // Redirige a la página de inicio si el usuario ha iniciado sesión
            return redirect('home'); 
        }

        return view('auth.register'); // Retorna la vista para el formulario de registro
    }

    // Método para registrar un nuevo usuario
    public function register(RegisterRequest $request){
        // Valida los datos del formulario de registro y crea un nuevo usuario
        $user = User::create($request->validated()); 

        // Muestra la vista de inicio de sesión directamente
        return view('auth.login')->with('success', 'Account created successfully');
    }

}

