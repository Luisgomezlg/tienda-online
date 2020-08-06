@extends('layouts.app3')
@section('cat')
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categorias</title>

</head>

<style media="screen">



</style>

    <body>

      <div class="contenido">
        <div class="boton">
          <button type="button" class="btn btn-info rounded-0" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Registrar categorias</button>
        </div>

        <div class="table-responsive-sm">
        <table class="table">
          <thead>
               <tr>
                   <th>Numero id</th>
                   <th>Nombre</th>
                   <th>Descripcion</th>
                   <th>Created</th>
                   <th>Updated</th>
                   <th></th>
                   <th></th>
               </tr>
           </thead>
           <tbody>
               @foreach($categorias as $categoria)
               <tr>
                   <td>{{ $categoria['cat_id'] }}</td>
                   <td>{{ $categoria['cat_nombre'] }}</td>
                   <td>{{ $categoria['cat_descripcion'] }}</td>
                   <td>{{ $categoria['created_at'] }}</td>
                   <td>{{ $categoria['updated_at'] }}</td>
                   <td align = "right">
                     <a href="{{ action('CategoriaController@edit', $categoria->cat_id) }}" class = 'btn btn-warning'>Edit</a>
                 </td>
                   <td align="left">
                       <form method="post" action="{{ action('CategoriaController@destroy', $categoria->cat_id) }}">
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



<div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-0">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">AGREGAR CATEGORIA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
        <form method="POST" action="{{ url('categorias') }}" aria-label="{{ __('Usuario') }}">
                @csrf
                <div class="form-group row">
                    <div class="col-md-6">
                      <label for="cat_nombre" class="">{{ __('Nombre') }}</label>
        <input id="cat_nombre" type="text" class="form-control{{ $errors->has('cat_nombre') ? ' is-invalid' : '' }} rounded-0" name="cat_nombre" value="{{ old('cat_nombre') }}" required autofocus>
                @if ($errors->has('cat_nombre'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('cat_nombre') }}</strong>
                    </span>
                @endif
                    </div>
                    <div class="col-md-6">
                      <label for="cat_descripcion" class="">{{ __('Descripcion') }}</label>
        <input id="cat_descripcion" type="text" class="form-control{{ $errors->has('cat_descripcion') ? ' is-invalid' : '' }} rounded-0" name="cat_descripcion" value="{{ old('cat_descripcion') }}" required autofocus>
                @if ($errors->has('cat_descripcion'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('cat_descripcion') }}</strong>
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
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

</body>
@endsection
