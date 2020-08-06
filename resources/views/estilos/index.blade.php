@extends('layouts.app3')
@section('est')

      <div class="tabla1 contenido">
        <div class="boton">
          <button type="button" class="btn btn-info rounded-0" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Registrar estilo</button>
        </div>
        <div class="table-responsive-sm">
        <table class="table">
          <thead>
               <tr>
                   <th>Numero id</th>
                   <th>Nombre</th>
                   <th>Categoria</th>
                   <th>Created</th>
                   <th>Updated</th>
                   <th></th>
                   <th></th>
               </tr>
           </thead>
           <tbody>
               @foreach($estilos as $est)
               <tr>
                   <td>{{ $est['est_id'] }}</td>
                   <td>{{ $est['est_nombre'] }}</td>
                   <td>{{ $est['cat_id'] }}</td>
                   <td>{{ $est['created_at'] }}</td>
                   <td>{{ $est['updated_at'] }}</td>
                     <td align = "right">
                       <a href="{{ action('EstiloController@edit', $est->est_id) }}" class = 'btn btn-warning'>Edit</a>
                   </td>
                   <td align="left">
                       <form method="post" action="{{ action('EstiloController@destroy', $est->est_id) }}">
                           @csrf
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
        <h5 class="modal-title" id="exampleModalLabel">AGREGAR ESTILO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
        <form method="POST" action="{{ url('estilos') }}" aria-label="{{ __('Estilo') }}">
                @csrf
                <div class="form-group row">
                    <div class="col-md-6">
                      <label for="est_nombre" class="">{{ __('Nombre') }}</label>
        <input id="lin_nombre" type="text" class="form-control{{ $errors->has('est_nombre') ? ' is-invalid' : '' }} rounded-0" name="est_nombre" value="{{ old('est_nombre') }}" required autofocus>
                @if ($errors->has('est_nombre'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('est_nombre') }}</strong>
                    </span>
                @endif
                    </div>
                    <div class="col-md-6">
                      <label for="cat_id" class="">{{ __('Categoria') }}</label>
                      <select class="form-control{{ $errors->has('cat_id') ? ' is-invalid' : '' }} rounded-0" name="cat_id">
                        @foreach ($categorias as $categoria)
                          <option value="{{$categoria->cat_id}}">{{$categoria->cat_nombre}}</option>
                          @endforeach
                      </select>
                @if ($errors->has('cat_id'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('cat_id') }}</strong>
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
