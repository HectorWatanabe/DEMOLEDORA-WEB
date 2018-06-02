@if(Auth::check())
<div class="header_right">
	<div class="row">
	   <ul class="icon1 sub-icon1 profile_img">
   		 <li>
   		 	<a class="active-icon c1" href="#"></a>
			<ul class="sub-icon1 list">
			  <div class="login_buttons" style="margin: 0px">
				 <div class="check_button"><a href="{{ route('cart-show') }}">Carrito</a></div>
				 <div class="login_button"><a href="{{ route('logout')}}">Salir</a></div>
				 <div class="clear"></div>
			  </div>
			  <div class="clear"></div>
			</ul>
		 </li>
	   </ul>	
	</div>
   <div class="clear"></div>
</div>
@else
<div class="header_right">
	<div class="row">
	   <ul class="icon1 sub-icon1 profile_img">
   		 <li>
   		 	<a class="active-icon c1" href="#"></a>
			<ul class="sub-icon1 list">
			  <div class="login_buttons" style="margin: 0px">
				 <div class="check_button"><a href="{{ route('cart-show') }}">Carrito</a></div>
				 <div class="login_button"><a href="{{ route('login')}}">Ingresar</a></div>
				 <div class="clear"></div>
			  </div>
			  <div class="clear"></div>
			</ul>
		 </li>
	   </ul>	
	</div>
   <div class="clear"></div>
</div>
@endif