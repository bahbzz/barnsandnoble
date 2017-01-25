@extends('mainbase')
@section('browsertitle')cart @stop
@section('contents')

<div class="main">
    <table class="cart-table">
      <thead>
        <tr>
          <th><h3>Item</h3></th>
          <th><h3>Price</h3></th>
          <th><h3>Quantity</h3></th>
          <th><h3>Total</h3></th>
          <th><h3>Update</h3></th>
          <th><h3>Remove</h3></th>
        </tr>
      </thead>
      <tbody>
      @foreach($cartlist as $cartlist)
        <tr>
          <td><div class="book-cover b1" style="background: url({!! $cartlist->image !!})
            no-repeat center; background-size: cover; width: 81px; height: 100px;"></div></td>
          <td><p class="book-price">${!! $cartlist->price !!}</p></td>
          <td><p class="quantity">{!! $cartlist->quantity !!}</p></td>
          <td><p class="total">${!! ($cartlist->price * $cartlist->quantity) !!}</p></td>
          <td><input type="hidden" value="${!! ($cartlist->price * $cartlist->quantity) !!}"></td>
          <td>
            <form class="update" action="/updatecart/{!! $cartlist->user_id !!}/{!! $cartlist->product_id !!}/" method="POST">

              @if(isset($errors['quantity'])) <span class = "err">{!! $errors['quantity'] !!}</span> @endif
              <input type="number" name="quantity" class="text-field qty">
              <input type="hidden" value="{!! $cartlist->cart_id !!}" name="c_id">
              <input type="submit" class="def-button change-qty" value="Change Qty">
            </form>
          </td>
          <td>
            <form action="/deletefromcart/{!! $cartlist->cart_id !!}/" method="POST">
            <input type="hidden" value="{!! $cartlist->cart_id !!}" name="c_id">
            <a href="/deletefromcart/{!! $cartlist->cart_id !!}/"><button class="def-button remove-item">Remove Item</button></a>
            </form>
          </td>
        </tr>
      @endforeach
  </tbody>
    </table>
    </div>
    <div class="cart-table-actions">
      <button class="def-button previous">previous</button>
      <button class="def-button next">next</button>
      <div class="index">
        <!--<a href="#"><p>1</p></a>
        <a href="#"><p>2</p></a>
        <a href="#"><p>3</p></a>-->
      </div>
      <a href="/checkout/{!! $_SESSION['user_id'] !!}/"><button class="def-button checkout">Checkout</button></a>
    </div>
    
@stop
