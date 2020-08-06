@extends('layouts.app')
@section('hombre')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <style media="screen">
    .card .hombres{
    margin-left: 15%;
    }
    .card-hombre{
      background: #000;
    }
    .card-group img{
        height: 450px;
    }
    .main button{
      background: #fff;
      color: #000;
      font-size: 18px;
      height: 50px;
      text-transform: uppercase;
      border-color: #808080;
      margin-top: 0%;
      margin-left:0%;
    }
    .main a{
      margin-top: -5%;
    }
    .main button:hover{
      background: #000;
      color: #fff;
      border-color: #fff;
      transition: .5s ease-in-out;
    }

  </style>
  <body>
    <div class="">
      <div class="">
        <div class="card-hombre card text-white border-0 rounded-0">
        <img class="hombres card-img rounded-0" src="img/vista-mujer.jpg" style="width:70%;" alt="Card image">
          <div class="main d-flex justify-content-center">
         <a href="/hombre-ropa"><button type="button" class="btn btn-primary font-weight-bold rounded-0" name="button">Explorar colección</button></a>
      </div>
          </div>
      </div>
      <div class="card-group">
        <div class="card  border-0">
           <a href="/hombre-ropa"><figure><img src="img/mujer.jpg" class="card-img-top rounded-0" alt="Card image cap"></figure></a>
          <div class="card-body">
            <h1 class="card-title text-center">NOVEDADES</h1>
            <p class="card-text text-center">EXHIBE CON ELEGANCIA</p>
            <p class="card-text text-center"><small class="text-muted">Calidad 100% confiable.</small></p>
            <div class="main container">
           <a href="/hombre-ropa"><button type="button" class="btn btn-primary font-weight-bold rounded-0" name="button">Explorar colección</button></a>
        </div>
          </div>
        </div>
      <div class=" card  border-0">
           <a href="/hombre-ropa"><figure><img src="img/camisetas-mujeres.jpg" class="card-img-top" alt="Card image cap"></figure></a>
        <div class="card-body ">
          <h1 class="card-title text-center">NOVEDADES</h1>
          <p class="card-text text-center">EXHIBE CON ELEGANCIA</p>
          <p class="card-text text-center"><small class="text-muted">Calidad 100% confiable.</small></p>
          <div class="main container">
         <a href="/hombre-ropa"><button type="button" class="btn btn-primary font-weight-bold rounded-0" name="button">Explorar colección</button></a>
      </div>
        </div>
      </div>
    </div>
    </div>
  </body>
</html>
@endsection
