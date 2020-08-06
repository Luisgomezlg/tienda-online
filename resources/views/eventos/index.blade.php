@extends('layouts.app3')
@section('eve')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Eventos</title>
  </head>
  <body>

      <div class="contenido">
        <div class="boton">
          <button type="button" class="btn btn-info rounded-0" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Registrar eventos</button>
        </div>
        <div class="table-responsive-sm">
        <table class="table">
          <thead>
            <tr>
                <th>Numero id</th>
                <th>Descripcion</th>
                <th>Titulo</th>
                <th>Imagen</th>
                <th>Fecha</th>
                <th>nombre del usuario</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($eventos as $evento)
            <tr>
                <td>{{ $evento->eve_id }}</td>
                <td>{{ $evento->eve_descripcion }}</td>
                <td>{{ $evento->titulo }}</td>
                <td><img src="{{Storage::url($evento->eve_link_img)}}" width="350" alt=""></td>
                <td>{{ $evento->eve_fecha }}</td>
                <td>{{ $evento->nombre }}</td>

                  <td align = "right">
                    <a href="{{ action('EventoController@edit', $evento->eve_id) }}" class = 'btn btn-warning'>Edit</a>
                </td>
                <td align="left">
                    <form method="post" action="{{ action('EventoController@destroy', $evento->eve_id) }}">
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
        <h5 class="modal-title" id="exampleModalLabel">AGREGAR EVENTO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ url('eventos') }}" aria-label="{{ __('Evento') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <div class="col-md-6">
                      <label for="eve_descripcion" class="">{{ __('eve_descripcion') }}</label>
        <input id="eve_descripcion" type="text" class="form-control{{ $errors->has('eve_descripcion') ? ' is-invalid' : '' }}" name="eve_descripcion" value="{{ old('eve_descripcion') }}" required autofocus>
                @if ($errors->has('eve_descripcion'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('eve_descripcion') }}</strong>
                    </span>
                @endif
                    </div>
                    <div class="col-md-6">
                      <label for="titulo" class="">{{ __('titulo') }}</label>
        <input id="titulo" type="text" class="form-control{{ $errors->has('titulo') ? ' is-invalid' : '' }}" name="titulo" value="{{ old('titulo') }}" required autofocus>
                @if ($errors->has('titulo'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('titulo') }}</strong>
                    </span>
                @endif
                    </div>
              </div>
            <div class="form-group row">
                  <div class="col-md-6">
                    <label for="eve_link_img" class="">{{ __('eve_link_img') }}</label>
        <input id="eve_link_img" type="file" class="form-control{{ $errors->has('eve_link_img') ? ' is-invalid' : '' }}" name="eve_link_img" value="{{ old('eve_link_img') }}" required autofocus>
                @if ($errors->has('eve_link_img'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('eve_link_img') }}</strong>
                    </span>
                @endif
                  </div>

                  <div class="col-md-6">
                    <label for="eve_fecha" class="">{{ __('Fecha') }}</label>
        <input id="eve_fecha" type="date" class="form-control{{ $errors->has('eve_fecha') ? ' is-invalid' : '' }}" name="eve_fecha" value="{{ old('eve_fecha') }}" required autofocus>
                @if ($errors->has('eve_fecha'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('eve_fecha') }}</strong>
                    </span>
                @endif
                  </div>
            </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="users_id" class="">{{ __('users_id') }}</label>
        <input id="users_id" type="text" class="form-control{{ $errors->has('users_id') ? ' is-invalid' : '' }}" name="users_id" value="{{ old('users_id') }}" required autofocus>
                @if ($errors->has('users_id'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('users_id') }}</strong>
                    </span>
                @endif
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
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>
@endsection
