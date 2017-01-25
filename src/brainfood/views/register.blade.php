@extends('base')
@section('browsertitle')register @stop
@section('content')
	
	<h1 id="register-label">Admin Register</h1>
		<hr>
		<form id="register"  action ="/register" method ="POST">
			<div>
				@if(isset($errors['fname'])) <span class = "err">{!! $errors['fname'] !!}</span> @endif
				<label>first name:</label>
				<input type="text" name="fname" placeholder="first name">
			</div>
			<div>
				@if(isset($errors['lname'])) <span class = "err">{!! $errors['lname'] !!}</span> @endif
				<label>last name:</label>	
				<input type="text" name="lname" placeholder="last name">
			</div>

			<div>
				@if(isset($errors['email'])) <span class = "err">{!! $errors['email'] !!}</span> @endif
				<label>email:</label>
				<input type="text" name="email" placeholder="email">
			</div>
			<div>
				@if(isset($errors['password'])) <span class = "err">{!! $errors['password'] !!}</span> @endif
				<label>password:</label>
				<input type="password" name="password" placeholder="password">
			</div>
 
			<div>
				@if(isset($errors['fpword'])) <span class = "err">{!! $errors['pword'] !!}</span> @endif
				<label>confirm password:</label>	
				<input type="password" name="pword" placeholder="password">
			</div>

			<input type="submit" name="register" value="register">
		</form>

		<h4 class="jumpto">Have an account? <a href="/login">login</a></h4>

@stop
