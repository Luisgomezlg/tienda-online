<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [
  'as' => '/', 'uses' => 'IndexController@index'
]);
Route::resource('eventos', 'EventoController');
  Route::resource('productos', 'ProductoController');
  Route::resource('fotos', 'FotoController');
  Route::resource('estilos', 'EstiloController');
      Route::resource('categorias', 'CategoriaController');
      Route::resource('lineas', 'LineaController');
Route::middleware('Admin')->group(function () {
    Route::get('admin', 'AdministradorController@index');


});
Auth::routes();
Route::resource('usuarios', 'UsuarioController');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/hombre/ropa', 'HombreController@index')->name('index');
Route::get('/mujer/ropa', 'HombreController@index2')->name('index2');

Route::get('/ropa/{slug}/{pro_id?}', [
  'as' => 'product-detail',
  'uses' => 'HombreController@show'
]);
//Route::post('/hombre-ropa', 'HombreController@store')->name('store');
Route::resource('hombre-ropa', 'HombreController');
Route::get('mujeres', 'HombreController@mujeres')->name('mujeres');
Route::get('hombres', 'HombreController@hombres')->name('hombres');

Route::get('productsCat', 'HombreController@productsCat');
Route::get('productsCat2', 'HombreController@productsCat2');
Route::get('/camisetas', 'HombreController@camisetas_all')->name('camisetas');
Route::get('/sudaderas', 'HombreController@sudaderas_all')->name('sudaderas');
Route::get('/pantalones', 'HombreController@pantalones_all')->name('pantalones');
Route::get('/polos', 'HombreController@polos_all')->name('polos');

Route::get('/hombre/camisetas', 'HombreController@camisetas')->name('camisetas');
Route::get('/hombre/sudaderas', 'HombreController@sudaderas')->name('sudaderas');
Route::get('/hombre/pantalones', 'HombreController@pantalones')->name('pantalones');
Route::get('/hombre/polos', 'HombreController@polos')->name('polos');

Route::get('/mujer/camisetas', 'HombreController@camisetasm')->name('camisetasm');
Route::get('/mujer/sudaderas', 'HombreController@sudaderasm')->name('sudaderasm');
Route::get('/mujer/pantalones', 'HombreController@pantalonesm')->name('pantalonesm');
Route::get('/mujer/polos', 'HombreController@polosm')->name('polosm');

Route::get('disenosg', 'HombreController@disenosg')->name('disenosg');
Route::get('classic', 'HombreController@classic')->name('classic');
Route::get('text', 'HombreController@text')->name('text');
Route::get('/clanlegado', 'HombreController@clanlegado')->name('clanlegado');
//carrito de compras
Route::bind('product', function ($slug) {
    return App\Producto::where('slug', $slug)->first();
});

Route::get('cart/show', [
    'as' => 'cart-show',
    'uses' => 'CartController@show'
]);

Route::get('cart/add/{product?}', [
    'as' => 'cart-add',
    'uses' => 'CartController@add'
]);
Route::get('cart/delete/{product}', [
    'as' => 'cart-delete',
    'uses' => 'CartController@delete'
]);
Route::get('cart/trash', [
    'as' => 'cart-trash',
    'uses' => 'CartController@trash'
]);
Route::get('cart/update/{product}/{quantity?}', [
    'as' => 'cart-update',
    'uses' => 'CartController@update'
]);
Route::get('order-detail', [
    'middleware' => 'auth',
    'as' => 'order-detail',
    'uses' => 'CartController@orderDetail'
]);

/////////////////////////////

Route::get('payment', array(
    'as' => 'payment',
    'uses' => 'PaypalController@postPayment',
));
// Después de realizar el pago Paypal redirecciona a esta ruta
Route::get('payment/status', array(
    'as' => 'payment.status',
    'uses' => 'PaypalController@getPaymentStatus',
));

