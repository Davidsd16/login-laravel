<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Método para mostrar el formulario de inicio de sesión
    public function show(){
        return view('auth.login'); // Retorna la vista para el formulario de inicio de sesión
    }

    // Método para realizar el inicio de sesión
    public function login(LoginRequest $request){
        // Obtiene las credenciales del formulario de inicio de sesión
        $credentials = $request->getCredentials();

        // Valida las credenciales
        if (!Auth::validate($credentials)) {
            // Si las credenciales no son válidas, redirige al formulario de inicio de sesión con un mensaje de error
            return redirect()->to('/login')->withErrors('auth.failed');
        }

        // Obtiene al usuario autenticado
        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        // Autentica al usuario
        Auth::login($user);

        // Redirige al usuario autenticado a su página de inicio
        return $this->authenticated($request, $user);
    }

    // Método para redirigir al usuario autenticado a su página de inicio
    public function authenticated(Request $request, $user){
        return redirect('/home'); // Redirige al usuario autenticado a la página de inicio
    }
    
}

