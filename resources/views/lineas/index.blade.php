@extends('layouts.app3')
@section('lin')

      <div class="tabla1 contenido">
        <div class="boton">
          <button type="button" class="btn btn-info rounded-0" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Registrar lineas</button>
        </div>
        <div class="table-responsive-sm">
        <table class="table">
          <thead>
               <tr>
                   <th>Numero id</th>
                   <th>Nombre</th>
                   <th>Descripcion</th>
                   <th>Categoria</th>
                   <th>Created</th>
                   <th>Updated</th>
                   <th></th>
                   <th></th>
               </tr>
           </thead>
           <tbody>
               @foreach($lineas as $linea)
               <tr>
                   <td>{{ $linea['lin_id'] }}</td>
                   <td>{{ $linea['lin_nombre'] }}</td>
                   <td>{{ $linea['lin_descripcion'] }}</td>
                   <td>{{ $linea['cat_id'] }}</td>
                   <td>{{ $linea['created_at'] }}</td>
                   <td>{{ $linea['updated_at'] }}</td>
                     <td align = "right">
                       <a href="{{ action('LineaController@edit', $linea->lin_id) }}" class = 'btn btn-warning'>Edit</a>
                   </td>
                   <td align="left">
                       <form method="post" action="{{ action('LineaController@destroy', $linea->lin_id) }}">
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
        <h5 class="modal-title" id="exampleModalLabel">AGREGAR LINEA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
        <form method="POST" action="{{ url('lineas') }}" aria-label="{{ __('Usuario') }}">
                @csrf
                <div class="form-group row">
                    <div class="col-md-6">
                      <label for="lin_nombre" class="">{{ __('Nombre') }}</label>
        <input id="lin_nombre" type="text" class="form-control{{ $errors->has('lin_nombre') ? ' is-invalid' : '' }} rounded-0" name="lin_nombre" value="{{ old('lin_nombre') }}" required autofocus>
                @if ($errors->has('lin_nombre'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('lin_nombre') }}</strong>
                    </span>
                @endif
                    </div>
                    <div class="col-md-6">
                      <label for="lin_descripcion" class="">{{ __('Descripcion') }}</label>
        <input id="lin_descripcion" type="text" class="form-control{{ $errors->has('lin_descripcion') ? ' is-invalid' : '' }} rounded-0" name="lin_descripcion" value="{{ old('lin_descripcion') }}" required autofocus>
                @if ($errors->has('lin_descripcion'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('lin_descripcion') }}</strong>
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
