@extends('mainbase')
@section('browsertitle')Login @stop
@section('contents')

 <div class="main">
    <div class="login-form">
      <form class="def-modal-form" action="/userlogin" method="POST">
      
        <div class="cancel-icon close-form"></div>
        <label for="login-form" class="header"><h3>Login</h3></label>
       
         @if(isset($errors['email'])) <span class = "err">{!! $errors['email'] !!}</span> @endif
        <input type="text" name="email" class="text-field email" placeholder="Email">
        
        @if(isset($errors['password'])) <span class = "err">{!! $errors['password'] !!}</span> @endif 
        <input type="password" name="password" class="text-field password" placeholder="Password">
        
        <input type="submit" name="login" class="def-button login" value="Login">
        <p class="login-option">Don't have an account?<a href="/userregister"> Register</a></p>
      </form>
    </div>
  </div>

  @stop
