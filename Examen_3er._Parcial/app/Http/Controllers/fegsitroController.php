<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\fegistroController;
use Illuminate\Http\Request;
use App\Http\Request\vlidadorCliente; //Se agregan las rutas del modelo ORM con Eloquent. 

class fegsitroController extends Controller
{
    return view('fegistro');
}

/**
 * La usamos para abrir el formulario CRUD. 
 */
public function create()
{
    return view('fegistro');
}

public function store(Request $request)
{
    DB::table('clientes')->insert([
        "nombre"=>$request->input('txtnombre'),
        "apellido"=>$request->input('txtapellido'),
        "correo"=>$request->input('txtcorreo'),
        "telefono"=>$request->input('txttelefono'),
        "created_at"=> Carbon::now(),
        "update_at"=> Carbon::now(),
    ]);

    // Redirección con un mensaje falsh en session
    $usuario=$request->input('txtnombre'):
    session()->flash('exito','Se guardo el fegistro: '.$usuario);
    return to_route('rutaform');
}
}
