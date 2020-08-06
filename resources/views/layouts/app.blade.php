<!DOCTYPE html>
<html lang="en" class="caja" dir="ltr">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
  </head>
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


<style media="screen">
body{

    font-family: 'Quicksand', sans-serif;
}
*{
  margin: 0;
  padding: 0;
}
footer{
  width: 100%;
}
.footer-container{
  width: 100%;
  color: #000;
}
.footer-main{
  width: 98%;
  max-width: 1000px;
  margin: auto;
  padding: 28px 0;
  display: flex;
  flex-wrap: wrap;
}
.footer-main .footer-column{
  width: calc(100% / 3);
  text-align: justify;
}
.footer-main .footer-column:nth-child(2){
  padding: 0 20px;
}
.footer-main .footer-column h3{
  font-size: 32px;
  color: #000;

  margin-bottom: 5px;
}
.footer-main .footer-column span p{
  display: inline-block;
  margin-left: 5px;
  margin-bottom: 5px;
      font-family: 'Quicksand', sans-serif;
}
.footer-copy-redes{
  width: 100%;
  background: #121212;
  border-top: 3px solid #fff;
}
.main-copy-redes{
  width: 100%;
  max-width: 1000px;
  padding: 15px 0;
  margin: auto;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  align-items: center;
}
.main-copy-redes .footer-copy{
  width: 70%;
  color: #fff;
}
.main-copy-redes .footer-redes{
  width: 30%;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}
.main-copy-redes .footer-redes a{
  display: inline-block;
  text-decoration: none;
  width: 40px;
  line-height: 40px;
  height: 40px;
  border-radius: 50%;
  background: #fff;
  color: #000;
  text-align: center;
}
@media screen and (max-width: 750px){
  .info-main{
    padding: 30px 100px;
  }
  .footer-main .footer-column{
    padding: 0 10px;

  }
  .footer-main .footer-column h3{
    font-size: 28px;
  }
  .footer-main .footer-column p{
    font-size: 14px;
  }
}
@media screen and (max-width: 640px){
  .info-main{
    padding: 30px 30px;
  }
  .info-main h3{
    padding: 30px 30px;
  }
  .footer-main{
    padding:10px 0;
  }
  .footer-main .footer-column{
    width: 100%;
    text-align: center;
    margin: 10px 0
  }
  .footer-main .footer-column h3{
    margin-bottom: 5px;
  }
  .footer-main .footer-column span{
    display: block;
  }
  .main-copy-redes .footer-copy{
    width: 100%;
    text-align: center;
    margin-bottom: 20px;
  }
  .main-copy-redes .footer-copy{
    width: 100%;
    text-align: center;
    margin-bottom: 20px;
  }
  .main-copy-redes .footer-redes{
    width: 80%;
    margin: auto;
  }
}
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
  height: 50px;
}
.boton{
  margin-left: -3%;
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

nav{
  box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.0), 0 1px 5px 0 rgba(0, 0, 0, 0.19);

}
.menu1{
  font-size: 40px;
}
.form-group span{
  display: block;
  padding-right: 60px;
  line-height: 40px;

}
.form-group span{
    margin-bottom: 5%;

}
.cajon1{
    margin-right: 5%;
}
body{
  margin: 0;
  padding: 0;
}

.menu1{
      cursor: pointer;
}
.middle label{

}
.caja
{
 /*Margen superior del 20% y luego centramos con un margen lateral izquierdo del 30%*/
animation: aparecer 2s ease-out 1; /*Definimos un nombre para la animación (“aparecer”), un tiempo total de 4segundos de duración y un movimiento suavizado al final*/
-webkit-animation: aparecer 2s ease-out 1;/*Chrome, Safari, Android, iOs*/
-moz-animation: aparecer 2s ease-out 1; /*Firefox*/
-o-animation: aparecer 2s ease-out 1; /*Opera*/
-ms-animation: aparecer 2s ease-out 1; /*Internet Explorer*/
}
@keyframes aparecer {
from {margin-top: -50%; opacity: 1;}  /*Nótese el margen negativo para situarlo bien arriba*/
2% {margin-top: 5%; opacity: 0.4;} /*Vemos que cuando haya transcurrido el 50% del tiempo, es decir, 2s, el margen superior ha pasado de -50% a 10%, y la opacidad de 0 a 0.2*/
to {margin-top: 0%; opacity: 1;} /*Es el ultimo fotograma de la animación, o punto final*/
}

