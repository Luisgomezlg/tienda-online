<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<script
  src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <style media="screen">

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

      <div id="responsive-admin-menu">
        <div id="responsive-menu">
          <div class="menuicon">≡</div>
        </div>

        <div id="logo"></div>

        <!--Menu-->
        <div id="menu">
            <a href="" title="Legado"><i class="icon-dashboard"></i><span>
            MENU</span></a>
            <a class="" href="/usuarios"><i class="icon-bullhorn"></i><span>usuarios</span></a>
            <a href="/productos"><i class="icon-bullhorn"></i><span>productos</span></a>
            <a href="/eventos"><i class="icon-bullhorn"></i><span>eventos</span></a>
            <a href="/facturas"><i class="icon-bullhorn"></i><span>facturas</span></a>
            <a href="/fotos"><i class="icon-bullhorn"></i><span>fotos</span></a>
            <a href="/categorias"><i class="icon-bullhorn"></i><span>categorias</span></a>
            <a href="/lineas"><i class="icon-bullhorn"></i><span>lineas</span></a>
            <a href="/forma_pago"><i class="icon-bullhorn"></i><span>forma_pago</span></a>
            <a href="/roles"><i class="icon-bullhorn"></i><span>roles</span></a>
            <a href="/items"><i class="icon-bullhorn"></i><span>items</span></a>
        </div>
        <!--Menu-->
      </div>
      <div class="">
        <div id="content-wrapper">
          <div class="tabla1">
            <div class="contenido">
              Datos de la tabla</div>
            <div style="">
      @yield('lin')
      @yield('cat')
          @yield('eve')
            @yield('usu')
      @yield('est')
              @yield('pro')
            @yield('fot')
        @yield('cat-edit')
        @yield('eve-edit')
        @yield('pro-edit')
            @yield('usu-edit')
              @yield('fot-edit')
            </div>
          </div>

        </div>
      </div>

      <style media="screen">
      @import url(https://fonts.googleapis.com/css?family=Open+Sans);

      /* body	*/
      html, body {
        margin: 0;
        padding: 0;
        height: 100%;
          font-family: 'Quicksand', sans-serif;
      }
      /* body	*/


      #responsive-admin-menu {
      float: left;
      width: 200px;
      background-color: #fff;
      height: 100%;
      position: relative;
      overflow: hidden;
      left: 0px;
      min-height: 500px;
        margin-top: -3%;
      }

      #content-wrapper {
      width: auto;
      margin-left: 200px;
      background-color: #ffffff;
      height: 1200px;
      padding: 10px;
      margin-top: -3%;
      }

      #responsive-admin-menu #responsive-menu {
      height: 50px;
      display: none;
      line-height: 50px;
      cursor: pointer;
      color: #ffffff;
      text-indent: 10px;
      }


      #responsive-admin-menu #responsive-menu .menuicon {
      color: #ffffff;
      font-size: 24px;
      position: absolute;
      right: 10px;
      top: 0px;
      }
      #responsive-admin-menu #logo {
      background-position: -0px -36px;
      width: 174px;
      height: 40px;
      margin: 10px;
      background: url('https://assets.codepen.io/assets/footer/codepen-logo-midgray.svg') no-repeat;
      -webkit-background-size: 146.66667px 25.83333px;
      background-size: 146.66667px 25.83333px;
      }

      /* Menu Styles */
      #responsive-admin-menu #menu {
      width: 100%;
        margin-top: -30%;
      }
      #responsive-admin-menu #menu a {
      font-size: 14px;
      text-decoration: none;
      display: block;
      padding: 12px;
      color: #000;
      position: relative;
      font-weight: 400;
      overflow: hidden;
      }
      #responsive-admin-menu #menu a:hover {
      color: #52535a;
      background-color:#fcfcfc;
      }
      #responsive-admin-menu #menu i {
      width: 16px;
      padding-right: 4px;
      }
      #responsive-admin-menu #menu div {
      display: none;
      width: 100%;
      background-color: #5c5d64;
      overflow: hidden;
      }
      #responsive-admin-menu #menu div a {
      color: #c0c0c0;
      }
      #responsive-admin-menu #menu div a:hover {
      color: #888888;
      }
      #responsive-admin-menu #menu a.submenu:before {
      font-family: FontAwesome;
      content: "\f054";
      }
      #responsive-admin-menu #menu a.downarrow:before {
      font-family: FontAwesome;
      content: "\f078";
      }
      #responsive-admin-menu #menu a.submenu:before {
      font-size: 14px;
      position: absolute;
      right: 15px;
      top: 17px;
      }
      /* Menu Styles */

      @media screen and (max-width: 960px) {
      #responsive-admin-menu{
        display: inline-block;
      }
      .navbar{
        display: none;
      }
      #responsive-admin-menu #menu a span {
        display: inline-block;
      }

      }
      @media screen and (max-width: 880px) {
        .contenido{
          margin-top: 25%;
          margin-bottom: -20%;
        }
      #responsive-admin-menu {
        min-height: 70px;
        float: left;
        width: 100%;
        background: #000;
        height: auto;
        position: static;
        top: 0;
          margin-top: 0%;
          margin-bottom: 0%;
      }
      #responsive-admin-menu #logo {
        display: none;
      }
      #responsive-admin-menu #menu a span {
        display: inline-block;
      }
      #content-wrapper {
        margin-left: 0;

      }
      #responsive-admin-menu #responsive-menu {
        display: block;
      }
      #responsive-admin-menu #menu {
        display: none;
          margin-top: 5%;
      }
      #responsive-admin-menu #menu a {
        color: #FFFFFF;
      }
      #responsive-admin-menu #menu a.submenu:before {
        font-size: 14px;
        right: 15px;
      }
      }
      </style>
<script type="text/javascript">

eval(function(p,a,c,k,e,r){e=function(c){return c.toString(a)};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('$(o).i(4(){$("p").q(\'<r t="u" m="9/3-6-0.9"/>\');s a="";$("#3-0").c(4(){$("#3-6-0 #0").g()});$(h).f(4(){$("#3-6-0 #0").j("k")});$("#0 a.l").c(4(){d(a!=""){$("#"+a).n("a").e("7");$("#"+a).b("8")};d(a==$(1).5("2")){$("#"+$(1).5("2")).b("8");$(1).e("7");a=""}v{$("#"+$(1).5("2")).w("8");a=$(1).5("2");$(1).x("7")};y z})});',36,36,'menu|this|name|responsive|function|attr|admin|downarrow|fast|css||slideUp|click|if|removeClass|resize|slideToggle|window|ready|removeAttr|style|submenu|href|prev|document|head|append|link|var|rel|stylesheet|else|slideDown|addClass|return|false'.split('|'),0,{}))
</script>

</body>
