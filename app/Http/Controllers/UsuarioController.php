<?php

namespace App\Http\Controllers;

use App\Usuario;
use App\User;
use App\Rol;
use App\Evento;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $usuarios= Usuario::all();
        $roles= Rol::all();
        //retorno
        return view('usuarios.index', compact('usuarios', 'roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $usuarios= Usuario::all();
        $roles= Rol::all();
        return view('usuarios.create', compact('usuarios', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $usuarios = new Usuario();
        $usuarios->nombre = $request->get('nombre');
        $usuarios->apellido = $request->get('apellido');
        $usuarios->fecha_nacimiento = $request->get('fecha_nacimiento');
        $usuarios->tipo_identificacion = $request->get('tipo_identificacion');
        $usuarios->numero_identificacion = $request->get('numero_identificacion');
        $usuarios->direccion = $request->get('direccion');
        $usuarios->email = $request->get('email');
        $usuarios->password = bcrypt($request->get('password'));
        $usuarios->rol_id = $request->get('rol_id');
        $usuarios->save();

        return redirect('usuarios');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $usuarios = Usuario::find($id);
        return view('usuarios.edit', compact('usuarios', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $usuarios = Usuario::find($id);
        $usuarios->nombre = $request->get('nombre');
        $usuarios->apellido = $request->get('apellido');
        $usuarios->fecha_nacimiento = $request->get('fecha_nacimiento');
        $usuarios->tipo_identificacion = $request->get('tipo_identificacion');
        $usuarios->numero_identificacion = $request->get('numero_identificacion');
        $usuarios->direccion = $request->get('direccion');
        $usuarios->email = $request->get('email');
        $usuarios->password = bcrypt($request->get('password'));
        $usuarios->rol_id = $request->get('rol_id');
        $usuarios->save();
        return redirect('usuarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $usuario = Usuario::find($id);
        $usuario->delete();

        return redirect('usuarios');
    }
}
