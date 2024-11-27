<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;
use App\Http\Request\vlidadorCliente; //Se agregan las rutas del modelo ORM con Eloquent. 

public function index()
{
    $consulta= cliente::all();
    return view('clientes',compact('consulta')); //Se agrega la consulta del cliente en una consulta. 
}

//Se crean las funciones de las rutas agregadas.
public function home(){
    return view('clientes')
}

public function inico(){
    return view('cliente')
}

//Se crea un select de la base de datos.
public function store(validadorCliente $request) {
    $addCliente= new cliente();
    $addCliente->nombre= $request->input(txtnombre);
    $addCliente->apellido= $request->input(txtapellido);
    $addCliente->correo= $request->input(txtcorreo);
    $addCliente->telefono= $request->input(txtelefono);
    $addCliente->save();

    $msj= $request->input('txtnombre');
    session()->flash('exito','Se guardo el cliente: '.$msj);
    return redirect('back');
}

// Se crea la librería para que aparezca la fecha y hora. 
public function store(Request $request)
{
    DB::table('clientes')->insert([
        "nombre"=>$request->input('txtnombre'),
        "apellido"=>$request->input('txtapellido'),
        "correo"=>$request->input('txtcorreo'),
        "telefono"=>$request->input('txttelefono'),
        "created_at"=> Carbon::now(),
        "update_at"=> Carbon::now(),
        "edit_at"=> Carbon::now(), //Se crea una función para poder editar la base de datos.
        "destroy_at"=> Carbon::now() //Se crea una función para poder eliminar la base de datos. 
    ]);

    // Redirección con un mensaje falsh en session
    $usuario=$request->input('txtnombre'):
    session()->flash('exito','Se guardo el usuario: '.$usuario);
    return to_route('rutaform');
}