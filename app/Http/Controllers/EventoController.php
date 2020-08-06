<?php

namespace App\Http\Controllers;

use App\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $eventos =\DB::table('eventos')
            ->select('eventos.eve_id',  'eventos.eve_descripcion', 'eventos.titulo', 'eventos.eve_link_img', 'eventos.eve_fecha',  'users.nombre')
            ->join('users', 'eventos.users_id', '=', 'users.id')
            ->orderBy('eve_id')
            ->get();

        $evento = Evento::all();
        //retorno
        return view('eventos.index', compact('eventos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $eventos = Evento::all();
        //retorno
        return view('eventos.create', compact('eventos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $eventos = new Evento();
      $eventos->eve_descripcion = $request->get('eve_descripcion');
      $eventos->titulo = $request->get('titulo');
      $eventos->eve_link_img = $request->file('eve_link_img')->store('public');
      $eventos->eve_fecha = $request->get('eve_fecha');
      $eventos->users_id = $request->get('users_id');
      $eventos->save();

      return redirect('eventos');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function show(Evento $evento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function edit($eve_id)
    {
        //
        $evento = Evento::all();
        $eventos = Evento::find($eve_id);
        return view('eventos.edit', compact('eventos', 'evento', 'eve_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $eve_id)
    {
        //
        $eventos = Evento::find($eve_id);

        $eventos->eve_link_img = $request->file('eve_link_img')->store('public');

        $eventos->save();

        return redirect('eventos');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function destroy($eve_id)
    {
        //
        $eventos = Evento::find($eve_id);
        $eventos->delete();

        return redirect('eventos');
    }
}
