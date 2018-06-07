@extends('layouts.layout1')

@section('content')
<div class="main">
	<div class="shop_top">
	<div class="container">
		<div class="row">
			<div class="col-md-4 team_bottom">
			  <ul class="team_list">
				<h4>Misión</h4>
	            <li><p>Somos una empresa que brinda el servicio de reducir el estrés en personas que trabajan y estudiantes universitarios, a fin de mejorar la calidad de vida de nuestros clientes mediante la técnica de destruir objetos.
				</p></li>
	            <h4>Visión</h4>
	            <li><p>Ser la empresa líder en el tratamiento alternativo para la reducción de estrés, mediante destrucción de objetos, a nivel nacional.
				</p></li>
	          </ul>
			</div>
			<div class="col-md-8">
				<ul class="team_list">
	             <img src="{{url('images/nosotros.jpg')}}" class="img-responsive" alt=""/>
	          </ul>
			</div>
		</div>
	</div>
	</div>
</div>
@endsection