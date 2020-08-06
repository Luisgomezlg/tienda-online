<?php

namespace App\Http\Controllers;

use App\Foto;
use App\Producto;
use Illuminate\Http\Request;

class FotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $fotos =\DB::table('fotos')
            ->select('fotos.fot_id', 'fotos.fot_ruta', 'fotos.fot_ruta2', 'productos.pro_nombre')
            ->join('productos', 'fotos.pro_id', '=', 'productos.pro_id')
            ->orderBy('fot_id')
            ->get();
        $productos = Producto::all();
        return view('fotos.index', compact('fotos', 'productos'));
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
        //        $eventos->eve_link_img = $request->file('eve_link_img')->store('public');
        $fotos = new Foto();
        $fotos->fot_ruta = $request->file('fot_ruta')->store('public');
        $fotos->fot_ruta2 = $request->file('fot_ruta2')->store('public');
        $fotos->pro_id = $request->get('pro_id');
        $fotos->save();

        return redirect('fotos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Foto  $foto
     * @return \Illuminate\Http\Response
     */
    public function show($fot_id)
    {
        //
        $hr = Foto::all();
        $hr = Foto::find($fot_id);
        return view('show', compact('hr'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Foto  $foto
     * @return \Illuminate\Http\Response
     */
    public function edit($fot_id)
    {
        //

        $productos = Producto::all();
        $foto = Foto::all();
        $fotos = Foto::find($fot_id);
        return view('fotos.edit', compact('fotos', 'foto', 'fot_id', 'productos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Foto  $foto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $fot_id)
    {
        //
        $fotos = Foto::find($fot_id);
        $fotos->fot_ruta = $request->file('fot_ruta')->store('public');
        $fotos->fot_ruta2 = $request->file('fot_ruta2')->store('public');
        $fotos->save();
        return redirect('fotos');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Foto  $foto
     * @return \Illuminate\Http\Response
     */
    public function destroy($fot_id)
    {
        //
        $fotos = Foto::find($fot_id);
        $fotos->delete();

        return redirect('fotos');
    }
}