.botonn{
  display: none;
}
.hombre {

}
.mujer{

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
    width: 200px;
        margin-top: 10%;
  }
  .mujer img{
    width: 200px;
        margin-top: 10%;
  }
  .accordion .cajon1{
    margin-top: 3%;
  }
  .accordion .cajon2{
    margin-top: 3%;
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
@media(max-width: 1000px) {
 .navigation .barra{
  display: block;
}
 .accordion{
  display: none;
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
  .navigation div{
    height: 60px;
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
  margin-left: 0%;
  background: white;
  width: 100%;
  top: 0;
  height: 70px;
}
.card-body img{
  -webkit-filter: blur(3px);
  	filter: blur(3px);
  	-webkit-transition: .2s ease-in-out;
  	transition: .2s ease-in-out;
    -webkit-filter: sepia(100%);
filter: sepia(100%);
-webkit-transition: .3s ease-in-out;
transition: .3s ease-in-out;
opacity: 1;
-webkit-animation: flash 3.5s;
animation: flash 3.5s;
}
.card-body:hover img{
  -webkit-filter: blur(0);
	filter: blur(0);
  -webkit-filter: sepia(0);
filter: sepia(0);
}
@-webkit-keyframes flash {
	0% {
		opacity: .4;
	}
	100% {
		opacity: 4;
	}
}
@keyframes flash {
	0% {
		opacity: .4;
	}
	100% {
		opacity: 4;
	}
}

.card-header{
  height: 70px;
  box-shadow: 0 0px 1px 0 white, 0 0.5px 7px 0 rgba(0, 0, 0, 0.08);
}


.logo3 img{
margin-top: 0.6%;
margin-left: 3%;
}
.accordion .card-body{
  margin-top: 5%;
  box-shadow: 0 0px 1px 0 white, 0 0.5px 7px 0 rgba(0, 0, 0, 0.09);
}

.accordion .card{
  margin-bottom: 5%;
}
.holas{
  margin-left: 30%;
  margin-top: -1.5%;
  float: right;
}

.accordion .collapsed{
  cursor: pointer;
}

.buscar input{
  margin-top: 1.1%;
  margin-left: 65%;
  position: absolute;
  width: 130px;
  font-size: 16px;
  background-position: 10px 10px;
  background-repeat: no-repeat;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}
.buscar input[type=text]:focus {
 width: 13%;
}
.cart {
  margin-left: 80%;
  margin-top: 1.1%;
  width: 5%;
}
.menu-collapse{
  margin-top: 0.5%;
}
.icon-user{
  margin-top: -3%;
}
.accordion .nombre-user{
  text-decoration: none;
}
.accordion .cajon1 a{
  text-decoration: none;
}
.accordion .cajon2 a{
  text-decoration: none;
}
.main button{
  background: #fff;
  color: #000;
  border-color: #000;
  font-size: 13px;
  height: 36.5px;
  text-transform: uppercase;
          border-color: #DCDCDC;
}
.main button:hover{
  background: #000;
  color: #fff;
  border-color: #000;
  transition: .5s ease-in-out;
}
</style>
<body class="caja">
      <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header fixed-top bg-white border-0" id="headingTwo">
      <div class="logo3">
        <li>
          <a href="/" class=""><img src="{{ asset('img/legado3.jpg') }}" class="fixed-top" alt=""></a>
        </li>
      </div>
        <h5 class="mb-0 text-center">
          <div class="menu-collapse">
            <a class="collapsed h4 font-weight-light " type="text" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              MENU
            </a>
          </div>

        </h5>
        <h5 class="mb-0 text-center">
          <a class="cart h3 fixed-top text-dark" href="{{ route('cart-show') }}"><i class="fa fa-shopping-cart "></i></a>
        </h5>
        <h5 class="mb-0 text-center">

        </h5>
        <h5 class="mb-0 text-center">
          <div class="holas">
            <ul>
              @guest
              <li class="nav-item">
                  <h6 class="d-flex justify-content-end"><a class=" text-dark" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a></h6>
              </li>
          @else
              <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nombre-user dropdown text-dark" href="dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->nombre}} {{ Auth::user()->apellido}}<span class="caret"></span>
                    </a>
                  <div class="dropdown-menu dropdown-menu-right rounded-0" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item text-dark" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Cerrar sesión') }}
                      </a>
                      <a class="dropdown-item  text-dark" href="">
                          {{ __('Configuración') }}
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
              </li>
                @endguest
            </ul>
          </div>
        </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body d-flex justify-content-center">
        <div class="container form-group row ">
          <div class="hombre p-2 flex-fill bd-highlight">
            <li>
              <a href="/" class=""><img  src="{{ asset('img/dembele.jpeg') }}" class="fixed" width="300" alt=""></a>
            </li>
          </div>
            <div class="cajon1">
            <span class="text-muted "> <a class="text-dark h4 font-weight-bold"  href="/hombres">HOMBRE</a> </span>
            <span class="text-muted "> <a class="text-dark h4 font-weight-light"  href="/hombre/ropa">ROPA</a> </span>
            <span class="text-muted "> <a class="text-dark"  href="/hombre/camisetas">Camisetas</a> </span>
            <span class="text-muted "> <a class="text-dark"  href="/hombre/polos">Polos</a> </span>
            <span class="text-muted "> <a  class="text-dark" href="/hombre/sudaderas">Sudaderas</a> </span>
            <span class="text-muted "> <a class="text-dark "  href="/hombre/pantalones">Pantalones</a> </span>
            <span class="text-muted "> <a class="text-dark font-weight-bold"  href="/clanlegado">Clan legado</a> </span>
            </div>
            <div class="cajon2">
              <span class="text-muted "> <a class="text-dark h4 font-weight-bold" href="/mujeres">MUJER</a> </span>

                <span class="text-muted"> <a class="text-dark h4 font-weight-light" href="/mujer/ropa">ROPA</a> </span>
            <span class="text-muted"> <a  class="text-dark " href="/mujer/camisetas">Camisetas</a> </span>
            <span class="text-muted "> <a class="text-dark"  href="/mujer/polos">Polos</a> </span>
            <span class="text-muted "> <a  class="text-dark" href="/mujer/sudaderas">Sudaderas</a> </span>
            <span class="text-muted "> <a class="text-dark "  href="/mujer/pantalones">Pantalones</a> </span>
            <span class="text-muted "> <a class="text-dark font-weight-bold"  href="/clanlegado">Clan legado</a> </span>
            </div>
            <div class="mujer d-flex p-2 flex-fill bd-highlight">
              <li>
                <a href="/" class=""><img src="{{ asset('img/mujer.jpg') }}"  width="300" alt=""></a>
              </li>
            </div>
            <a class="collapsed h4 font-weight-light" type="text" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><i class="fa fa-close"></i>
            </a>
      </div>
      </div>
    </div>
  </div>
    </div>
        <nav class="navigation">
              <div class="container">

                    <a href="/"><img src="{{asset('img/legado3.jpg')}}" width="120" alt=""></a>
                      <i class="fa fa-bars"></i>
              </div>

              <ul class="barra">
                    <li><a class="font-weight-bold text-dark" href="/hombre/ropa">NOVEDADES</a></li>
                    <li><a class="font-weight-bold text-dark" href="#">HOMBRE<i class="fa fa-sort-desc"></i></a>
                          <ul>
                            <li><a  class="font-weight-light text-dark" href="/hombres">HOMBRE</a></li>
                            <li><a  class="font-weight-light text-dark" href="/hombre/ropa">ROPA</a></li>
                                <li><a  class="font-weight-light text-dark" href="/hombre/camisetas">Camisetas</a></li>
                                <li><a  class="font-weight-light text-dark" href="/hombre/polo">Polos</a></li>
                                <li><a  class="font-weight-light text-dark" href="/hombre/sudaderas">Sudaderas</a></li>
                                <li><a  class="font-weight-light text-dark" href="/hombre/pantalones">Pantalones</a></li>
                                            <li><a  class="font-weight-light text-dark" href="/clanlegado">Clan legado</a></li>
                          </ul>
                    </li>
                    <li><a class="font-weight-bold text-dark" href="#">MUJER<i class="fa fa-sort-desc"></i></a>
                          <ul>
                          <li><a  class="font-weight-light text-dark" href="/mujeres">MUJER</a></li>
                            <li><a  class="font-weight-light text-dark" href="/mujer/ropa">ROPA</a></li>
                                <li><a  class="font-weight-light text-dark" href="/mujer/camisetas">Camisetas</a></li>
                                <li><a  class="font-weight-light text-dark" href="/mujer/polos">Polos</a></li>
                                <li><a  class="font-weight-light text-dark" href="/mujer/sudaderas">Sudaderas</a></li>
                                <li><a  class="font-weight-light text-dark" href="/mujer/pantalones">Pantalones</a></li>
                                  <li><a  class="font-weight-light text-dark" href="/clanlegado">Clan legado</a></li>
                          </ul>
                    </li>
                    <div class="entrar">
                      @guest
                      <li class="nav-item">
                          <a class="nav-link font-weight-bold text-dark" href="{{ route('login') }}">{{ __('Iniciar sesión') }}<i class="icon-user fa fa-user"></i></a>
                      </li>
                  @else
                      <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="text-dark dropdown" href="dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
          var altura = $('.accordion').offset().top;
          $(window).on('scroll', function(){
            if ($(window).scrollTop() > altura) {
              $('.accordion').addClass('menu-fixed');
            }else{
              $('.accordion').removeClass('menu-fixed');
            }
          })

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
        <script type="text/javascript">

        </script>

  @yield('welcome')
  @yield('show')
  @yield('cart')
  @yield('hombre')
  @yield('hombre-ropa')
  @yield('mujer-ropa')
  @yield('camisetas')
  @yield('polos')
  @yield('sudaderas')
  @yield('pantalones')
  @yield('camisetasm')
  @yield('polosm')
  @yield('sudaderasm')
  @yield('pantalonesm')
  @yield('disenosg')
  @yield('classic')
  @yield('text')
  @yield('login')
  @yield('register')
  @yield('clanlegado')
  @yield('content')
  <script type="text/javascript">
  $('.card-img').mouseover(function(){
      $(this).css('opacity','.0.5');
  }).mouseout(function(){
      $(this).css('opacity','1');
  });
  </script>
<footer>
  <div class="footer-container border-top">
    <div class="footer-main">
      <div class="footer-column">
        <h3>SUSCRIBETE</h3>
        <a href="https://www.clanlegado.com">www.clanlegado.com</a>
      </div>
      <div class="footer-column">
      <h3>DIRECCIONES</h3>
      <div class="">
        <span class="fa fa-map-marker"><p>calle 37 # 40a 61 CALI </p></span>
      </div>
      <div class="">
        <span class="fa fa-phone"><p>3106174664</p></span>
      </div>
      </div>
      <div class="footer-column">
        <h3>SOBRE NOSOTROS</h3>
        <p>Lorem ipsum dolor sit amet, consea. Exceptdeserunt mollit anim id est laborum.</p>
      </div>
    </div>
  </div>
  <div class="footer-copy-redes">
    <div class="main-copy-redes">
      <div class="footer-copy">
        &copy; 2018, todos los derechos reservados - | Legado |.
      </div>

          <div class="footer-redes">
            <a href="https://www.facebook.com" class="fa fa-facebook"></a>
            <a href="https://www.instagram.com/luisgomezlg/" class="fa fa-instagram"></a>
            <a href="https://www.whatsappweb.com" class="fa fa-whatsapp"></a>
          </div>
    </div>
  </div>
</footer>
</body>
</html>
