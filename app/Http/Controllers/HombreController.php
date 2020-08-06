<?php

namespace App\Http\Controllers;
use App\Evento;
use App\Foto;
use App\Producto;
use App\Comment;
use Illuminate\Http\Request;

class HombreController extends Controller
{
    //
    public function index(){
      $eventos = Evento::all();
        $producto =\DB::table('fotos')
            ->select('productos.pro_id', 'productos.slug', 'fotos.fot_id', 'fotos.fot_ruta', 'fotos.fot_ruta2', 'productos.pro_nombre', 'productos.pro_descripcion', 'productos.pro_precio')
            ->join('productos', 'fotos.pro_id', '=', 'productos.pro_id')
            ->join('categorias', 'categorias.cat_id', '=', 'productos.cat_id')
            ->where('categorias.cat_nombre','like','%hombre%')
            ->orderBy('fot_id')
            ->get();
            $estilo =\DB::table('productos')
                ->select('productos.pro_id', 'productos.est_id', 'estilos.est_nombre')
                ->join('estilos', 'productos.est_id', '=', 'estilos.est_id')
                ->orderBy('pro_id')
                ->get();

      return view('hombre-ropa.index', ['eventos' => $eventos], compact( 'producto', 'estilo'));
    }
    public function index2(){
      $eventos = Evento::all();
        $producto =\DB::table('fotos')
            ->select('productos.pro_id', 'fotos.fot_id', 'fotos.fot_ruta', 'fotos.fot_ruta2', 'productos.pro_nombre', 'productos.pro_descripcion', 'productos.pro_precio')
            ->join('productos', 'fotos.pro_id', '=', 'productos.pro_id')
            ->join('categorias', 'categorias.cat_id', '=', 'productos.cat_id')
            ->where('categorias.cat_nombre','like','%mujer%')
            ->orderBy('fot_id')
            ->get();
            $estilo =\DB::table('productos')
                ->select('productos.pro_id', 'productos.est_id', 'estilos.est_nombre')
                ->join('estilos', 'productos.est_id', '=', 'estilos.est_id')
                ->orderBy('pro_id')
                ->get();

      return view('mujer-ropa.index', ['eventos' => $eventos], compact('hr', 'producto', 'estilo'));
    }
    public function pantalonesm(){
      $producto =\DB::table('fotos')
          ->select('productos.pro_id', 'fotos.fot_id', 'fotos.fot_ruta', 'fotos.fot_ruta2', 'productos.pro_nombre', 'productos.pro_descripcion', 'productos.pro_precio')
          ->join('productos', 'fotos.pro_id', '=', 'productos.pro_id')
          ->join('lineas', 'lineas.lin_id', '=', 'productos.lin_id')
          ->where('lineas.lin_nombre','like','%pantalones-mujer%')
          ->orderBy('fot_id')
          ->get();
    return view('mujer-ropa.pantalones', compact('producto'));
    }
    public function polosm(){
      $producto =\DB::table('fotos')
          ->select('productos.pro_id', 'fotos.fot_id', 'fotos.fot_ruta', 'fotos.fot_ruta2', 'productos.pro_nombre', 'productos.pro_descripcion', 'productos.pro_precio')
          ->join('productos', 'fotos.pro_id', '=', 'productos.pro_id')
          ->join('lineas', 'lineas.lin_id', '=', 'productos.lin_id')
          ->where('lineas.lin_nombre','like','%polos-mujer%')
          ->orderBy('fot_id')
          ->get();
    return view('mujer-ropa.polos', compact('producto'));
    }
    public function sudaderasm(){
      $producto =\DB::table('fotos')
          ->select('productos.pro_id', 'fotos.fot_id', 'fotos.fot_ruta', 'fotos.fot_ruta2', 'productos.pro_nombre', 'productos.pro_descripcion', 'productos.pro_precio')
          ->join('productos', 'fotos.pro_id', '=', 'productos.pro_id')
          ->join('lineas', 'lineas.lin_id', '=', 'productos.lin_id')
          ->where('lineas.lin_nombre','like','%sudaderas-mujer%')
          ->orderBy('fot_id')
          ->get();
    return view('mujer-ropa.sudaderas', compact('producto'));
    }
    public function camisetasm(){
      $producto =\DB::table('fotos')
          ->select('productos.pro_id', 'fotos.fot_id', 'fotos.fot_ruta', 'fotos.fot_ruta2', 'productos.pro_nombre', 'productos.pro_descripcion', 'productos.pro_precio')
          ->join('productos', 'fotos.pro_id', '=', 'productos.pro_id')
          ->join('lineas', 'lineas.lin_id', '=', 'productos.lin_id')
          ->where('lineas.lin_nombre','like','%Camisetas-mujer%')
          ->orderBy('fot_id')
          ->get();
    return view('mujer-ropa.camisetas', compact('producto'));
    }
    public function hombres(){
      return view('hombre-ropa.hombre');
    }
    public function mujeres(){
      return view('hombre-ropa.mujer');
    }
    public function show($slug)
    {
        //
        $talla =\DB::table('productos')
            ->select('productos.pro_id','productos.pro_talla')
            ->join('fotos', 'fotos.pro_id', '=', 'productos.pro_id')
            ->get();
        $comment = Comment::all();
        $foto = Foto::where('pro_id', $slug)->first();
        $producto = Producto::where('pro_id', $slug)->first();
        /*$slug = $producto->slug;
        dd($slug);*/
        return view('show', compact('producto', 'comment', 'foto', 'talla'));

    }
    public function store(Request $request)
    {
        //
        /*$comment = new Comment();
        $comment->comment = $request->get('comment');
        $comment->save();
        return back()->withInput();*/
    }
    public function disenosg(){
      $disenosg =\DB::table('fotos')
          ->select('productos.pro_id', 'productos.slug', 'fotos.fot_id', 'fotos.fot_ruta', 'fotos.fot_ruta2', 'productos.pro_nombre', 'productos.pro_descripcion', 'productos.pro_precio')
          ->join('productos', 'fotos.pro_id', '=', 'productos.pro_id')
          ->join('estilos', 'estilos.est_id', '=', 'productos.est_id')
          ->where('estilos.est_nombre','like','%diseño gra%')
          ->orderBy('fot_id')
          ->get();
    return view('hombre-ropa.disenosg', compact('disenosg'));
    }
    public function classic(){
      $hr =\DB::table('fotos')
          ->select('productos.pro_id', 'fotos.fot_id', 'fotos.fot_ruta', 'fotos.fot_ruta2', 'productos.pro_nombre', 'productos.pro_descripcion', 'productos.pro_precio', 'productos.pro_estilo' )
          ->join('productos', 'fotos.pro_id', '=', 'productos.pro_id')
          ->where('productos.pro_estilo','like','%classic%')
          ->orderBy('fot_id')
          ->get();
    return view('hombre-ropa.classic', compact('hr'));
    }
    public function text(){
      $hr =\DB::table('fotos')
          ->select('productos.pro_id', 'fotos.fot_id', 'fotos.fot_ruta', 'fotos.fot_ruta2', 'productos.pro_nombre', 'productos.pro_descripcion', 'productos.pro_precio', 'productos.pro_estilo' )
          ->join('productos', 'fotos.pro_id', '=', 'productos.pro_id')
          ->where('productos.pro_estilo','like','%text%')
          ->orderBy('fot_id')
          ->get();
    return view('hombre-ropa.text', compact('hr'));
    }
    public function pantalones(){
      $producto =\DB::table('fotos')
          ->select('productos.pro_id', 'fotos.fot_id', 'fotos.fot_ruta', 'fotos.fot_ruta2', 'productos.pro_nombre', 'productos.pro_descripcion', 'productos.pro_precio')
          ->join('productos', 'fotos.pro_id', '=', 'productos.pro_id')
          ->join('lineas', 'lineas.lin_id', '=', 'productos.lin_id')
          ->where('lineas.lin_nombre','like','%pantalones-hombre%')
          ->orderBy('fot_id')
          ->get();
    return view('hombre-ropa.pantalones', compact('producto'));
    }
    public function polos(){
      $producto =\DB::table('fotos')
          ->select('productos.pro_id', 'fotos.fot_id', 'fotos.fot_ruta', 'fotos.fot_ruta2', 'productos.pro_nombre', 'productos.pro_descripcion', 'productos.pro_precio')
          ->join('productos', 'fotos.pro_id', '=', 'productos.pro_id')
          ->join('lineas', 'lineas.lin_id', '=', 'productos.lin_id')
          ->where('lineas.lin_nombre','like','%polos-hombre%')
          ->orderBy('fot_id')
          ->get();
    return view('hombre-ropa.polos', compact('producto'));
    }
    public function sudaderas(){
      $producto =\DB::table('fotos')
          ->select('productos.pro_id', 'fotos.fot_id', 'fotos.fot_ruta', 'fotos.fot_ruta2', 'productos.pro_nombre', 'productos.pro_descripcion', 'productos.pro_precio')
          ->join('productos', 'fotos.pro_id', '=', 'productos.pro_id')
          ->join('lineas', 'lineas.lin_id', '=', 'productos.lin_id')
          ->where('lineas.lin_nombre','like','%sudaderas-hombre%')
          ->orderBy('fot_id')
          ->get();
    return view('hombre-ropa.sudaderas', compact('producto'));
    }
    public function camisetas(){
      $producto =\DB::table('fotos')
          ->select('productos.pro_id', 'fotos.fot_id', 'fotos.fot_ruta', 'fotos.fot_ruta2', 'productos.pro_nombre', 'productos.pro_descripcion', 'productos.pro_precio')
          ->join('productos', 'fotos.pro_id', '=', 'productos.pro_id')
          ->join('lineas', 'lineas.lin_id', '=', 'productos.lin_id')
          ->where('lineas.lin_nombre','like','%Camisetas-hombre%')
          ->orderBy('fot_id')
          ->get();
    return view('hombre-ropa.camisetas', compact('producto'));
    }
    public function pantalones_all(){
      $hr =\DB::table('fotos')
          ->select('productos.pro_id', 'fotos.fot_id', 'fotos.fot_ruta', 'fotos.fot_ruta2', 'productos.pro_nombre', 'productos.pro_descripcion', 'productos.pro_precio')
          ->join('productos', 'fotos.pro_id', '=', 'productos.pro_id')
          ->join('lineas', 'lineas.lin_id', '=', 'productos.lin_id')
          ->where('lineas.lin_nombre','like','%pantalones-hombre%')
          ->orderBy('fot_id')
          ->get();
    return view('hombre-ropa.pantalones', compact('hr'));
    }
    public function polos_all(){
      $hr =\DB::table('fotos')
          ->select('productos.pro_id', 'fotos.fot_id', 'fotos.fot_ruta', 'fotos.fot_ruta2', 'productos.pro_nombre', 'productos.pro_descripcion', 'productos.pro_precio')
          ->join('productos', 'fotos.pro_id', '=', 'productos.pro_id')
          ->join('lineas', 'lineas.lin_id', '=', 'productos.lin_id')
          ->where('lineas.lin_nombre','like','%polos-hombre%')
          ->orderBy('fot_id')
          ->get();
    return view('hombre-ropa.polos', compact('hr'));
    }
    public function sudaderas_all(){
      $hr =\DB::table('fotos')
          ->select('productos.pro_id', 'fotos.fot_id', 'fotos.fot_ruta', 'fotos.fot_ruta2', 'productos.pro_nombre', 'productos.pro_descripcion', 'productos.pro_precio')
          ->join('productos', 'fotos.pro_id', '=', 'productos.pro_id')
          ->join('lineas', 'lineas.lin_id', '=', 'productos.lin_id')
          ->where('lineas.lin_nombre','like','%sudaderas-hombre%')
          ->orderBy('fot_id')
          ->get();
    return view('hombre-ropa.sudaderas', compact('hr'));
    }
    public function camisetas_all(){
      $hr =\DB::table('fotos')
          ->select('productos.pro_id', 'fotos.fot_id', 'fotos.fot_ruta', 'fotos.fot_ruta2', 'productos.pro_nombre', 'productos.pro_descripcion', 'productos.pro_precio')
          ->join('productos', 'fotos.pro_id', '=', 'productos.pro_id')
          ->join('lineas', 'lineas.lin_id', '=', 'productos.lin_id')
          ->where('lineas.lin_nombre','like','%Camisetas-hombre%')
          ->orderBy('fot_id')
          ->get();
    return view('hombre-ropa.camisetas', compact('hr'));
    }
    public function productsCat(Request $request){
       $est_id = $request->est_id;
       // price are array
       $data =\DB::table('fotos')
           ->select('productos.pro_id', 'fotos.fot_id', 'fotos.fot_ruta', 'fotos.fot_ruta2', 'productos.pro_nombre', 'productos.pro_descripcion', 'productos.pro_precio')
           ->join('productos', 'fotos.pro_id', '=', 'productos.pro_id')
           ->where('productos.est_id',$est_id)
           ->join('categorias', 'categorias.cat_id', '=', 'productos.cat_id')
           ->where('categorias.cat_nombre','like','%hombre%')
           ->orderBy('fot_id')
           ->get();

           return view('hombre-ropa.productPage',[
      'data' => $data
    ]);
     }
     public function productsCat2(Request $request){
      $est_id = $request->est_id;
      // price are array
      $data =\DB::table('fotos')
          ->select('productos.pro_id', 'fotos.fot_id', 'fotos.fot_ruta', 'fotos.fot_ruta2', 'productos.pro_nombre', 'productos.pro_descripcion', 'productos.pro_precio')
          ->join('productos', 'fotos.pro_id', '=', 'productos.pro_id')
          ->where('categorias.cat_nombre','like','%hombre%')
          ->orderBy('fot_id')
          ->get();

          return view('hombre-ropa.productPage',[
     'data' => $data
   ]);
    }
     public function clanlegado(){

     return view('hombre-ropa.clanlegado');
     }

}
