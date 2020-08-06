<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>legado</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<script
  src="https://code.jquery.com/jquery-3.3.1.js"></script>
<style media="screen">

*/
body {
background-color: #f8f8f8;
}

#page-wrapper {
padding: 0 15px;
min-height: 568px;
background-color: white;

}
@media (max-width: 908px) {
#page-wrapper {
  position: inherit;
  margin: 0 0 0 250px;
  padding: 0 30px;
  border-left: 1px solid #e7e7e7;
}
.contenido table{
margin-top: 1.4%;
}
.contenido{
display: contents;
margin-left: -35%;
}

.boton button{
margin-top: 5.4%;
margin-left: 7%;
  font-size: 12px;
    width: 35%;
    float: right;
}
.barra ul li {
  width: 90%;
display: inline-block;
}
.barra ul li button{
  font-size: 12px;
}
}

      nav{
        position: fixed;
          top: 0;
          left: 0;
          width: 100%;
          height: 80px;
          margin-bottom: 5%;
        box-sizing: border-box;
          transition: .5s;
      background: #fff;
  }

      nav .logo{
      float: left;
        padding-right: 80px;
    }
      nav .logo img{
          height: 60px;
          transition: .5s;
  }
  .barra button{
    margin-right: 10%;
    font-size: 13px;

  }

.barra ul {
list-style: none;
  margin-top: -5%;

  }
  .barra ul li button{
  margin-bottom: 15%;
  display: block;
  width: 79%;
}
  .contenido{
    margin-top: -15%;
      }
    .contenido{
margin-top: -32.4%;
margin-left: 5%;
    padding-left: 180px;
    }
    .boton{
      margin-bottom: 0.8%;
}
.boton button{
  margin-top: -1.4%;
}
.card{
  margin-top: -2%;
}

</style>

    <body>
      <nav  class="navbar navbar-default navbar-static-top">
          <div class="logo">
          <a href=""><img src="{{ asset('img/legado3.jpg') }}" alt=""></a>
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
        <!-- Authentication Links -->
      </nav>
      <div class="card border-0 bg-light rounded-0 text-white mb-2" style="max-width: 15rem;">
  <div class="card-header bg-white text-dark">Configuración</div>
  <div class="card-body">
    <div class="barra">
      <ul class="">
        <li>
          <button type="button" class="btn btn-outline-primary rounded-0">Control usuarios</button>
          <button type="button" class="btn btn-outline-secondary rounded-0">Control Productos</button>
          <button type="button" class="btn btn-outline-success rounded-0">Control Eventos</button>
          <button type="button" class="btn btn-outline-danger rounded-0">Control Facturas</button>
          <button type="button" class="btn btn-outline-warning rounded-0">Control usuarios</button>
          <button type="button" class="btn btn-outline-info rounded-0">Control Productos</button>
          <button type="button" class="btn btn-outline-secondary rounded-0">Control Eventos</button>
          <button type="button" class="btn btn-outline-dark rounded-0">Control Facturas</button>
        </li>
      </ul>
    </div>
  </div>
</div>

</body>
