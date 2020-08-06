@extends('layouts.app3')
@section('fot-edit')
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Actualizar fotos</title>
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
                <th>Imagen 1</th>
                <th>Imagen 2</th>
                <th>producto</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($foto as $fotos)
            <tr>
                <td>{{ $fotos->fot_id }}</td>
                <td><img src="{{Storage::url($fotos->fot_ruta)}}" width="350" alt=""></td>
                <td><img src="{{Storage::url($fotos->fot_ruta2)}}" width="350" alt=""></td>
                <td>{{ $fotos->pro_id }}</td>
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
        <h5 class="modal-title" id="exampleModalLabel">ACTUALIZAR EVENTO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ action('FotoController@update', $fot_id) }}" aria-label="{{ __('Foto') }}" enctype="multipart/form-data">
          @csrf
            <input type="hidden" name="_method" value="PATCH"/>
          <div class="form-group row">
              <div class="col-md-6">
                <label for="fot_ruta" class="">{{ __('Primera imagen') }}</label>
  <input id="fot_ruta" type="file" class="form-control{{ $errors->has('fot_ruta') ? ' is-invalid' : '' }}" name="fot_ruta" value="{{ $fotos->fot_ruta}}" required autofocus>
          @if ($errors->has('fot_ruta'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('fot_ruta') }}</strong>
              </span>
          @endif
              </div>
              <div class="col-md-6">
                <label for="fot_ruta2" class="">{{ __('Segunda imagen') }}</label>
  <input id="fot_ruta2" type="file" class="form-control{{ $errors->has('fot_ruta2') ? ' is-invalid' : '' }}" name="fot_ruta2" value="{{ $fotos->fot_ruta2}}" required autofocus>
          @if ($errors->has('fot_ruta2'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('fot_ruta2') }}</strong>
              </span>
          @endif
              </div>
        </div>
          <div class="form-group row">
            <div class="col-md-6">
              <label for="pro_id" class="">{{ __('Producto') }}</label>
              <select class="form-control{{ $errors->has('pro_id') ? ' is-invalid' : '' }} rounded-0"name="pro_id">
                  <option value="{{ $fotos->pro_id}}">{{ $fotos->pro_id}}</option>
              </select>
        @if ($errors->has('pro_id'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('pro_id') }}</strong>
            </span>
        @endif
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
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>
@endsection
