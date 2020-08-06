<!doctype html>
<html>
<head>
<meta charset="utf-8">

<link rel="stylesheet" href="{{asset('css/app.css')}}">
<title>legado</title>
</head>
<style media="screen">
.mega-menu{width: 600px; overflow: hidden; padding: 10px;}
.mega-menu a{text-decoration: none; color: #121212;}
.mega-menu .sub-menu-heading{ color: #000;}
.logo{
  margin-bottom: 2%;
  margin-left: 2%;
  position: static;
}
.logo img{
  margin-right: 9%;
}
.navegador1{
  margin-left: 2%;
  display: inline-block;
}
.navegador1 span a{
  line-height: 40px;
}
.navegador2 span a{
  line-height: 40px;
}

.logo2{
  margin-left: 20%;
  display:inline;
  position: absolute;
}
.navegador2{
  margin-left: 4%;
  display: inline-block;
}
.navegador2 span{
display: block;
}
.navegador1 span{
    display: block;
}
.carousel{
    margin-bottom: 4%;
}
.boton{
display: inline;
}

.carousel-inner img{
max-height: 860px;
max-width: 100%;
margin: 0 auto;
width: 100%;
}
.carousel-inner>.carousel-item{
    max-width: 100% !important;
    margin: 0 auto;
}
.holas ul {
  list-style: none;

}
.holas ul li a{
  display: inline;
}
.boton ul {
  list-style: none;
}
.logo3 li {
  list-style: none;
}
.campo{
display: inline-flex;
}
@media (max-width: 1068px) {
    .logo3 {
      display: none;
    }
    nav{
      background: #000;
    }
    .holas ul{
      display: inline-block;
    }
    .carousel{
      display: none;
    }
    div .hombre h1{
      font-size: 20px;
    }
    .boton button{
      color: #fff;
      border-color: #fff;
    }
    .holas ul li a{
      font-size: 14px;
      color: #fff;
    }
    div .holas li a{
      color: #fff;
    }
}

</style>
    <!-- Styles -->
<body>
  <div class="">
    <div class="">
      <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-white p-4">
          <div class="">
          <div class="menu">
            <div class="logo">
              <img src="img/legado4.jpg" style="height: 20px;" alt="">
            </div>
            <div class="navegador1">
              <div class="campo">
                <h5 class="text-dark h2 font-weight-light">HOMBRE</h5>
              </div>
                    <span class="text-muted "> <a class="text-dark h4 font-weight-light" href="/hombre-">ROPA</a></span>
              <span class="text-muted "> <a class="text-dark"  href="hombre-ropa/create">Camisetas</a> </span>
            <span class="text-muted "> <a  class="text-dark" href="#">Sudaderas</a> </span>
            <span class="text-muted "> <a class="text-dark"  href="#">Bermudas</a> </span>
          <span class="text-muted "> <a class="text-dark"  href="#">Camisas</a> </span>
          <span class="text-muted "> <a class="text-dark"  href="#">Pantalones</a> </span>
          </div>
            <div class="navegador2">
              <div class="campo">
                <h5 class="text-dark h2 font-weight-light">MUJER</h5>
              </div>
                <span class="text-muted "> <a class="text-dark h4 font-weight-light" href="#">ROPA</a> </span>
            <span class="text-muted "> <a  class="text-dark " href="#">Camisetas</a> </span>
        <span class="text-muted "> <a class="text-dark "  href="#">Sudaderas</a> </span>
            <span class="text-muted "> <a  class="text-dark " href="#">Vestidos</a> </span>
                <span class="text-muted "> <a  class="text-dark " href="#">Blusas</a> </span>
                  <span class="text-muted "> <a class="text-dark "  href="#">Shorts</a> </span>
          </div>
          <div class="logo2">
              <img src="img/legadomenu.jpg" style="height: 200px;" alt="">
        </div>
          </div>
          </div>
        </div>
      </div>
      <nav class="navbar " style="height: 90px;">
        <div class="boton">
              <button class="btn btn-outline-danger btn-lg " type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                MENU
              </button>
          </div>
          <div class="logo3">
            <li>
              <a href="#" class=""><img src="img/legado4.jpg" style="height: 30px;" alt=""></a>
            </li>
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

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

 @yield('hombre-ropa')

</body>
</html>
