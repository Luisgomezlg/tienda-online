@extends('layouts.app3')
@section('pro-edit')
      <div class="contenido">
        <div class="boton">
          <button type="button" class="btn btn-success rounded-0" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Actualizar productos</button>
        </div>
        <div class="table-responsive-sm ">
        <table class="table">
          <thead class="table-dark">
               <tr>
                   <th>Numero id</th>
                   <th>Nombre</th>
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
      
           </tbody>
        </table>
        </div>
      </div>



<div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-0">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ACTUALIZAR PRODUCTOS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
        <form method="POST" action="{{ action('ProductoController@update', $pro_id) }}" aria-label="{{ __('Producto') }}">
                @csrf
          <input type="hidden" name="_method" value="PATCH"/>
                <div class="form-group row">
                    <div class="col-md-6">
                      <label for="pro_nombre" class="">{{ __('Nombre') }}</label>
        <input id="pro_nombre" type="text" class="form-control rounded-0" name="pro_nombre" value="{{ $productos->pro_nombre }}" required autofocus>

                    </div>
                    <div class="col-md-6">
                      <label for="pro_descripcion" class="">{{ __('pro_descripcion') }}</label>
        <input id="pro_descripcion" type="text" class="form-control rounded-0" name="pro_descripcion" value="{{  $productos->pro_descripcion}}" required autofocus>

                    </div>
              </div>
                <div class="form-group row">
              <div class="col-md-6">
                <label for="pro_talla" class="">{{ __('talla') }}</label>
    <input id="pro_talla" type="text" class="form-control rounded-0" name="pro_talla" value="{{  $productos->pro_talla}}" required autofocus>

              </div>
                  <div class="col-md-6">
                    <label for="pro_fecha" class="">{{ __('fecha') }}</label>
        <input id="pro_fecha" type="date" class="form-control rounded-0" name="pro_fecha" value="{{  $productos->pro_fecha}}" required autofocus>

                  </div>
            </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="pro_colores" class="">{{ __('color') }}</label>
        <input id="pro_colores" type="text" class="form-control rounded-0" name="pro_colores" value="{{  $productos->pro_colores }}" required autofocus>

                    </div>
                    <div class="col-md-6">
                        <label for="pro_estilo" class="">{{ __('Estilo') }}</label>
        <input id="pro_estilo" type="text" class="form-control rounded-0" name="pro_estilo" value="{{ $productos->pro_estilo}}" required autofocus>

                    </div>
                      <div class="col-md-6">
                        <label for="pro_precio" class="">{{ __('Precio') }}</label>
        <input id="pro_precio" type="text" class="form-control rounded-0" name="pro_precio" value="{{  $productos->pro_precio }}" required>

                      </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="pro_iva" class="">{{ __('Iva') }}</label>
        <input id="pro_iva" type="text" class="form-control rounded-0" name="pro_iva" value="{{  $productos->pro_iva }}" required autofocus>

                    </div>
                    <div class="col-md-6">
                      <label for="lin_id" class="">{{ __('Linea') }}</label>
                      <select value="{{$productos->lin_id}}" class="form-control rounded-0" name="lin_id">
                          <option value="{{$productos->lin_id}}">{{$productos->lin_id}}</option>
                      </select>

                    </div>
                      <div class="col-md-6">
                        <label for="cat_id" class="">{{ __('Categoria') }}</label>
                        <select class="form-control rounded-0" name="cat_id" value="{{$productos->cat_id}}">
                            <option value="{{$productos->cat_id}}">{{$productos->cat_id}}</option>
                        </select>

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
        <button type="button" class="btn btn-darger rounded-0" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>



</body>
@endsection
