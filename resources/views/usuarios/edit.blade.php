@extends('layouts.app3')
@section('usu-edit')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Actualizar usuarios</title>
  </head>
  <body>
      <div class="contenido">
        <div class="boton">
          <button type="button" class="btn btn-info rounded-0" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Actualizar usuarios</button>
        </div>
        <div class="table-responsive-sm">
        <table class="table">
          <table class="table">
            <thead class="table-dark">
                 <tr>
                     <th>Numero id</th>
                     <th>Nombre</th>
                     <th>Apellido</th>
                     <th>Fecha de nacimiento</th>
                     <th>Tipo de documento</th>
                     <th>Numero de documento</th>
                     <th>Email</th>
                     <th>Password</th>
                     <th>Rol</th>
                     <th>Created</th>
                     <th>Updated</th>
                     <th></th>
                     <th></th>
                 </tr>
             </thead>
             <tbody>

             </tbody>
          </table>
        </div>
      </div>



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ACTUALIZAR USUARIO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ action('UsuarioController@update', $id) }}" aria-label="{{ __('Usuario') }}">
                @csrf
                <input type="hidden" name="_method" value="PATCH"/>
                <div class="form-group row">
                    <div class="col-md-6">
                      <label for="nombre" class="">{{ __('Nombre') }}</label>
        <input id="nombre" type="text" class="form-control" name="nombre" value="{{ $usuarios->nombre }}" required autofocus>

                    </div>
                    <div class="col-md-6">
                      <label for="apellido" class="">{{ __('Apellido') }}</label>
        <input id="apellido" type="text" class="form-control" name="apellido" value="{{ $usuarios->apellido }}" required autofocus>
                    </div>
              </div>
            <div class="form-group row">
                  <div class="col-md-6">
                    <label for="fecha_nacimiento" class="">{{ __('Fecha de nacimiento') }}</label>
        <input id="fecha_nacimiento" type="date" class="form-control" name="fecha_nacimiento" value="{{ $usuarios->fecha_nacimiento }}" required autofocus>
                  </div>
                  <div class="col-md-6">
                    <label for="tipo_identificacion" class="">{{ __('Tipo de documento') }}</label>
        <input id="tipo_identificacion" type="text" class="form-control" name="tipo_identificacion" value="{{ $usuarios->tipo_identificacion}}" required autofocus>
                  </div>
            </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="numero_identificacion" class="">{{ __('Numero de documento') }}</label>
        <input id="numero_identificacion" type="text" class="form-control" name="numero_identificacion" value="{{ $usuarios->numero_identificacion }}" required autofocus>
                    </div>
                    <div class="col-md-6">
                        <label for="direccion" class="">{{ __('Direccion') }}</label>
        <input id="direccion" type="text" class="form-control{{ $errors->has('direccion') ? ' is-invalid' : '' }}" name="direccion" value="{{ $usuarios->direccion }}" required autofocus>
                @if ($errors->has('direccion'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('direccion') }}</strong>
                    </span>
                @endif
                    </div>
                      <div class="col-md-6">
                        <label for="email" class="">{{ __('Correo electrónico') }}</label>
        <input id="email" type="email" class="form-control" name="email" value="{{ $usuarios->email }}" required>
                      </div>
                </div>
                <div class="form-group row">
                      <div class="col-md-6">
                        <label for="password" class="">{{ __('Contraseña') }}</label>
        <input id="password" type="password" class="form-control" value="{{ $usuarios->password }}" name="password" required>
                      </div>

                        <div class="col-md-6">
                          <label for="rol_id" class="">{{ __('Rol') }}</label>
                          <input id="rol_id" type="number" class="form-control" value="{{ $usuarios->rol_id }}" name="rol_id">
                        </div>
                  </div>
                    <div class="form-group row mb-0">
                        <div class="col">
            <button type="submit" class="btn btn-primary">
                {{ __('Register') }}
            </button>
                        </div>
                    </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



</body>
</html>
@endsection
