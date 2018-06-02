@extends('layouts.layout1')

@section('content')
	<div class="container text-center">
		<div class="page-header">
			<h1>
				<i class="fas fa-shopping-cart"></i>
				Detalle del pedido
			</h1>
		</div>

		<div class="page">
			<div class="table-responsive">
				<h3>Datos del Usuario</h3>
				<table class="table table-striped table-hover table-bordered">
					<tr><td>Nombre:</td><td>{{ Auth::user()->name . " " . Auth::user()->lastname }}</td></tr>
					<tr><td>Usuario:</td><td>{{ Auth::user()->user }}</td></tr>
					<tr><td>Correo:</td><td>{{ Auth::user()->email }}</td></tr>
					<tr><td>Dirección:</td><td>{{ Auth::user()->address }}</td></tr>
				</table>
			</div>
			<div class="table-responsive">
				<h3>Datos del Pedido</h3>
				<table class="table table-striped table-hover table-bordered">
					<tr>
						<th>Producto</th>
						<th>Precio</th>
						<th>Cantidad</th>
						<th>Subtotal</th>
					</tr>
					@foreach($cart as $item)
					<tr>
						<td>{{ $item->name }}</td>
						<td>{{ number_format($item->price2,2) }}</td>
						<td>{{ $item->quantity }}</td>
						<td>{{ number_format($item->price2 * $item->quantity,2) }}</td>
					</tr>
					@endforeach
				</table>
				<hr>
				<h3>
					<span>
						Total: s/ {{ number_format($total,2) }}
					</span>
				</h3>
				<hr>
				<p>
					<a href="{{ route('cart-show') }}" class="btn btn-primary">
						<i class="fa fa-chevron-circle-left"></i> Regresar
					</a>
					<a href="{{ route('order-ready') }}" class="btn btn-success">
						Comprar <i class="fa fa-chevron-circle-right"></i>
					</a>
				</p>
				<hr>
			</div>
		</div>
	</div>
@endsection