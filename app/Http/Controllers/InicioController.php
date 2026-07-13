<?php

namespace App\Http\Controllers;

class InicioController extends Controller
{
    /**
     * Muestra la página principal de TechStoreLaravel.
     */
    public function index()
    {
        $empresa = "TechStore";
        $eslogan = "Tecnología para todos";
        $mensaje = "Bienvenido a nuestro catálogo de productos tecnológicos.";

        return view(
            'inicio',
            compact(
                'empresa',
                'eslogan',
                'mensaje'
            )
        );
    }
}
