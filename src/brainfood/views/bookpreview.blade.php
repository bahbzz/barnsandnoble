@extends('mainbase')
@section('browsertitle')bookpreview @stop
@section('contents')

<div class="main">	
    <!--<p class="global-error">You have not chosen any amount!</p>-->
    <div class="book-display">
      <div class="display-book" style="background: url({!! $prody->image !!})
            no-repeat center; background-size: cover; width: 190px; height: 270px;"></div>
      <div class="info">
        <h2 class="book-title">{!! $prody->product_name !!}</h2>
        <h3 class="book-author">by {!! $prody->author_name !!}</h3>
        <h3 class="book-price">${!! $prody->price !!}</h3>
        <label for="book-amout">Amount</label>
        <form action="/addtocart/{!! $prody->product_id !!}/" method="POST">

         @if(isset($errors['quantity'])) <span class = "err">{!! $errors['quantity'] !!}</span> @endif
        <input type="number" name="quantity" class="book-amount text-field">
        <input type="submit" name="add" class="def-button" value="Add to Cart">
        </form>
      </div>
    </div>
    
    <div class="book-reviews">
      <h3 class="header">Reviews</h3>
      @foreach($comments as $comments)  
      <ul class="review-list">
     
        <li class="review">
        
          <div class="avatar-def user-image">
            <h4 class="user-init">{!! substr($comments->firstname, 0 ,1).substr($comments->lastname, 0, 1) !!}. </h4>
          </div>
          <div class="info">
            <h4 class="username">{!! $comments->firstname !!} - {!! $comments->lastname !!}</h4>
            <p class="comment">{!! $comments->comments !!}
            </p>
          </div>
                  
        </li>
        </ul> 
        @endforeach        
        <div class="add-comment">
        <h3 class="header">Add your comment</h3>
        <form class="comment" action="/addcomment/{!! $prody->product_id !!}/" method="POST">

          @if(isset($errors['review'])) <span class = "err">{!! $errors['review'] !!}</span> @endif
          <textarea class="text-field" placeholder="write something" name="review"></textarea>
          <button class="def-button post-comment">Upload comment</button>
        </form>
      </div>
    </div>
  </div>
@stop
