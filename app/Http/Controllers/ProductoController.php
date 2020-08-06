<?php

namespace App\Http\Controllers;
use App\Producto;
use App\Linea;
use App\Categoria;
use App\Estilo;
use App\Color;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    //
    public function index()
    {
        //

        //retorno
        $products = Producto::all();
        $lineas = Linea::all();
        $categorias = Categoria::all();
        $colores = Color::all();
        $estilos = Estilo::all();
        return view('productos.index', compact('products', 'lineas', 'categorias', 'estilos', 'colores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //retorno
        return view('productos.create', compact('productos'));
    }
    public function store(Request $request)
    {
        //
        $productos = new Producto();
        $productos->pro_nombre = $request->get('pro_nombre');
        $productos->slug = $request->get('slug');
        $productos->pro_descripcion = $request->get('pro_descripcion');
        $productos->pro_talla = $request->get('pro_talla');
        $productos->pro_fecha = $request->get('pro_fecha');
        $productos->col_id = $request->get('col_id');
        $productos->est_id = $request->get('est_id');
        $productos->pro_precio = $request->get('pro_precio');
        $productos->pro_iva = $request->get('pro_iva');
        $productos->lin_id = $request->get('lin_id');
        $productos->cat_id = $request->get('cat_id');
        $productos->save();

        return redirect('productos');
    }
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($pro_id)
    {
        //
        $producto = Producto::all();
        $productos = Producto::where('pro_id', $pro_id)->first();
        return view('productos.edit', compact('productos', 'producto', 'pro_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $pro_id)
    {
        //
        $productos = Producto::find($pro_id);
        $productos->pro_nombre = $request->get('pro_nombre');
        $productos->pro_descripcion = $request->get('pro_descripcion');
        $productos->pro_talla = $request->get('pro_talla');
        $productos->pro_fecha = $request->get('pro_fecha');
        $productos->col_id = $request->get('col_id');
        $productos->est_id = $request->get('est_id');
        $productos->pro_precio = $request->get('pro_precio');
        $productos->pro_iva = $request->get('pro_iva');
        $productos->lin_id = $request->get('lin_id');
        $productos->cat_id = $request->get('cat_id');
        $productos->save();

        return redirect('productos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy($pro_id)
    {
        //
        $productos = Producto::find($pro_id);
        $productos->delete();

        return redirect('productos');
    }

}
