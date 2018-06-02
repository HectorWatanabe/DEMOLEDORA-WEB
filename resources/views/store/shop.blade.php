@extends('layouts.layout1')

@section('content')
<div class="main">
	<div class="shop_top">
	<div class="container">
		<div class="row shop_box-top">
			@foreach( $products as $product)
			<div class="col-md-3 shop_box" style="margin-top: 20px">
				<img src="{{url('images/'.$product->image)}}" class="img-responsive" alt=""/>
				<span class="new-box">
					<span class="new-label">New</span>
				</span>
				<span class="sale-box">
					<span class="sale-label">Sale!</span>
				</span>
				<div class="shop_desc">
					<h3><a href="#">{{$product->name}}</a></h3>
					<p>{{$product->description}}</p>
					<span class="reducedfrom">s/ {{$product->price1}}</span>
					<span class="actual">s/ {{$product->price2}}</span><br>
					<ul class="buttons">
						<li class="cart"><a href="{{ route('cart-add', $product->slug ) }}">Agregar al carrito</a></li>
						<li class="shop_btn"><a href="{{ route('product-detail', $product->slug ) }}">Leer más</a></li>
						<div class="clear"> </div>
				    </ul>
			    </div>
			</a></div>
			@endforeach
		</div>
	 </div>
	</div>
</div>
@endsection
	  