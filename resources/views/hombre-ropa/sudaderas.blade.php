@extends('layouts.app')
@section('sudaderas')
@include('hombre-ropa.ourJs')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Legado - Sudaderas hombre</title>

</head>
  <style media="screen">
    .contenido2 {
      float: left;
        margin-top: 4%;
      }
      .product{
        margin-left: 5%;
      }
      .product .card{
        margin-right: 3%;
        margin-bottom: 3%;
      }
      .contenido2 a{
        color: #000;
        }
      .contenido2 .card{
        width: 12rem;
        margin-top: 3%;
        line-height: 85%;
        }
            @media (max-width: 608px ) {
              .contenido1{
                margin: 1%;
              }
              .contenido1 .card{
                  width: calc(70% / 2);
                  margin-right: 10%;
          }
          .contenido1 .card img{
                margin-top: 20%;
                width: calc(120% / 2);
        }
        .main{
          margin-top: 5%;
        }
    }

      @media (max-width: 408px ) {
        .contenido1 {
        margin-top: 4%;
        margin-left: 1%;
        display: block;
        }

        .contenido1 .card{
          margin-top: 20%;
            width: calc(80% / 2);
        }
        .contenido1 .card img{
          margin-top: 20%;
          width: calc(80% / 2);
        }
        .contenido1 .card-body{
          margin-top: -90%;
        }
        .contenido2 .card{
        display: none;
          }
          .card-title{
            font-size: 12px;
          }
          .card-text{
            font-size: 13px;
          }
      }
          .precio-range{
            margin-top: 25%;
            width: 62%;
          }
          .hombre-ropa{
            margin-top: 7%;
            margin-bottom: 5%;
          }
          .combo{
            margin-bottom: 5%;
          }
          .product a{
            text-decoration: none;
          }
          .main select{
            border-color: #DCDCDC;
          }

  </style>

  <body>
  <div class="hombre-ropa">
  <h1 class="text-center">HOMBRE SUDADERAS</h1>
  </div>
  <div class="combo container">
    @if(count($producto)!="0")
       <div class="row">
           <div class="col-xs-6 col-sm-3">
             <div class="main">
               <select id="catID" class="btn form-control rounded-0">
                 <div class="dropdown-menu">
                   @foreach(App\Estilo::all() as $cList)
                   <option class="option" id="est{{$cList->est_id}}" value="{{$cList->est_id}}">{{$cList->est_nombre}}</option>
                   @endforeach
                </div>
                </select>
             </div>


           </div>

         <div class="col-sm-6 hidden-xs">
           					<div class="row">
           						<div class="col-sm-6 pull-right">
                        <div class="main d-flex justify-content-center">
                      <button type="button"  id="findBtn" class="btn btn-primary rounded-0" name="button">Filtrar estilo</button>
                    </div>
           						</div>
           					</div>
           				</div>

       @endif
   </div>
    </div>
  </div>
  <div id="productData">
    <div class="product d-flex flex-wrap">
      @if(count($producto)=="0")
       <div class="" style="margin-bottom:30%;">
           <h1 align="center" style="margin:20px">Lo sentimos, no hay productos </h1>
       </div>
       @else
         @foreach ($producto as $productos)

   <div class="card shadow-sm p-3 mb-5 bg-white rounded-0 border-0" style="width:20rem;">
     <figure><a href="{{  action('HombreController@show', $productos->pro_id)}}"><img class="card-img img-fluid"
        src="{{Storage::url($productos->fot_ruta)}}" alt="Card image"></a>
     </figure>
     <div class="card-body">

               <h6 class="card-title font-weight-normal text-dark">{{$productos->pro_nombre}}</h6>
             <h6 class="card-title font-weight-light text-success"></h6>
   <p class="card-text font-weight-bold text-dark">$ {{(number_format($productos->pro_precio,0))}}</p>
   </div>
     </div>
     @endforeach

         @endif

  </div>
   </div>



  </body>
  <script type="text/javascript">
  $(document).ready(function(){
    $("#findBtn").click(function(){
      var price = $('#priceID').val();

      $.ajax({
        type: 'get',
        dataType: 'html',
        url: '{{url('/hombre-ropa')}}',
        data: 'price=' + price,
        success:function(response){
          console.log(response);
          $("#productData").load(response);
        }
      });
    });
  });
  </script>
</html>
@endsection
