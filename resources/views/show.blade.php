@extends('layouts.app')
@section('show')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Legado - {{($producto->pro_nombre)}}</title>

  <style media="screen">
  @media (max-width: 400px){
    .content .card-img{
      margin-left: -0%;
    }
  }
  .card .fotos{
    margin-top: -80%;
  }
  .img-coment{
    margin-top: 0%;
  }
  .card-img{
    margin-left: 3%;
    margin-top: 2%;
    width: 75%;
  }
  .hacer-coment{
    width: 75%;
  }
  .hacer-coment textarea{
  margin-bottom: 3%;
  }
  .card .form-group1{
    margin-bottom: 25%;
  }
  .content{
    display: block;
  }
  .desc{
    margin-top: 10%;

  }
  .desc select{
    display: inline;
  }
  .content li .btn{
    background: #fff;
    color: #000;
    font-size: 14px;
    height: 50px;
    text-transform: uppercase;
    border-color: #808080;
  }
  .content a .btn:hover{
    background: #000;
    color: #fff;
    border-color: #000;
    transition: .5s ease-in-out;
  }
  .content a{
    color: #000;
    text-decoration: none;
  }
  .hacer-coment{
    margin-left: 3%;
  }
  .coment{
    margin-left: 1.8%;
  }
  .main button{
    background: #fff;
    color: #000;
    border-color: #000;
    font-size: 16px;
    border-color: #909090;
  }
  .botonagregar{
    margin-left: 10%;
  }
  .main button:hover{
    background: #000;
    color: #fff;
    border-color: #000;
    	transition: .5s ease-in-out;
  }
  </style>
  <body>
      <div class="content">
        <div class=" desc d-flex justify-content-end">
          <ul class="list-group col-md-5 ">
            <li class="list-group-item bg-transparent border-0 h3">{{($producto->pro_nombre)}}</li>
            <li class="list-group-item font-weight-bold bg-transparent border-0 h4">$ {{(number_format($producto->pro_precio,0))}}</li>
            <li class="list-group-item bg-transparent border-0">{{($producto->pro_estilo)}}</li>
            <a href="{{ route('cart-add', $producto->slug) }}"><li class="botonagregar font-weight-bold btn list-group-item border-0" type="button"
            style="width:65%;" name="button">Añadir al carrito</li></a>
              <li class="list-group-item bg-transparent border-0 ">Elige tu talla <select class="form-control col-md-4 rounded-0">
              <option  value="">{{($producto->pro_talla)}}</option></select> </li>
              <li class="list-group-item border-0 font-weight-bold">Descripcion del producto
                <p class="font-weight-normal">{{($producto->pro_descripcion)}}</p>
              </li>
          </ul>
        </div>

        <div class="card rounded-0 border-0 bg-transparent">
          <div class="form-group1 form-group row">
            <div class="col-md-3">
              <div class="fotos">
              <img class="card-img img-fluid shadow-sm p-3 mb-5 bg-white rounded"
             src="{{Storage::url($foto->fot_ruta)}}" style="width:100%;" alt="Card image">
                   </div>
            </div>
            <div class="col-md-3">
              <div class="fotos">
              <img class="card-img img-fluid shadow-sm p-3 mb-5 bg-white rounded"
             src="{{Storage::url($foto->fot_ruta)}}" style="width:100%;" alt="Card image">
                   </div>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-3">
              <div class="fotos">
              <img class="card-img img-fluid shadow-sm p-3 mb-5 bg-white rounded"
             src="{{Storage::url($foto->fot_ruta)}}" style="width:100%;" alt="Card image">
                   </div>
            </div>
            <div class="col-md-3">
              <div class="fotos">
              <img class="card-img img-fluid shadow-sm p-3 mb-5 bg-white rounded"
             src="{{Storage::url($foto->fot_ruta)}}" style="width:100%;" alt="Card image">
                   </div>
            </div>
          </div>

      </div>
      <div class=" container">
        <h2 class="coment">Hacer comentario</h2>
        <div class="form-group row">
          <div class="col-md-7">
        @if (Auth::check())
        <form action="{{ action('HombreController@store') }}" method="post">
          @csrf
          <div class="hacer-coment">
            <textarea class="form-control rounded-0" name="comment"  id="exampleFormControlTextarea1" rows="3"></textarea>
            <div class="main d-flex justify-content-center">
           <button type="submit" class="btn btn-primary btn-block list-group-item font-weight-bold rounded-0" name="button">Publicar</button>
        </div>
          </div>
        </form>
        @else
        <a href="{{url('/login')}}"><li class="font-weight-bold btn list-group-item border-0" type="button"
        style="" name="button">iniciar sesión para poder comentar</li></a>
        @endif
        <div class="">
        <img class="img-fluid shadow-sm p-3 mb-5 bg-white rounded"
       src="{{Storage::url($foto->fot_ruta)}}" style="width:65%;" alt="Card image">
             </div>
          </div>
          <div class="col-md-5">
              <h2 class="coment">COMENTARIOS</h2>
            <div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example">
              <h4 id="list-item-1">Item 1</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
              <h4 id="list-item-2">Item 2</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </p>
              <h4 id="list-item-3">Item 3</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
              <h4 id="list-item-4">Item 4</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <h4 id="list-item-2">Item 2</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <h4 id="list-item-3">Item 3</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
                <h4 id="list-item-4">Item 4</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </p>
            </div>
          </div>
      </div>
      </div>

    </div>

  </body>

</html>
@endsection
