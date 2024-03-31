<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;


class RegisterController extends Controller
{
    // Método para mostrar el formulario de registro
    public function show(){
        return view('auth.register'); // Retorna la vista para el formulario de registro
    }

    // Método para registrar un nuevo usuario
    public function register(RegisterRequest $request){
        // Valida los datos del formulario de registro y crea un nuevo usuario
        $user = User::create($request->validated()); 

        // Redirige al usuario a la página de inicio de sesión y muestra un mensaje de éxito
        return redirect('/login')->with('success', 'Account created successfully');
    }

}

