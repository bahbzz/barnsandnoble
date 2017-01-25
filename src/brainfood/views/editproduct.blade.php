@extends('base')
@section('browsertitle')editproduct @stop
@section('content')


	<h1 id="register-label">Edit Products</h1>
					<hr>

					<form id="register" action="/editproduct/{!! $id !!}/" method="POST" enctype="multipart/form-data">
					<div>
						<label>Book name:</label>
						<input type="text" name="name" placeholder="Book name" value="{!! $prdt->product_name !!}">
						
					</div>

					<div>
						<label>Author:</label>
						<input type="text" name="auth" placeholder="Author" value="{!! $prdt->author_name !!}">
						
					</div>

					
					<div>
						<label>Price:</label>
						<input type="text" name="price" placeholder="Price" value="{!! $prdt->price !!}">
						
					</div>

					<div>
						<label>select Category</label>
						<select name = "bkcat">
						<option value="{!! $prdt->category_name !!}">Select Category</option>
								@foreach ($cat as $cat)
									<option value="{!! $cat->category_id !!}">{!! $cat->category_name !!}</option>


								@endforeach
							
						</select>
						
					</div>

					<div>
						<label>image</label><a href = "changeimage.php">Change Image</a>
						
					</div>

					<input type="submit" name="submit" value="Update">

					</form>
@stop
