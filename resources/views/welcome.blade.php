@extends('layouts.app')
@section('welcome')
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
<title>Legado</title>
</head>
<style media="screen">

.carousel img{
  width: 100%;
}

.carousel-inner>.carousel-item{
    max-width: 100% !important;
    margin: 0 auto;
}

@media (max-width: 1000px) {

    .card-group{
      margin-top: 5%;
    }
}
@media (max-width: 790px) {
    .carousel{
      display: none;
    }
}

/* this is just icing */
body {
  font-family: 'Quicksand', sans-serif;
}
.main button{
  background: #fff;
  color: #000;
  border-color: #000;
  font-size: 13px;
  height: 40px;
  text-transform: uppercase;
  border-color: #808080;
}
.main button:hover{
  background: #000;
  color: #fff;
  border-color: #000;
  transition: .5s ease-in-out;
}
.main-carousel button{
  background: #fff;
  color: #000;
  font-size: 13px;
  height: 40px;
  text-transform: uppercase;
  border-color: #fff;
  margin-bottom: 1%;
}
.main-carousel button:hover{
  color: #fff;
  background: #000;
  border: 1px white solid;
  transition: .5s ease-in-out;
}

 .card-body p{
   font-size: 23px;
}
.card-body{
  background: #FEFEFE;
}

.novedades{
  display: none;
}
.texto{
  margin-top: -5%;
}
.img1 img{
  height: 70%;
  width: 70%;
}
</style>
    <!-- Styles -->
    <script type="text/javascript">
    $(document).ready(function(){
   $('.carousel').carousel({
     interval: 3000
   });
 });
    </script>

<body>
  @if(\Session::has('message'))
		@include('message')
	@endif
  <section>
    <div id="carouselExampleFade" style="background: white;" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner border-0">
        @foreach($eventos as $key =>$eventoimg)
        <div class="carousel-item {{$key == 0 ? ' active' : ''}} d-flex justify-content-center" >
          <img src="{{Storage::url($eventoimg->eve_link_img)}}" style="width:45%;" class="img-fluid" alt="Evento">
          <div class="carousel-caption d-none d-md-block">
            <div class="main-carousel fixed-bottom">
              <a href="/hombre-ropa"><button type="button" class="btn  border border-dark rounded-0" name="button">Explorar colección</button></a>
        </div>
    <p class="texto d-flex justify-content-center sticky-top text-dark">Explora los nuevo estilos de ropa.</p>
          </div>
        </div>
         @endforeach
      </div>
    </div>
  </section>
  <div class="grupo">
    <div class="card-group">
    <div class="card border-0">
        <figure><img src="img/mujeres.png" class="card-img-top rounded-0" alt="Card image cap"></figure>
      <div class="card-body" >
        <h3 class="card-title text-center">DISEÑOS GRAFICOS</h3>
        <p class="card-text text-center "><small class=""></small></p>
        <div class="main d-flex justify-content-center">
          <a href="/disenosg"><button type="button" class="btn btn-primary rounded-0" name="button">Explorar colección</button></a>
    </div>
      </div>
    </div>
    <div class="card border-0">
      <figure><img src="img/ben.png" class="card-img-top rounded-0" alt="Card image cap"></figure>
      <div class="card-body">
        <h3 class="card-title text-center">CLASICO</h3>
        <p class="card-text text-center "><small class="">Estilos de ropa clasicos y slogan.</small></p>
        <div class="main d-flex justify-content-center">
          <a href="/disenosg"><button type="button" class="btn btn-primary rounded-0" name="button">Explorar colección</button></a>
    </div>
      </div>
    </div>
    <div class="card  border-0">
        <figure><img src="img/hyp.png" class="card-img-top rounded-0" alt="Card image cap"></figure>
      <div class="card-body ">
        <h3 class="card-title text-center">DISEÑOS GRAFICOS</h3>
        <p class="card-text text-center "><small class=""></small></p>
        <div class="main d-flex justify-content-center">
          <a href="/disenosg"><button type="button" class="btn btn-primary rounded-0" name="button">Explorar colección</button></a>
    </div>
      </div>
    </div>
  </div>
  <div class="img1">
    <a href="/disenosg" class="d-flex justify-content-center"><img src="img/img1.png"  class=" card-img-top rounded-0"  alt="Card image cap"></a>
</div>
  <div class="card-group">
    <div class="card border-0">
      <figure style="" class="align-self-center"><img src="img/clanlegadow.jpg" class="container card-img-top rounded-0" alt="Card image cap"></figure>
      <div class="card-body">
        <h3 class="card-title text-center">CLAN LEGADO</h3>
        <h5 class="card-text text-center">DISEÑOS ORIGINALES</h5>
        <h5 class="card-text text-center"><small class="">Nuestros amigos estan aquí para agregar un toque de creatividad a tu forma de lucir.</small></h5>
        <div class="main d-flex justify-content-center">
          <a href="/disenosg"><button type="button" class="btn btn-primary rounded-0" name="button">Explorar colección</button></a>
    </div>
      </div>
    </div>
    <div class="card border-0">
      <figure style="" class="align-self-center"><img src="img/ben2.png" class=" container card-img-top rounded-0" alt="Card image cap"></figure>
      <div class="card-body">
        <h3 class="card-title text-center">DISEÑOS GRAFICOS</h3>
        <div class="main d-flex justify-content-center">
          <a href="/disenosg"><button type="button" class="btn btn-primary rounded-0" name="button">Explorar colección</button></a>
    </div>
      </div>
    </div>
  </div>
  </div>



</body>


</html>
@endsection
