@extends('layouts.app')

@section('register')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Registrar usuarios</title>
</head>

  <style media="screen">
      .contenido2{
        margin-top: 10%;
        margin-bottom: 12%;
      }
      .logo2{
        margin-left: 35%;
        display: inline;
      }
      div .card-header{
        background: #000;
      }

    @media(max-width: 468px) {
      .contenido{
        width: 250px;
        display: table-row-group;
        padding-top: 30px;
      }
      .contenido2{
        margin-top: 23%;
      }

    }


  </style>
  <section>
      <div class="contenido2 d-flex justify-content-center">
    <div class="contenido">
    <div class="">
    <div class="card rounded-0">
    <div class="card-header rounded-0 list-group-item border-0 h6 text-light">{{ __('REGISTRO') }}
      <div class="logo2">
          <a href=""><img src="img/legado2.jpg" width="50"alt=""></a>
      </div>

    </div>

    <div class="card-body">
    <form method="POST" action="{{ route('register')}}" aria-label="{{ __('Register') }}">
            @csrf
            <div class="form-group row ">
                <div class="col-md-6 ">
                  <label for="nombre" class="">{{ __('Nombre') }}</label>
    <input id="nombre" type="text" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }} rounded-0" name="nombre" value="{{ old('nombre') }}" required autofocus>
            @if ($errors->has('nombre'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('nombre') }}</strong>
                </span>
            @endif
                </div>

                <div class="col-md-6">
                  <label for="apellido" class="">{{ __('Apellido') }}</label>
    <input id="apellido" type="text" class="form-control{{ $errors->has('apellido') ? ' is-invalid' : '' }} rounded-0" name="apellido" value="{{ old('apellido') }}" required autofocus>
            @if ($errors->has('apellido'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('apellido') }}</strong>
                </span>
            @endif
                </div>
          </div>
        <div class="form-group row">
              <div class="col-md-6">
                <label for="fecha_nacimiento" class="">{{ __('Fecha de nacimiento') }}</label>
    <input id="fecha_nacimiento" type="date" class="form-control{{ $errors->has('fecha_nacimiento') ? ' is-invalid' : '' }} rounded-0" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" required autofocus>
            @if ($errors->has('fecha_nacimiento'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('fecha_nacimiento') }}</strong>
                </span>
            @endif
              </div>

              <div class="col-md-6">
                <label for="tipo_identificacion" class="">{{ __('Tipo de documento') }}</label>
    <input id="tipo_identificacion" type="text" class="form-control{{ $errors->has('tipo_identificacion') ? ' is-invalid' : '' }} rounded-0" name="tipo_identificacion" value="{{ old('tipo_identificacion') }}" required autofocus>
            @if ($errors->has('tipo_identificacion'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('tipo_identificacion') }}</strong>
                </span>
            @endif
              </div>
        </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="numero_identificacion" class="">{{ __('Numero de documento') }}</label>
    <input id="numero_identificacion" type="text" class="form-control{{ $errors->has('numero_identificacion') ? ' is-invalid' : '' }} rounded-0" name="numero_identificacion" value="{{ old('numero_identificacion') }}" required autofocus>
            @if ($errors->has('numero_identificacion'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('numero_identificacion') }}</strong>
                </span>
            @endif
                </div>

                <div class="col-md-6">
                  <label for="direccion" class="">{{ __('Dirección') }}</label>
              <input id="direccion" type="text" class="form-control{{ $errors->has('direccion') ? ' is-invalid' : '' }} rounded-0" name="direccion" value="{{ old('direccion') }}" required autofocus>
              @if ($errors->has('direccion'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('direccion') }}</strong>
                  </span>
              @endif
                </div>
                  <div class="col-md-6">
                    <label for="email" class="">{{ __('Correo electrónico') }}</label>
    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} rounded-0" name="email" value="{{ old('email') }}" required>
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
                  </div>
            </div>
              <div class="form-group row">
                    <div class="col-md-6">
                      <label for="password" class="">{{ __('Contraseña') }}</label>
    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} rounded-0" name="password" required>
            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
                    </div>
                    <div class="col-md-6">
                      <label for="password-confirm" class="">{{ __('Confirmar contraseña') }}</label>
    <input id="password-confirm" type="password" class="form-control rounded-0" name="password_confirmation" required>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col">
                      <div class="main d-flex justify-content-center col-md-12">
                    <button type="submit"  id="findBtn" class="btn btn-primary  btn-lg btn-block rounded-0" name="button">{{ __('Registrarse') }}</button>
                  </div>
                    </div>
                </div>
    </form>
    </div>
    </div>
  </div>
  </div>
  </div>
  </section>
@endsection
