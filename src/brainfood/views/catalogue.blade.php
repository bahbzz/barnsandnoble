@extends('mainbase')
@section('browsertitle')catalogue @stop
@section('contents')

  <div class="side-bar">
    <div class="categories">
      <h3 class="header">Categories</h3>
      <ul class="category-list">
		      @foreach($cat as $cat)
		      <a href="/catalogue/{!! $cat->category_id !!}/">
		      <li class="category">{!! $cat->category_name !!}</li>
		      </a>
		      @endforeach
	    </ul>
    </div>
   </div>

  <!-- main content starts here -->
  <div class="main">
    <div class="main-book-list horizontal-book-list">
      <ul class="book-list">
      @foreach($prdt as $prdt)
        <li class="book">
        <a href="/bookpreview/{!! $prdt->product_id !!}/">
          <div class="book-cover" style="background: url({!! $prdt->image !!})
          no-repeat center; background-size: cover; width: 140px; height: 200px;"></div></a>
          <div class="book-price"><p>${!! $prdt->price !!}</p></div>
        </li>
        @endforeach
      </ul>
    </div>
   </div>
	
 @stop
