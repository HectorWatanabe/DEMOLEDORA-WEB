@extends('layouts.layout1')

@section('content')
<div class="main">
  <div class="shop_top">
	 	<div class="container">
	 		@include('store.partials.errors')
			<form action="/register" method="post"> 
				{!! csrf_field() !!}
					<div class="register-top-grid">
							<h3>PERSONAL INFORMATION</h3>
							<div>
								<span>Nombre</span>
								<input type="text" name="name"> 
							</div>
							<div>
								<span>Apellido</span>
								<input type="text" name="last_name"> 
							</div>
							<div>
								<span>Email</span>
								<input type="text" name="email"> 
							</div>
							<div>
								<span>address</span>
								<input type="text" name="address"> 
							</div>
							<div class="clear"> </div>
					</div>
					<div class="clear"> </div>
					<div class="register-bottom-grid">
							<h3>LOGIN INFORMATION</h3>
							<div>
								<span>user</span>
								<input type="text" name="user">
							</div>
							<div>
								<span>Password</span>
								<input type="text" name="password">
							</div>
							<div>
								<span>Confirm Password</span>
								<input id="password-confirm" type="text" name="password_confirmation">
							</div>
							<div class="clear"> </div>
					</div>
					<div class="clear"> </div>
					<input type="submit" value="Registrar">
			</form>
		</div>
	</div>
</div>
@endsection