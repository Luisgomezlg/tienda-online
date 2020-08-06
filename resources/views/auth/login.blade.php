@extends('layouts.app')
@section('login')
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Login</title>
</head>
    <!-- Styles -->
    <style media="screen">
    .contenido2{
      margin-top: 12%;
      margin-bottom: 10%;
    }
      .logo2 img{
      height: 15px;
      }
      .logo2{
            margin-left: 20%;
            display: inline;
            display: inline-flex;
          }
          div .card-header{
            background: #000;
          }
          .panel-heading h2{
            display: inline;
          }
          .panel-body{
            height: 270px;
          }
          .panel-body .regis{
            margin-top: 10%;
          }
        @media(max-width: 468px) {
          .contenido{
            display: table-row-group;

          }
          .panel-body .regis{
            margin-top: 0%;
          }
          .contenido2{
            margin-top: 33%;
            margin-left: 15%;
          }
          .contenido div {
                width: 100%;
          }
          .contenido2 a{
            font-size: 12px;
          }
          .contenido2 h2{
            font-size: 22px;
          }
          .logo2{
            margin-top: -10%;
            margin-left: 80%;
          }
        }
        .panel-body form{
          margin-top: 10%;
        }
    </style>
    <body>
        <div class="contenido2">
      <div class="contenido">
            <div class="row justify-content-center ">
                <div class="">
            <div class="shadow p-4 mb-5 rounded">
                <div class="panel-heading">

    <h2 class="text-center panel-title font-weight-light">Inicio de sesión</h2>
    <div class="logo2">
      <img src="img/legado4.jpg" alt="">
    </div>
                    </div>
                    <div class="panel-body">
          <form method="post" action="{{route('login')}}">
                @csrf
                    <div class="form-group col-md-12 {{ $errors->has('email') ? 'has-error' : '' }}">
                        <label for="email">Correo electrónico</label>
                    <input type="email" placeholder="Ingrese email" value="{{old('email')}}" class="form-control rounded-0" name="email"/>
                    {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                    </div>
                     <div class="form-group col-md-12 {{ $errors->has('password') ? 'has-error' : '' }} " >
                         <label for="password">Contraseña</label>
                    <input  type="password" placeholder="Ingrese contraseña" class="form-control rounded-0" name="password"/>
                     {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                    </div>
                    <div class="main d-flex justify-content-center col-md-12">
                  <button type="submit"  id="findBtn" class="btn btn-primary  btn-lg btn-block rounded-0" name="button">{{ __('Ingresar') }}</button>
                </div>


                      <a class="btn btn-link regis" href="{{ route('register') }}">
                      {{ __('Registrarse  ') }}
                      </a>
                      <a class="btn btn-link regis" href="{{ route('password.request') }}">
                          {{ __('¿Has olvidado su contraseña?') }}
                      </a>
                </form>
                </div>
                </div>
            </div>
             </div>
      </div>
      </div>
    </body>
@endsection
