@extends('layout')

@section('content')
<div class="container">
	<a href="{{route('home.index')}}" class="btn btn-default"><i class="fa fa-arrow-circle-left"></i>Back</a>
	<h4>Login</h4>
	<hr>
	<form action="{{route('login-admin')}}" method="post">	
		@if(Session::has('success'))
		<div class="alert alert-success">{{Session::get('success')}}</div>
		@endif
		@if(Session::has('fail'))
		<div class="alert alert-danger">{{Session::get('fail')}}</div>
		@endif
		@csrf


	<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
	<div class="input-group">
		<input type="email" placeholder="Email" name="email" value="{{ old('$email')}}" required>
		<span class="text-danger">@error('email'){{$message}} @enderror</span>
					
	</div>
	<div class="input-group">
		<input type="password" placeholder="Password" name="password" value="{{ old('$password')}}" required>
		<span class="text-danger">@error('password'){{$message}} @enderror</span>
					
	</div>
		

		<div class="form-group">
			<button class= "btn btn-block btn-primary" type="submit">Login</button>

		</div>
		<br>
</form>

</div>
@endsection
