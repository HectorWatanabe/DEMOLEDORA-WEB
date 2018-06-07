@extends('layouts.layout1')

@section('content')

	<div class="banner">
	<!-- start slider -->
       <div id="fwslider">
	         <div class="slider_container">
	            <div class="slide">
	               <img src="{{url('images/romper1.jpg')}}" class="img-responsive" alt=""/>
	                <div class="slide_content">
	                    <div class="slide_content_wrap">
	                        <h1 class="title">Vive la experiencia al máximo</h1>
	                       	<div class="button"><a href="{{ route('shop') }}">Ir a la Tienda</a></div>
	                    </div>
	                </div>
	            </div>
	            <div class="slide">
	               <img src="{{url('images/romper2.jpg')}}" class="img-responsive" alt=""/>
	                <div class="slide_content">
	                    <div class="slide_content_wrap">
	                        <h1 class="title">Se parte de nuestro servicio</h1>
	                       	<div class="button"><a href="{{ route('shop') }}">Ir a la Tienda</a></div>
	                    </div>
	                </div>
	            </div>
	            <div class="slide">
	               <img src="{{url('images/romper3.jpg')}}" class="img-responsive" alt=""/>
	                <div class="slide_content">
	                    <div class="slide_content_wrap">
	                        <h1 class="title">Atrévete a romper lo que quieras</h1>
	                       	<div class="button"><a href="{{ route('shop') }}">Ir a la Tienda</a></div>
	                    </div>
	                </div>
	            </div>
	            <!--/slide -->
	        </div>
	        <div class="timers"></div>
	        <div class="slidePrev"><span></span></div>
	        <div class="slideNext"><span></span></div>
       </div>
       <!--/slider -->
    </div>
 	<div class="content-bottom">
		<div class="container">
			<div class="row content_bottom-text">
		  		<div class="col-md-7">
					<h3>Demoledora<br>Strash</h3>
					<p class="m_1">
						Somos una empresa nacional dedicada al rubro de reducir el nivel de estrés causado por la carga laboral y estudios.
						Demoledora te conecta con tu centro de relajación en la que encontrarás la liberación mediante una manifestación física. Te ofrecemos STRASH. Olvídate del estrés mediante el “crash” (sonido de las cosas al romper). La liberación del cuerpo permite la liberación del alma. Con nosotros, podrás romper con todo lo que te incomoda, estresa o mortifica. Canaliza toda tu frustración y junto a nosotros rompe con esa tensión. Demoledora te ofrece esto y mucho más.
					</p>
				</div>
				<div class="">
					<p> </p>
					
				</div>
			</div>
		</div>
  	</div>

@endsection