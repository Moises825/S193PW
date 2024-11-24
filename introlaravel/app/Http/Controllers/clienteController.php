<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Http\Request\validadorCliente;

/**
 * Esta función es para la clase del controlador clienteController 
 * de la vista del cliente.
 */
class clienteController extends Controller
{
    return view('clientes');
}

/**
 * Esta función es para la clase del controlador clienteController
 * de la parte de editar del cliente.
 */
class clienteController extends Controller
{
    return edit('clientes');
}

/**
 * Esta función es para la clase del controlador clienteController
 * de la parte de actualizar del cliente.
 */
class clienteController extends Controller
{
    return update('clientes');
}

/**
 * Esta función es para la clase del controlador clienteController
 * de la parte de eliminar del cliente.
 */
class clienteController extends Controller
{
    return destroy('clientes');
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
 * La usamos para abrir el formulario CRUD de la vista del cliente creada. 
 */
public function create()
{
    return view('clientes');
}

/**
 * Se crea una función para arbir el formulario CRUD de la función de editar del cliente creada. 
 */
public function create()
{
    return view('clientes');
}

 /**
 * Se crea una función para arbir el formulario CRUD de la función de actualizar del cliente creada. 
 */
public function create()
{
    return view('clientes');
}

 /**
 * Se crea una función para arbir el formulario CRUD de la función de eliminar del cliente creada. 
 */
public function create()
{
    return view('clientes');
}

/**
 * Se crea la función de 
 */
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