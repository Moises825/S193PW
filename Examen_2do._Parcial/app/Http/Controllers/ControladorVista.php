<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorVista extends Controller
{
    /* usamos este comando para administrar la logica de las vistas */
    public function home()
    {
        return view('inicio');
    }
}
