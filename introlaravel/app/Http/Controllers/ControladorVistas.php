<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Request\validadorCliente;

class ControladorVistas extends Controller
{

    /* usamos este comando para administrar la logica de las vistas */
    public function home()
    {
        return view('inicio');
    }

    public function formulario()
    {
        return view('formulario');
    }

    public function consulta()
    {
        return view('clientes');
    }

    public function procesarCliente(Request $peticion)
    {
        return 'si llego la info del cliente:) ';

        //Mostramos todo lo que trae la petición
        //return $peticion->all();
        //return $peticion->path();
        //return $peticion->url();
        //return $peticion->ip();
    }

    public function procesarCliente(Request $peticion)
    {

        $validacion= $peticion->validate([
            'txtnombre'=> 'required|min:4|max:20 ', 
            'txtapellido'=> 'required',
            'txtcorreo'=> 'required',
            'txttelefono'=> 'required|numeric'
        ])

        // Redirección con un mensaje falsh en session
        $usuario= $peticion->input('txtnombre');

        session()->flash('exito','Se guardo el usuario: '.$usuario);
        return to_route('rutaform');
    }
}