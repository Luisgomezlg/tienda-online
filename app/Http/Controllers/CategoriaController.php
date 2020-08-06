<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categorias = new Categoria();
        $categorias = Categoria::all();
        return view('categorias.index', compact('categorias'));
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
        $categorias = new Categoria();
        $categorias->cat_nombre = $request->get('cat_nombre');
        $categorias->cat_descripcion = $request->get('cat_descripcion');
        $categorias->save();

        return redirect('categorias');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show(Categoria $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit($cat_id)
    {
        //
        $categoria = Categoria::all();
        $categorias = Categoria::where('cat_id', $cat_id)->first();
        return view('categorias.edit', compact('categorias', 'cat_id', 'categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cat_id)
    {
        //
        $categorias = Categoria::find($cat_id);
        $categorias->cat_nombre = $request->get('cat_nombre');
        $categorias->cat_descripcion = $request->get('cat_descripcion');
        $categorias->save();

        return redirect('categorias');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoria $cat_id)
    {
        //

    }
}
