@extends('layouts.app')
@section('cart')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Legado - Carrito de compras</title>
  </head>
  <script type="text/javascript">
        $(document).ready(function () {

          $(".btn-update-item").on('click',function(e){
              e.preventDefault();

              var id=$(this).data('id');
              var href=$(this).data('href');
              var cantidad=$('#producto_' + id).val();

              window.location.href = href +"/"+ cantidad;
          });
        });
  </script>
  <style media="screen">
    .carrito{
            margin-top: 10%;
      margin-bottom: 5%;
    }
    .vaciar-carrito{
      margin-bottom: 1%;
    }
    .carrito .vaciar-carrito a li {
      background: #fff;
      color: #000;
      font-size: 13px;
      height: 40px;
      text-transform: uppercase;
      border-color: #808080;
    }
    .carrito a .btn:hover{
      background: #000;
      color: #fff;
      border-color: #000;
      transition: .5s ease-in-out;
    }
    .vaciar-carrito a{
      color: #000;
      text-decoration: none;
    }
  </style>
  <body>
    <div class="container carrito">
      <div class="page-header">
        <div class="container text-center">
		<div class="d-flex justify-content-star page-header">
		  <h3><i class="fa fa-shopping-cart"></i> Carrito de compras</h3>
		</div>

		<div class="table-cart">
			@if(count($cart))
            <div class="form-group row col-md-5">
      <div class="vaciar-carrito">
        <a href="{{ route('cart-trash') }}"><li class="btn list-group-item border-0" type="button"
        style="width:100%;" name="button">	Vaciar carrito  <i class="fa fa-trash"></i></li></a>
      </div>
            </div>

			<div class="table-responsive">
				<table class="table table-striped table-hover table-bordered">
					<thead class="" style="background:#000;">
						<tr>
							<th class="text-light">Producto</th>
							<th class="text-light">Precio</th>
							<th class="text-light">Cantidad</th>
              <th class="text-light">Talla</th>
							<th class="text-light">Subtotal</th>
							<th class="text-light">Quitar</th>
						</tr>
					</thead>
					<tbody>
						@foreach($cart as $item)
							<tr>
								<td>{{ $item->pro_nombre }}</td>
								<td>${{ number_format($item->pro_precio,0) }}</td>
								<td>
									<input
										type="number"
										min="1"
										max="100"
										value="{{ $item->quantity }}"
										id="producto_{{ $item->pro_id}}"
									>
									<a
										href="#"
										class="btn btn-outline-primary btn-update-item rounded-0"
										data-href="{{ route('cart-update', $item->slug) }}"
										data-id = "{{ $item->pro_id }}"
									>
										<i class="fa fa-refresh"></i>
									</a>
								</td>
                <td><select class="form-control col-md-12 rounded-0">
                <option value="">S</option>
                <option value="">M</option>
                <option value="">L</option>
              </select>
              </td>
								<td>${{ number_format($item->pro_precio * $item->quantity,0) }}</td>
								<td>
									<a href="{{ route('cart-delete', $item->slug) }}" class="btn btn-outline-danger rounded-0">
										<i class="fa fa-remove"></i>
									</a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table><hr>

				<h3>
					<span class="label label-success">
						Total: ${{ number_format($total,0) }}
					</span>
				</h3>

			</div>
			@else
				<h6><span class="label label-warning d-flex justify-content-star">No hay productos en el carrito :(</span></h6>
			@endif
			<hr>
      <div class="form-group row col-md-5">
        <div class="vaciar-carrito">
          <a href="javascript:history.back();"><li class="btn list-group-item border-0" type="button"
          style="width:100%;" name="button"><i class="fa fa-chevron-circle-left"></i> Seguir comprando</li></a>
        </div>
                @if(count($cart))
                <div class="vaciar-carrito">
                  <a class="" href="{{ route('order-detail') }}"><li class="btn list-group-item border-0" type="button"
                  style="width:100%;" name="button">Continuar con la compra <i class="fa fa-chevron-circle-right"></i></li></a>
                </div>
          @else
            <h6><span class="label label-warning d-flex justify-content-star">Agrega un producto para hacer una compra :)</span></h6>
          @endif
      </div>

		</div>

	</div>
      </div>
    </div>
  </body>
</html>
@endsection
