<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * Clase HomeController: Controlador para la página de inicio.
 */
class HomeController extends Controller
{
    /**
     * Método index: Retorna la vista de la página de inicio.
     *
     * @return \Illuminate\Contracts\View\View Vista de la página de inicio.
     */
    public function index()
    {
        return view('home.index'); // Retorna la vista de la página de inicio
    }
}

