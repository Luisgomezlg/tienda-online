@extends('layouts.app3')
@section('pro')
      <div class="contenido">
        <div class="boton">
          <button type="button" class="btn btn-success rounded-0" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Registrar productos</button>
        </div>
        <div class="table-responsive-sm ">
        <table class="table">
          <thead class="table-dark">
               <tr>
                   <th>Numero id</th>
                   <th>Nombre</th>
                   <th>Slug</th>
                   <th>Descripcion</th>
                   <th>Talla</th>
                   <th>Fecha</th>
                   <th>Color</th>
                   <th>Estilo</th>
                   <th>Precio</th>
                   <th>Iva</th>
                   <th>Linea</th>
                   <th>Categoria</th>
                   <th>Created</th>
                   <th>Updated</th>
                   <th></th>
                   <th></th>
               </tr>
           </thead>
           <tbody>
               @foreach($products as $producto)
               <tr>
                   <td>{{ $producto['pro_id'] }}</td>
                   <td>{{ $producto['pro_nombre'] }}</td>
                   <td>{{ $producto['slug'] }}</td>
                   <td>{{ $producto['pro_descripcion'] }}</td>
                   <td>{{ $producto['pro_talla'] }}</td>
                   <td>{{ $producto['pro_fecha'] }}</td>
                   <td>{{ $producto['col_id'] }}</td>
                   <td>{{ $producto['est_id'] }}</td>
                   <td>{{ $producto['pro_precio'] }}</td>
                   <td>{{ $producto['pro_iva'] }}</td>
                   <td>{{ $producto['lin_id'] }}</td>
                   <td>{{ $producto['cat_id'] }}</td>
                   <td>{{ $producto['created_at'] }}</td>
                   <td>{{ $producto['updated_at'] }}</td>
                     <td align = "right">
                       <a href="{{ action('ProductoController@edit', $producto->pro_id) }}" class = 'btn btn-warning'>Edit</a>
                   </td>
                   <td align="left">
                       <form method="post" action="{{ action('ProductoController@destroy', $producto->pro_id) }}">
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
        <h5 class="modal-title" id="exampleModalLabel">AGREGAR PRODUCTOS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
        <form method="POST" action="{{ url('productos') }}" aria-label="{{ __('Usuario') }}">
                @csrf
                <div class="form-group row">
                    <div class="col-md-6">
                      <label for="pro_nombre" class="">{{ __('Nombre') }}</label>
        <input id="pro_nombre" type="text" class="form-control{{ $errors->has('pro_nombre') ? ' is-invalid' : '' }} rounded-0" name="pro_nombre" value="{{ old('pro_nombre') }}" required autofocus>
                @if ($errors->has('pro_nombre'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('pro_nombre') }}</strong>
                    </span>
                @endif
                    </div>
                    <div class="col-md-6">
                      <label for="slug" class="">{{ __('Slug') }}</label>
        <input id="slug" type="text" class="form-control{{ $errors->has('slug') ? ' is-invalid' : '' }} rounded-0" name="slug" value="{{ old('slug') }}" required autofocus>
                @if ($errors->has('slug'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('slug') }}</strong>
                    </span>
                @endif
                    </div>
                    <div class="col-md-6">
                      <label for="pro_descripcion" class="">{{ __('pro_descripcion') }}</label>
        <input id="pro_descripcion" type="text" class="form-control{{ $errors->has('pro_descripcion') ? ' is-invalid' : '' }} rounded-0" name="pro_descripcion" value="{{ old('pro_descripcion') }}" required autofocus>
                @if ($errors->has('pro_descripcion'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('pro_descripcion') }}</strong>
                    </span>
                @endif
                    </div>
              </div>
                <div class="form-group row">
              <div class="col-md-6">
                <label for="pro_talla" class="">{{ __('talla') }}</label>
    <input id="pro_talla" type="text" class="form-control{{ $errors->has('pro_talla') ? ' is-invalid' : '' }} rounded-0" name="pro_talla" value="{{ old('pro_talla') }}" required autofocus>
            @if ($errors->has('pro_talla'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('pro_talla') }}</strong>
                </span>
            @endif
              </div>
                  <div class="col-md-6">
                    <label for="pro_fecha" class="">{{ __('fecha') }}</label>
        <input id="pro_fecha" type="date" class="form-control{{ $errors->has('pro_fecha') ? ' is-invalid' : '' }} rounded-0" name="pro_fecha" value="{{ old('pro_fecha') }}" required autofocus>
                @if ($errors->has('pro_fecha'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('pro_fecha') }}</strong>
                    </span>
                @endif
                  </div>
            </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="col_id" class="">{{ __('Color') }}</label>
                        <select class="form-control{{ $errors->has('col_id') ? ' is-invalid' : '' }} rounded-0" name="col_id">
                          @foreach ($colores as $col)
                            <option value="{{$col->col_id}}">{{$col->col_nombre}}</option>
                            @endforeach
                        </select>
                @if ($errors->has('col_id'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('col_id') }}</strong>
                    </span>
                @endif
                    </div>
                    <div class="col-md-6">
                        <label for="est_id" class="">{{ __('Estilo') }}</label>
                        <select class="form-control{{ $errors->has('est_id') ? ' is-invalid' : '' }} rounded-0" name="est_id">
                          @foreach ($estilos as $est)
                            <option value="{{$est->est_id}}">{{$est->est_nombre}}</option>
                            @endforeach
                        </select>
                @if ($errors->has('est_id'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('est_id') }}</strong>
                    </span>
                @endif
                    </div>
                      <div class="col-md-6">
                        <label for="pro_precio" class="">{{ __('Precio') }}</label>
        <input id="pro_precio" type="pro_precio" class="form-control{{ $errors->has('pro_precio') ? ' is-invalid' : '' }} rounded-0" name="pro_precio" value="{{ old('pro_precio') }}" required>
                @if ($errors->has('pro_precio'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('pro_precio') }}</strong>
                    </span>
                @endif
                      </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="pro_iva" class="">{{ __('Iva') }}</label>
        <input id="pro_iva" type="text" class="form-control{{ $errors->has('pro_iva') ? ' is-invalid' : '' }} rounded-0" name="pro_iva" value="{{ old('pro_iva') }}" required autofocus>
                @if ($errors->has('pro_iva'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('pro_iva') }}</strong>
                    </span>
                @endif
                    </div>
                    <div class="col-md-6">
                      <label for="lin_id" class="">{{ __('Linea') }}</label>
                      <select class="form-control{{ $errors->has('lin_descripcion') ? ' is-invalid' : '' }} rounded-0" name="lin_id">
                        @foreach ($lineas as $linea)
                          <option value="{{$linea->lin_id}}">{{$linea->lin_nombre}}</option>
                          @endforeach
                      </select>
                @if ($errors->has('lin_id'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('lin_id') }}</strong>
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
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>


</body>
@endsection
