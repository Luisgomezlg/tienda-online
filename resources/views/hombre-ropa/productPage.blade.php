@if(count($data)=="0")
 <div class="" style="margin-bottom:30%;">
     <h1 align="center" style="margin:20px">Lo sentimos, no hay productos </h1>
 </div>
 @else
<div class="product d-flex flex-wrap">
     @foreach ($data as $productos)
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
