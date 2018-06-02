<div class="header">
	<div class="container">
		<div class="row">
		  <div class="col-md-12">
				 <div class="header-left">
					 <div class="logo">
						<a href="{{ url('/') }}"><img src="{{url('images/demoledora.png')}}" style="width: 100px; height: 60px" alt=""/></a>
					 </div>
					 <div class="menu">
						  <a class="toggleMenu" href="#"><img src="{{url('snowboarding_template/images/nav.png')}}" alt="" /></a>
						    <ul class="nav" id="nav">
						    	<li><a href="{{ url('/shop') }}">Tienda</a></li>
						    	<li><a href="{{ url('/about') }}">Nosotros</a></li>
						    	<li><a href="{{ url('/contact') }}">Contacto</a></li>
								<div class="clear"></div>
							</ul>
							<script type="text/javascript" src="{{url('snowboarding_template/js/responsive-nav.js')}}"></script>
				    </div>							
	    		    <div class="clear"></div>
	    	    </div>
	            @include('store.partials.menu-user');
      		</div>
	 	</div>
    </div>
</div>