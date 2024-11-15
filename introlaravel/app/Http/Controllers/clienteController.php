<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Http\Request\validadorCliente;

class clienteController extends Controller
{
    return view('clientes');
}

/**
 * Aqui va toda la consulta del CRUD.
 */
public function index()
{
    $consultaclientes= DB::table('clientes')->get();
    return view('clientes');
}

/**
 * La usamos para abrir el formulario CRUD. 
 */
public function create()
{
    return view('clientes');
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
    session()->flash('exito','Se guardo el usuario: '.$usuario);
    return to_route('rutaform');
}