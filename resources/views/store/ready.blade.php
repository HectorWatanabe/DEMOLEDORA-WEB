@extends('layouts.layout1')

@section('content')
	<div class="container text-center">
		<div class="page-header">
			<h1>
				Compra Lista
			</h1>
		</div>

		<div class="page">
			<div class="table-responsive">
				<h3>Se envió un mensaje al correo {{ Auth::user()->email }} para confirmar la compra</h3>
				<table class="table table-striped table-hover table-bordered">
					<tr><td>Nombre:</td><td>{{ Auth::user()->name . " " . Auth::user()->lastname }}</td></tr>
					<tr><td>Usuario:</td><td>{{ Auth::user()->user }}</td></tr>
					<tr><td>Correo:</td><td>{{ Auth::user()->email }}</td></tr>
					<tr><td>Dirección:</td><td>{{ Auth::user()->address }}</td></tr>
				</table>
			</div>
		</div>
	</div>
@endsection