@extends('layouts.app3')
@section('usu')
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Usuarios</title>
  </head>
  <body>
      <div class="contenido">
        <div class="boton">
          <button type="button" class="btn btn-info rounded-0" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Registrar usuarios</button>
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
                     <th>Direccion</th>
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
                 @foreach($usuarios as $usuario)
                 <tr>
                     <td>{{ $usuario['id'] }}</td>
                     <td>{{ $usuario['nombre'] }}</td>
                     <td>{{ $usuario['apellido'] }}</td>
                     <td>{{ $usuario['fecha_nacimiento'] }}</td>
                     <td>{{ $usuario['tipo_identificacion'] }}</td>
                     <td>{{ $usuario['numero_identificacion'] }}</td>
                     <td>{{ $usuario['direccion'] }}</td>
                     <td>{{ $usuario['email'] }}</td>
                     <td>{{ $usuario['password'] }}</td>
                     <td>{{ $usuario['rol_id'] }}</td>
                     <td>{{ $usuario['created_at'] }}</td>
                     <td>{{ $usuario['updated_at'] }}</td>
                       <td align = "right">
                         <a href="{{ action('UsuarioController@edit', $usuario->id) }}" class = 'btn btn-warning'>Edit</a>
                     </td>
                     <td align="left">
                         <form method="post" action="{{ action('UsuarioController@destroy', $usuario->id) }}">
                             {{ csrf_field() }}
                             <input type="hidden" name="_method" value="DELETE"/>
                             <button type="submit" class="btn btn-danger">Delete</button>
                         </form>
                     </td>
                 </tr>
                 @endforeach
             </tbody>
          </table>
        </div>
      </div>



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar usuarios</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ url('usuarios') }}" aria-label="{{ __('Usuario') }}">
                @csrf
                <div class="form-group row">
                    <div class="col-md-6">
                      <label for="nombre" class="">{{ __('Nombre') }}</label>
        <input id="nombre" type="text" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" name="nombre" value="{{ old('nombre') }}" required autofocus>
                @if ($errors->has('nombre'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('nombre') }}</strong>
                    </span>
                @endif
                    </div>
                    <div class="col-md-6">
                      <label for="apellido" class="">{{ __('Apellido') }}</label>
        <input id="apellido" type="text" class="form-control{{ $errors->has('apellido') ? ' is-invalid' : '' }}" name="apellido" value="{{ old('apellido') }}" required autofocus>
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
        <input id="fecha_nacimiento" type="date" class="form-control{{ $errors->has('fecha_nacimiento') ? ' is-invalid' : '' }}" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" required autofocus>
                @if ($errors->has('fecha_nacimiento'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('fecha_nacimiento') }}</strong>
                    </span>
                @endif
                  </div>
                  <div class="col-md-6">
                    <label for="tipo_identificacion" class="">{{ __('Tipo de documento') }}</label>
        <input id="tipo_identificacion" type="text" class="form-control{{ $errors->has('tipo_identificacion') ? ' is-invalid' : '' }}" name="tipo_identificacion" value="{{ old('tipo_identificacion') }}" required autofocus>
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
        <input id="numero_identificacion" type="text" class="form-control{{ $errors->has('numero_identificacion') ? ' is-invalid' : '' }}" name="numero_identificacion" value="{{ old('numero_identificacion') }}" required autofocus>
                @if ($errors->has('numero_identificacion'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('numero_identificacion') }}</strong>
                    </span>
                @endif
                    </div>
                    <div class="col-md-6">
                        <label for="direccion" class="">{{ __('Direccion') }}</label>
        <input id="direccion" type="text" class="form-control{{ $errors->has('direccion') ? ' is-invalid' : '' }}" name="direccion" value="{{ old('direccion') }}" required autofocus>
                @if ($errors->has('direccion'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('direccion') }}</strong>
                    </span>
                @endif
                    </div>
                      <div class="col-md-6">
                        <label for="email" class="">{{ __('Correo electrónico') }}</label>
        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
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
      <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
              @if ($errors->has('password'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
                      </div>

                        <div class="col-md-6">
                          <label for="rol_id" class="">{{ __('Rol') }}</label>
                          <select id="rol_id" size="1" class="form-control{{ $errors->has('rol_id') ? ' is-invalid' : '' }}" name="rol_id" required>
                          @foreach($roles as $usu)
                          <option value="{{$usu->rol_id}}">{{$usu->rol_nombre}}</option>
                          @endforeach
                            </select>
                @if ($errors->has('rol_id'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('rol_id') }}</strong>
                    </span>
                @endif
                        </div>
                  </div>
                    <div class="form-group row mb-0">
                        <div class="col">
            <button type="submit" class="btn btn-primary rounded-0">
                {{ __('Register') }}
            </button>
                        </div>
                    </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger rounded-0" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>
@endsection
