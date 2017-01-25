@extends('mainbase')
@section('browsertitle')userregister @stop
@section('contents')

	<div class="main">
    	<div class="registration-form">
	      	<form class="def-modal-form" action="/userregister" method="POST">
		        <div class="cancel-icon close-form"></div>
		        <label for="registration-from" class="header"><h3>User Registration</h3></label>
		       
		        @if(isset($errors['fname'])) <span class = "err">{!! $errors['fname'] !!}</span> @endif
		        <input type="text" name="fname" class="text-field first-name" placeholder="Firstname">
		       
		        @if(isset($errors['lname'])) <span class = "err">{!! $errors['lname'] !!}</span> @endif
		        <input type="text" name="lname" class="text-field last-name" placeholder="Lastname">
		        
		        @if(isset($errors['uname'])) <span class = "err">{!! $errors['uname'] !!}</span> @endif
		        <input type="text" name="uname" class="text-field username" placeholder="Username">

		        @if(isset($errors['email'])) <span class = "err">{!! $errors['email'] !!}</span> @endif
		        <input type="email" name="email" class="text-field email" placeholder="Email">
		               
		        @if(isset($errors['password'])) <span class = "err">{!! $errors['password'] !!}</span> @endif 
		        <input type="password" name="password" class="text-field password" placeholder="Password">
		        
		        
		        <input type="password" name="pword" class="text-field confirm-password" placeholder="Confirm Password">
		        
		        <input type="submit" name="reg" class="def-button" value="Register">
		        
		        <p class="login-option">Have an account already?<a href="/userlogin"> Login</a></p>
	      </form>
    	</div>
  </div>

@stop
