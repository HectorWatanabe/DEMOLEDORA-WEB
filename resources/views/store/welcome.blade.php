@extends('layouts.layout1')

@section('content')

	<div class="banner">
	<!-- start slider -->
       <div id="fwslider">
	         <div class="slider_container">
	            <div class="slide">
	               <img src="{{url('snowboarding_template/images/slider2.jpg')}}" class="img-responsive" alt=""/>
	                <div class="slide_content">
	                    <div class="slide_content_wrap">
	                        <h1 class="title">Run Over<br>Everything</h1>
	                       	<div class="button"><a href="#">See Details</a></div>
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
					<h3>The Mountains<br>Snowboarding</h3>
					<p class="m_1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio.</p>
					
				</div>
				<div class="">
					<p> </p>
					
				</div>
			</div>
		</div>
  	</div>

@endsection