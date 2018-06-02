@extends('layouts.layout1')

@section('content')
<div class="main">
  <div class="shop_top">
	<div class="container">
		<h4 class="title">Carrito de Compra</h4>
		<div class="table-cart">
			@if($cart != null)
			<p>
				<a href="{{ route('cart-trash') }}" class="btn btn-danger">
					Vaciar Carrito <i class=" fa fa-trash"></i>
				</a>
			</p>
			<hr>
			<div class="table-responsive">
				<table class="table table-striped table-hover table-bordered">
					<thead>
						<th>Imagen</th>
						<th>Producto</th>
						<th>Precio</th>
						<th>Cantidad</th>
						<th>Subtotal</th>
						<th>Quitar</th>
					</thead>
					<tbody>
						@foreach($cart as $item)
						<tr>
							<td><img src="{{ url('images/'.$item->image) }}"></td>
							<td>{{ $item->name }}</td>
							<td>s/ {{ number_format($item->price2,2) }}</td>
							<td>
								<input 
										type="number" 
										min="1"
										max="100"
										value="{{ $item->quantity }}"
										id="product_{{ $item->id }}"
								>
								<a 
									href="#"
									class="btn btn-warning btn-update-item"
									data-href="{{ route('cart-update', [ $item->slug, null ]) }}"
									data-id="{{ $item->id }}"
								>
									<i class="fas fa-sync"></i>
								</a>
							</td>
							<td>s/ {{ number_format($item->price2 * $item->quantity,2) }}</td>
							<td>
								<a href="{{ route('cart-delete', $item->slug) }}" class="btn btn-danger">
									<i class="fas fa-times"></i>
								</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				<h3>
					<span class="label label-success">
						Total: s/ {{ number_format($total,2) }}
					</span>
				</h3>
			</div>
		</div>
		<hr>
		<p>
			<a href="{{ route('shop') }}" class="btn btn-primary">
				<i class="fa fa-chevron-circle-left"></i> Seguir Comprando
			</a>
			<a href="{{ route('order-detail') }}" class="btn btn-primary">
				<i class="fa fa-chevron-circle-right"></i> Continuar
			</a>
		</p>
		@else
		<h4 class="title">El carrito de compras está vacio</h4>
		<p class="cart">Click<a href="{{ route('shop') }}"> aquí</a> para continuar con la compra</p>
		@endif
     </div>
   </div>
  </div>
  @endsection