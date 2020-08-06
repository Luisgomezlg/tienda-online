@extends('layouts.app')

@section('content')
<style media="screen">
.email-reset{
  margin-top: 12%;
  margin-bottom: 30%;
}
.email-reset .card-header{
  background: #000;
  color: #fff;
}
.email-reset .card-header{
  background: #000;
}
.email-reset .logo-blanco{
  height: 14px;
  margin-top: -1%;
}
</style>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Legado - Recuperar contraseña</title>
  </head>
  <body>

  </body>
</html>
<div class="email-reset container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card rounded-0">
                <div class="card-header rounded-0">{{ __('Recuperar contraseña') }}
                  <div class="logo-blanco d-flex justify-content-end">
                    <img class="" src="{{ asset('img/logo-blanco.jpg') }}" class="fixed" width="35" alt="">
                  </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}" aria-label="{{ __('Reset Password') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Direccion de correo electrónico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} rounded-0" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                              <div class="main d-flex justify-content-center">
                            <button type="button"  id="findBtn" class="btn btn-primary rounded-0" name="button">{{ __('Enviar enlace al correo') }}</button>
                          </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
