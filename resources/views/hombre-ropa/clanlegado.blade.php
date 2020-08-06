@extends('layouts.app')
@section('clanlegado')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Legado - Clan Legado</title>
</head>
  <style media="screen">
  .contenido{
    margin-bottom: 15%;
  }
  .contenido .form-group img{
    margin-top: 12%;

  }

  .contenido .form-group .texto{
    margin-top: 6%;
  }
  .sec1{
    height: 700px;
    background-image: url("img/fondoblack.jpg");
  }
  .sec2{
    height: 700px;
    background: #000;
  }
  .contenido p{
    color:#fff;
    text-transform: uppercase;

  }
  .contenido .main button{

    height: 40px;
    font-size: 13.5px;
  }
  .contenido img.card-img {
    -webkit-transform: scale(1);
  	transform: scale(1);
  	-webkit-transition: .3s ease-in-out;
  	transition: .3s ease-in-out;
  }
  img.card-img-top {
    -webkit-transform: scale(1);
  	transform: scale(1);
  	-webkit-transition: .3s ease-in-out;
  	transition: .3s ease-in-out;
  }

  .contenido figure:hover img {
    -webkit-transform: scale(1.3);
  	transform: scale(1.3);
  }
  .contenido figure {
  	margin: 0;
  	padding: 0;
  	overflow: hidden;
  }
  </style>

  <body>
    <section class="sec1">
      <div class="contenido">
        <div class="card border-0 bg-transparent">
          <div class="form-group row">
              <div class="col-md-6">
                <a class="" href="/disenosg">
                <figure><img src="img/clanlegadopag.jpg" class="card-img-top rounded-0 container" alt="Card image cap"></figure>
                </a>
              </div>
              <div class=" texto col-md-5">
                <p class="container font-weight-bold">Clan legado, un gran videojuego que estará dispuesto a entretener el público con su gran diseño,
                misterio y dificultad. Este es el comienzo de una historia basada en el mundo real con un contenido animado.
                 Será el momento perfecto donde estarán reunidos todos los personajes
                 que se encuentran en los diseños Legado. Las apariencias únicas,
                 roles diferentes y con una historia increíble. En el año 2021 se dará
                 a conocer el mejor videojuego de todos los tiempos.</p>
                 <div class=" main">
                   <a class="container" href="/disenosg">
                     <button type="button" class="btn btn-primary rounded-0 font-weight-bold" name="button">
                       Explorar colección</button></a>
               </div>
              </div>
        </div>
        </div>

      </div>
    </section>
    <section class="sec2">
      <div class="contenido container">
        <div class="form-group row">
            <div class="col-md-6">

              <img class="container" src="img/clanlegadopag.jpg" style="width:90%;" alt="Card image">

            </div>
            <div class="texto col-md-6">
              <p>Clan legado, un gran videojuego que estará dispuesto a entretener el público con su gran diseño,
              misterio y dificultad. Este es el comienzo de una historia basada en el mundo real con un contenido animado.
               Será el momento perfecto donde estarán reunidos todos los personajes
               que se encuentran en los diseños Legado. Las apariencias únicas,
               roles diferentes y con una historia increíble. En el año 2021 se dará
               a conocer el mejor videojuego de todos los tiempos.</p>
            </div>
      </div>
      </div>
    </section>

  </body>

  </script>
</html>
@endsection
