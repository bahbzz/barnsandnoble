@extends('base')
@section('browsertitle')login @stop
@section('content')

	<h1 id="login-label">Admin Login</h1>
		<hr>
		<form id="login" action ="/login" method ="POST">
			<div>
				@if(isset($msg)) <span class = "err">{!! $msg !!}</span> @endif
				@if(isset($errors['email'])) <span class = "err">{!! $errors['email'] !!}</span> @endif
				<label>email:</label>
				<input type="text" name="email" placeholder="email">
			</div>
			<div>
				
				@if(isset($errors['password'])) <span class = "err">{!! $errors['password'] !!}</span> @endif
				<label>password:</label>
				<input type="password" name="password" placeholder="password">
			</div>
			<input type="submit" name="submit" value="login">
		</form>

		<h4 class="jumpto">Don't have an account? <a href="/register">register</a></h4>

@stop