/*<nav class="navigation">
      <div class="container">
      <div class="bg-white" id="headingTwo">
      <nav class="accordion" id="accordionExample">
      <ul>
        <div class="navbar-nav">
        <li><a href="/" class="nav-item nav-link active"><img src="{{ asset('img/legado3.jpg') }}" style="height:50px;"  class="" alt=""></a></li>
        <li class="nav-item nav-link active collapsed" type="text" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">MENU</li>
        <li><input type="text" class="nav-item nav-link" name="" value=""></li>

        <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="#">Features</a>
        <a class="nav-item nav-link" href="#">Pricing</a>
        <a class="nav-item nav-link disabled" href="#">Disabled</a>
      </div>
      <script type="text/javascript">
        $(".btn").on("click",function() {
          $(".input").toggleClass("inclicked");
          $(".btn").toggleClass("close");
        });
      </script>
        <li>
        </li>
      </ul>
      </nav>
      </div>
            <a href="/"><img src="img/legado3.jpg" width="120" alt=""></a>
              <i class="fa fa-bars"></i>
      </div>

      <ul class="barra">
        <li class="d-flex justify-content-center" ><input type="text" placeholder="Buscar" class="border-bottom rounded-0 form-control" name="" value=""></li>
            <li><a class="font-weight-bold text-dark" href="#">NOVEDADES</a></li>
            <li><a class="font-weight-bold text-dark" href="#">HOMBRE<i class="fa fa-sort-desc"></i></a>
                  <ul>
                        <li><a  class="font-weight-light text-dark" href="{{'hombre-ropa-camisetas'}}">Camisetas</a></li>
                        <li><a  class="font-weight-light text-dark" href="#">Polo</a></li>
                        <li><a  class="font-weight-light text-dark" href="#">Sudaderas</a></li>
                        <li><a  class="font-weight-light text-dark" href="#">Bermudas</a></li>
                  </ul>
            </li>
            <li><a class="font-weight-bold text-dark" href="#">MUJER<i class="fa fa-sort-desc"></i></a>
                  <ul>
                        <li><a  class="font-weight-light text-dark" href="#">Blusas</a></li>
                        <li><a  class="font-weight-light text-dark" href="#">Sudaderas</a></li>
                        <li><a  class="font-weight-light text-dark" href="#">Vestidos</a></li>
                        <li><a  class="font-weight-light text-dark" href="#">Shorts</a></li>
                  </ul>
            </li>
            <div class="entrar">
              @guest
              <li class="nav-item">
                  <a class="nav-link font-weight-bold text-dark" href="{{ route('login') }}">{{ __('Iniciar sesión') }}<img src="img/user.png" alt=""> </a>

              </li>
          @else
              <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="dropdown" href="dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->nombre }} <span class="caret"></span>
                    </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Cerrar sección') }}
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
              </li>
                @endguest
          </div>
      </ul>
</nav>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Legado</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Legado</title>
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="http://code.jquery.com/jquery-3.3.1.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  </head>
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</script>
<title>legado</title>
</head>
<style media="screen">
.mega-menu{width: 600px; overflow: hidden; padding: 10px;}
.mega-menu a{text-decoration: none; color: #121212;}
.mega-menu .sub-menu-heading{ color: #000;}
.logo{
  margin-left: 13%;
    margin-bottom: 2%;
}
.navegador1 span{
    display: block;
}
.holas ul {
  list-style: none;
}
.boton ul {
  list-style: none;
}
.logo3 li {
  list-style: none;
}
.logo3 img{
  height: 60px;
}
@media (max-width: 768px) {
  .logo3 img{
    margin-left: -110%;
    height: 20px;
  }
  .menu div{
    display: block;
  }
  .search input{
    margin-top: 4%;
    height: 30px;
    width: 180px;
  }
    .holas{
      display: none;
    }
    .carousel{
      display: none;
    }
    div .hombre h1{
      font-size: 20px;
    }
    nav .menu1{
      font-size: 20px;
      float: left;
    }
    .logo2{
      display: none;
    }
    .form-group div {
    display: table-row-group;
    }
    .menu2 {
display: none;
  }
  .middle{
    margin-left: -5%;
  }

  .menu{
    margin-left: 0%;
  }
}




.menu1{
  font-size: 40px;
}
.form-group span{
  display: block;
  padding-right: 20px;
  line-height: 40px;
}
.cajon1{
    margin-right: 5%;
}
.middle{
  position: absolute;
  display: inline-block;
  margin-top: -1.5%;
  margin-left: 80%;
  transform: translate(-50%,-50%);
}
.input{
  width: 30px;
  height: 30px;
  background: none;
  border-radius: 50%;
  border: 1px solid black;
  transition: width 0.4s ease-in-out,
              border-radius 0.8s ease-in-out,
              padding 0.2s;
  transition-delay: 0.4s;
  color: black;
  font-size: 15px;
}
.inclicked{
  width: 160px;
  border-radius: 0;
  padding: 0 15px;
  padding-right: 40px;
  border: 1px solid black;
}
.btn{
  position: absolute;
  width: 30px;
  height: 30px;
  top:0;
  right: 0;
  box-sizing: border-box;
  background: none;
  border: none;
  outline: none;
  cursor: pointer;
}
.btn::before{
  content: "";
  width: 5px;
  height: 25px;
  background: black;
  position: absolute;
  transform: rotate(-45deg);
  bottom: -16px;
  right: -8px;
  transition: 0.3s;
}
.close::before,.close::after{
  content: "";
  width: 4px;
  height: 20px;
  background: black;
  position: absolute;
  bottom: 5px;
  right: 15px;
}
.close::before{
    transform: rotate(-45deg);
}
.close::after{
    transform: rotate(45deg);
}
.menu1{
      cursor: pointer;
}
.caja
{
/*
 /*Margen superior del 20% y luego centramos con un margen lateral izquierdo del 30%*/
