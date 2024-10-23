<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        // Respuestas de redirección

        // Redirección usando la ruta
        //return redirect('/');

        // Redirección usando el nombre de la ruta
        //return redirect()->route('rutaclientes')

        // Redirección al nombre de la petición
        //return back();

       /* $id= [['usuario'=>1],['usuario'=>2]];

        return view('formulario',compact('id')); */

        // Redirección con un mensaje falsh en session
        $usuario= $peticion->input('txtnombre');

        session()->flash('exito','Se guardo el usuario: '.$usuario)
        return to_route('rutaform');
    }
}