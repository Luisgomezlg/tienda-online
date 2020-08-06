@extends('layouts.app')
@section('cart')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Legado - Detalles de la compra</title>
  </head>
  <style media="screen">
    .datos{
      margin-top: 10%;
      margin-bottom: 10%;
    }
    .datos .page-header{
      margin-bottom: 5%;
    }
    .vaciar-carrito{
      margin-bottom: 1%;
      height: 40px;
    }
    .datos .vaciar-carrito a  button{
      background: #fff;
      color: #000;
      border-color: #808080;
      font-size: 13px;
      text-transform: uppercase;

    }
    .vaciar-carrito .btn:hover{
      background: #000;
      color: #fff;
      border-color: #000;
      transition: .5s ease-in-out;
    }
    .vaciar-carrito2 .btn:hover{
      background: #066EF6;
      color: #fff;
      border-color: #066EF6;
      transition: .5s ease-in-out;
    }
    .vaciar-carrito a{
      color: #000;
      text-decoration: none;
    }
    .botones .vaciar-carrito{
      display: inline-block;
    }
    .datos .thead-dark th{
       background:#000;
       border: none;
    }
  </style>
  <body>
    <div class="datos container">
        <div class="container text-center">
		<div class="page-header">
		  <h1><i class=""></i>Tus datos del pedido</h1>
		</div>
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Numero de identificación</th>
            <th scope="col">Email</th>
            <th scope="col">Dirección</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{Auth::user()->nombre . " " . Auth::user()->apellido }}</td>
            <td>{{Auth::user()->numero_identificacion }}</td>
            <td>{{Auth::user()->email }}</td>
            <td>{{Auth::user()->direccion }}</td>
          </tr>
        </tbody>
      </table>
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Producto</th>
            <th scope="col">Precio</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Subtotal</th>
          </tr>

        </thead>
        <tbody>
          @foreach($cart as $item)
            <tr>
              <td>{{ $item->pro_nombre }}</td>
              <td>${{ number_format($item->pro_precio, 0) }}</td>
              <td>{{ $item->quantity }}</td>
              <td>${{ number_format($item->pro_precio * $item->quantity,0) }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
      <h3>
        <span class="label label-success">
          Total: ${{ number_format($total,0) }}
        </span>
      </h3>
      <div class="botones">

        <div class="vaciar-carrito">
          <a href="{{ route('home') }}"><button type="button" class="btn btn-lg rounded-0" name="button">
          <i class="fa fa-chevron-circle-left"></i> Seguir comprando</button>
          </a>
        </div>
        <div class="vaciar-carrito">
          <div class="vaciar-carrito2">
            <a href="{{ route('payment') }}"><button type="button" class="btn btn-lg  rounded-0" name="button">
            <i class="fa fa-chevron-circle-left"></i> Pagar con paypal <i class="fa fa-paypal"></i></button>
            </a>
          </div>
        </div>
      </div>

	</div>
    </div>
  </body>
</html>
@endsection
