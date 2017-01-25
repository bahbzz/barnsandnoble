@extends('mainbase')
@section('browsertitle')Index @stop
@section('contents')


<div class="main">
    <div class="checkout-form">
      <form class="def-modal-form" action="/checkout/{!! $_SESSION['user_id'] !!}/" method="POST">
        <div class="total-cost">
          <h3>Total Purchase : ${!! $totalPrice !!}</h3>
        </div>
        <div class="cancel-icon close-form"></div>
        <label for="login-form" class="header"><h3>Checkout</h3></label>
         @if(isset($errors['phone'])) <span class = "err">{!! $errors['phone'] !!}</span> @endif
        <input type="text" name="phone" class="text-field phone" placeholder="Phone Number">

         @if(isset($errors['addy'])) <span class = "err">{!! $errors['addy'] !!}</span> @endif
        <input type="text" name="addy" class="text-field address" placeholder="Address">

         @if(isset($errors['code'])) <span class = "err">{!! $errors['code'] !!}</span> @endif
        <input type="text" name="code" class="text-field post-code" placeholder="Post Code">
        <input type="submit" name="chkt" class="def-button checkout" value="Checkout">
      </form>
    </div>
  </div>

@stop