//animation: aparecer 2s ease-out 1; /*Definimos un nombre para la animación (“aparecer”), un tiempo total de 4segundos de duración y un movimiento suavizado al final*/
//-webkit-animation: aparecer 2s ease-out 1;/*Chrome, Safari, Android, iOs*/
//-moz-animation: aparecer 2s ease-out 1; /*Firefox*/
//-o-animation: aparecer 2s ease-out 1; /*Opera*/
//-ms-animation: aparecer 2s ease-out 1; /*Internet Explorer*/
//}
//@keyframes aparecer {
//from {margin-top: -50%; opacity: 1;}  /*Nótese el margen negativo para situarlo bien arriba*/
//2% {margin-top: 5%; opacity: 0.4;} /*Vemos que cuando haya transcurrido el 50% del tiempo, es decir, 2s, el margen superior ha pasado de -50% a 10%, y la opacidad de 0 a 0.2*/
//to {margin-top: 0%; opacity: 1;} /*Es el ultimo fotograma de la animación, o punto final*/
//}
//*/
/*section .sec{
  background: #000;
  width: 100%;
  height: 300px;
}
.hombre {
  float: left;
    margin-left: -52%;
    margin-right: 20%;
}
.mujer{
  float: right;
  margin-left: 20%;
}
.hombre  li{
list-style: none;
}
.mujer li{
list-style: none;
}
</style>
    <!-- Styles -->
<style media="screen">
@media (max-width: 1290px) {
  .hombre img{
    display: none;
  }
  .mujer img{
    display: none;
  }
}
.contenido1 img.card-img {
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

.contenido1 figure:hover img {
  -webkit-transform: scale(1.3);
    transform: scale(1.3);
}
.contenido1 figure {
    width: 350px;
    height: 380px;
    margin: 0;
    padding: 0;
    background: #fff;
    overflow: hidden;
}
.card-group figure:hover img {
  -webkit-transform: scale(1.3);
    transform: scale(1.3);
}
.card-group figure {
    margin: 0;
    padding: 0;
    background: #fff;
    overflow: hidden;
}

.navigation div i{
  display: none;
  background: black;
      color: #000;
      font-size: 24px;
      padding: 0.6em;
      cursor: pointer;
}
.navigation .barra{
  display: none;
}

@media(max-width: 768px) {
  .navigation .barra{
    display: block;
  }
  ul {
        margin: 0;
        padding: 0;
        list-style-type: none;
        position: relative;
        background: #FFFFFF;
  }

  ul li {
        display: inline-block;
  }

    .navigation ul li:hover {
        background: #fff;
  }

    .navigation ul ul {
        position: static;
        min-width: 200px;
        background: #fff;
        display: none;
        margin-left: 15%;
  }

    .navigation ul ul li {
        display: block;
  }

  .navigation   ul ul li a{
        color: #000;
  }
    .navigation ul li i {
        color: #000;
        float: right;
        padding-left: 20px;
  }
  .navigation ul li a {
        color: #000;
        text-decoration: none;
        padding: 15px;
        display: block;
  }
  .navigation div i{
    float: right;
      display: inline;
    background: #fff;
  }

  .navigation div img{
    margin-top: 3%;
    display: inline;
    background: #fff;
  }
  .cajas nav{
    display: none;
  }
      ul li {
            display: block;
      }
      .barra li input{
        display: block;
      }
      .entrar li {
        color: #000;
        display: block;
      }
    .barra li  input[type=text] {
 width: 200px;
 font-size: 16px;
 background-position: 10px 10px;
 background-repeat: no-repeat;
 padding: 12px 20px 12px 40px;
 -webkit-transition: width 0.4s ease-in-out;
 transition: width 0.4s ease-in-out;
}
.barra li input[type=text]:focus {
 width: 100%;
}
.entrar img{
  float: right;
  position: relative;
}
}
.barra input{
  display: none;
}
.navigation img{
  display: none;
}
.menu-fixed{
  position: fixed;
  z-index: 1000;
  height: 400px;
  margin-left: -1.5%;
  background: white;
  width: 100%;
  top: 0%;
}
.menu{
  background: white;
    width: 102%;
    height: 400px;
  visibility: visible;
}

nav div{
display: inline-block;
}
nav .holas{
margin-left: 90%;
display: flex;
margin-top: -3%;
}
nav .logo3 img{
  margin-top: 1%;
  margin-left: 3.5%;
}
nav .boton{
margin-top: -4%;
}
.menu .form-group{
  margin-left: 42%;
}
</style>
<body class="">
  <div class="">
    <div class="">
      <div class="collapse " id="navbarToggleExternalContent">
        <div class=" p-4">

          <div class="menu panel-collapse">
            <div class=" logo">
              <img src="img/legado4.jpg" style="height: 20px;" alt="">
            </div>

            <div class="container form-group row">
              <div class="hombre">
                <li>
                  <a href="/" class=""><img src="img/dembele.jpeg" width="300" alt=""></a>
                </li>
              </div>
                <div class="cajon1">
                <span class="text-muted "> <a class="text-dark h4 font-weight-bold"  href="{{'hombre-ropa'}}">HOMBRE</a> </span>
                <span class="text-muted "> <a class="text-dark h4 font-weight-light"  href="{{'hombre-ropa'}}">ROPA</a> </span>
                <span class="text-muted "> <a class="text-dark "  href="{{'hombre-ropa-camisetas'}}">Camisetas</a> </span>
                <span class="text-muted "> <a  class="text-dark " href="{{'hombre-ropa-sudaderas'}}">Sudaderas</a> </span>
                <span class="text-muted "> <a class="text-dark "  href="{{'hombre-ropa-bermudas'}}">Bermudas</a> </span>
                </div>
                <div class="cajon2">
                  <span class="text-muted "> <a class="text-dark h4 font-weight-bold" href="">MUJER</a> </span>

                    <span class="text-muted"> <a class="text-dark h4 font-weight-light" href="">ROPA</a> </span>
                <span class="text-muted"> <a  class="text-dark " href="#">Camisetas</a> </span>
            <span class="text-muted"> <a class="text-dark "  href="#">Sudaderas</a> </span>
                <span class="text-muted"> <a  class="text-dark " href="#">Vestidos</a> </span>
                    <span class="text-muted"> <a  class="text-dark " href="#">Blusas</a> </span>
                      <span class="text-muted "> <a class="text-dark "  href="#">Shorts</a> </span>
                </div>
                <div class="mujer">
                  <li>
                    <a href="/" class=""><img src="img/mujer.jpg" width="300" alt=""></a>
                  </li>
                </div>
          </div>
          </div>
        </div>
      </div>
      <div class="cajas">
        <nav class="menu" style="height: 60px;">
          <div class="container logo3">
            <li>
              <a href="/" class=""><img src="img/legado3.jpg" alt=""></a>
            </li>
          </div>
          <div class="boton d-flex justify-content-center">
            <div class="list-group " id="list-tab" role="tablist">
              <a class="menu1 text-dark font-weight-light rounded-0 " id="list-home-list" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">MENU</a>
            </div>
            </div>

            <div class="middle">
    <form class="search-box" action="index.html" method="post">
        <label for="" class="buscar">BUSCAR</label>
      <input type="text" class="input" name="" value="">
      <button type="button" role="ta" class="btn" name="button"></button>
    </form>
          </div>

            <div class="holas">
              <ul>
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Entrar') }}</a>
                </li>
            @else
                <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="dropdown" href="dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->nombre }} <span class="caret"></span>
                      </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Cerrar sección') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                  @endguest
              </ul>
            </div>
        </nav>
      </div>
    </div>
  </div>
  <nav class="navigation">
        <div class="container">

              <a href="/"><img src="img/legado3.jpg" width="120" alt=""></a>
                <i class="fa fa-bars"></i>
        </div>

        <ul class="barra">
          <li class="d-flex justify-content-center" ><input type="text" placeholder="Buscar" class="border-bottom rounded-0 form-control" name="" value=""></li>
              <li><a class="font-weight-bold text-dark" href="#">NOVEDADES</a></li>
              <li><a class="font-weight-bold text-dark" href="#">HOMBRE<i class="fa fa-sort-desc"></i></a>
                    <ul>
                          <li><a  class="font-weight-light text-dark" href="{{'hombre-ropa-camisetas'}}">Camisetas</a></li>
                          <li><a  class="font-weight-light text-dark" href="#">Polo</a></li>
                          <li><a  class="font-weight-light text-dark" href="#">Sudaderas</a></li>
                          <li><a  class="font-weight-light text-dark" href="#">Bermudas</a></li>
                    </ul>
              </li>
              <li><a class="font-weight-bold text-dark" href="#">MUJER<i class="fa fa-sort-desc"></i></a>
                    <ul>
                          <li><a  class="font-weight-light text-dark" href="#">Blusas</a></li>
                          <li><a  class="font-weight-light text-dark" href="#">Sudaderas</a></li>
                          <li><a  class="font-weight-light text-dark" href="#">Vestidos</a></li>
                          <li><a  class="font-weight-light text-dark" href="#">Shorts</a></li>
                    </ul>
              </li>
              <div class="entrar">
                @guest
                <li class="nav-item">
                    <a class="nav-link font-weight-bold text-dark" href="{{ route('login') }}">{{ __('Iniciar sesión') }}<img src="img/user.png" alt=""> </a>

                </li>
            @else
                <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="dropdown" href="dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->nombre }} <span class="caret"></span>
                      </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Cerrar sección') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                  @endguest
            </div>
        </ul>
  </nav>
  <script type="text/javascript">
  $(document).ready(function(){
    var altura = $('.menu').offset().top;
    $(window).on('scroll', function(){
      if ($(window).scrollTop() > altura) {
        $('.menu').addClass('menu-fixed');
      }else{
        $('.menu').removeClass('menu-fixed');
      }
    })

  })
  </script>
  <script type="text/javascript">

  })
  </script>
        <script type="text/javascript">

        $(".navigation div i").click(function() {
              $(".barra").slideToggle();
              $("ul ul").css("display", "none");
        });

        $(".barra li ").click(function() {
              $(this).find('ul').slideToggle();
        });
        $(".barra li i").click(function() {
              $(this).find('ul').slideUp();
        });

        $(window).resize(function() {
              if($(window).width() > 768) {
                    $("ul").removeAttr('style');
              }
        });

        </script>


  @yield('welcome')
  @yield('hombre-ropa')
  @yield('hombre-ropa-camisetas')
  @yield('hombre-ropa-sudaderas')
  @yield('hombre-ropa-bermudas')

  <script type="text/javascript">
    $(".btn").on("click",function() {
      $(".input").toggleClass("inclicked");
      $(".btn").toggleClass("close");
    });
  </script>

  <script type="text/javascript">
  $('.card-img').mouseover(function(){
      $(this).css('opacity','.0.5');
  }).mouseout(function(){
      $(this).css('opacity','1');
  });
  </script>



<section>
  <div class="sec">
    </div>
</section>
</body>
</html>

*/
