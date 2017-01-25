@extends('mainbase')
@section('browsertitle')Index @stop
@section('contents')


<!-- main content starts here -->
  <div class="wrapper">
      <div class="main">
    <div class="book-display">
    @foreach ($splash as $splash)
      <div class="display-book" style="background: url({!! $splash->image !!})
            no-repeat center; background-size: cover; width: 190px; height: 270px;"></div>
      <div class="info">
        
        <h2 class="book-title">{!! $splash->product_name !!}</h2>
        <h3 class="book-author"> by {!! $splash->author_name !!}</h3>
        <h3 class="book-price">${!! $splash->price !!}</h3>
        <form action="/addtocart/{!! $splash->product_id !!}/" method="POST">
        
         @if(isset($errors['quantity'])) <span class = "err">{!! $errors['quantity'] !!}</span> @endif
        <input type="number" name="quantity" class="book-amount text-field">
        <input type="submit" name="add" class="def-button" value="Add to Cart">
        </form>
        </div>
      @endforeach
    </div>
    <div class="trending-books horizontal-book-list">
      <h3 class="header">Trending</h3>
      <ul class="book-list">
      @foreach($trend as $trend)
        <li class="book">
        <a href="/bookpreview/{!! $trend->product_id !!}/">
          <div class="book-cover" style="background: url({!! $trend->image !!})
          no-repeat center; background-size: cover; width: 140px; height: 200px;"></div></a>
          <div class="book-price"><p>${!! $trend->price !!}</p></div>
        
          
        </li>
        @endforeach
      </ul>
    </div>
    <div class="recently-viewed-books horizontal-book-list">
      <h3 class="header">Recently Viewed</h3>
      <ul class="book-list">
        <div class="scroll-back"></div>
        <div class="scroll-front"></div>
        <li class="book">
          <div class="book-cover"></div>
          <div class="book-price"><p>$250</p></div>
        </li>
        <li class="book">
          <div class="book-cover"></div>
          <div class="book-price"><p>$50</p></div>
        </li>
        <li class="book">
          <div class="book-cover"></div>
          <div class="book-price"><p>$125</p></div>
        </li>
        <li class="book">
          <div class="book-cover"></div>
          <div class="book-price"><p>$90</p></div>
        </li>
      </ul>
    </div>

@stop
