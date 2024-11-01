<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorVista extends Controller
{
     /* usamos este comando para administrar la logica de las vistas */
     public function home()
     {
         return view('principal_libros');
     }
 
     public function registro()
     {
         return view('Registro_libros');
     }
 
     public function procesarLibro(Request $peticion)
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
             'txteditorial'=> 'required',
             'txtaño'=> 'required',
             'txtcantidadlibrosdisponibles'=> 'required|numeric'
             'txtcantidadlibrosagotados'=> 'required'
         ])
 
         // Redirección con un mensaje falsh en session
         $usuario= $peticion->input('txtnombre');
 
         session()->flash('exito','Se guardo el libro: '.$usuario);
         return to_route('rutaform');
     }
}
