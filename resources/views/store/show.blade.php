@extends('layouts.layout1')

@section('content')
<div class="main">
      <div class="shop_top">
		<div class="container">
			<div class="row">
				<div class="col-md-9 single_left">
				   <div class="single_image">
					     <ul id="etalage">
							<li>
								<img class="etalage_thumb_image" src="{{url('images/'.$product->image)}}" />
								<img class="etalage_source_image" src="{{url('images/'.$product->image)}}" />
							</li>
						</ul>
					    </div>
				        <!-- end product_slider -->
				        <div class="single_right">
				        	<h3>{{$product->name}}</h3>
				        	<p class="m_10">{{$product->description}}</p>
				        </div>
				        <div class="clear"> </div>
				</div>
				<div class="col-md-3">
				  <div class="box-info-product">
					<p class="price2">s/ {{$product->price2}}</p>
						<a class="exclusive" href="{{ route('cart-add', $product->slug ) }}" >
						   <span>Agregar al Carrito</span>
						</a>
				   </div>
			   </div>
			</div>		
	     </div>
	   </div>
	  </div>
@endsection