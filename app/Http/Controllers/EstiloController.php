<?php

namespace App\Http\Controllers;

use App\Estilo;
use App\Categoria;
use Illuminate\Http\Request;

class EstiloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categorias = Categoria::all();
        $estilos = Estilo::all();
        return view('estilos.index', compact('estilos', 'categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $estilos = new Estilo();
        $estilos->est_nombre = $request->get('est_nombre');
        $estilos->cat_id = $request->get('cat_id');
        $estilos->save();
        return redirect('estilos');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Estilo  $estilo
     * @return \Illuminate\Http\Response
     */
    public function show(Estilo $estilo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estilo  $estilo
     * @return \Illuminate\Http\Response
     */
    public function edit($est_id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estilo  $estilo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estilo $estilo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estilo  $estilo
     * @return \Illuminate\Http\Response
     */
    public function destroy($est_id)
    {
        //
    }
}
