<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


// Clase LogoutController: Controlador para cerrar sesión de usuario.
class LogoutController extends Controller
{
    // Método para cerrar sesión de usuario.
    public function logout()
    {
        // Elimina todos los datos de la sesión.
        Session::flush();

        // Cierra la sesión del usuario.
        Auth::logout();

        // Redirige al usuario a la página de inicio de sesión.
        return redirect()->to('/login');
    }
}

