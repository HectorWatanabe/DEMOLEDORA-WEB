@extends('layouts.layout1')

@section('content')
	<div class="main">
      <div class="shop_top">
		<div class="container">
			<div class="col-md-6">
				 <div class="login-page">
					<h4 class="title">Nuevo Usuario</h4>
					<p>Registrate para poder terminar la compra del servicio.</p>
					<div class="button1">
					   <a href="{{ route('register-get') }}"><input type="submit" name="Submit" value="Crear Cuenta"></a>
					 </div>
					 <div class="clear"></div>
				  </div>
				</div>
				<div class="col-md-6">
				 <div class="login-title">
	           		<h4 class="title">Registered Customers</h4>
					<div id="loginbox" class="loginbox">

						@include('store.partials.errors')

						<form action="/login" method="post" name="login" id="login-form">
							{!! csrf_field() !!}
						  <fieldset class="input">
						    <p id="login-form-username">
						      <label for="modlgn_username">Email</label>
						      <input id="modlgn_username" type="email" name="email" class="inputbox" size="18" autocomplete="off" value="{{ old('email') }}" >
						    </p>
						    <p id="login-form-password">
						      <label for="modlgn_passwd">Password</label>
						      <input id="modlgn_passwd" type="password" name="password" class="inputbox" size="18" autocomplete="off" >
						    </p>
						    <div class="remember">
							    <input type="submit" name="Submit" class="button" value="Ingresar"><div class="clear"></div>
							 </div>
						  </fieldset>
						 </form>
					</div>
			      </div>
				 <div class="clear"></div>
			  </div>
			</div>
		  </div>
	  </div>
@endsection