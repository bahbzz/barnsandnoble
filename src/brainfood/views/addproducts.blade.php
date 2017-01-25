@extends('base')
@section('browsertitle')addproducts @stop
@section('content')		

		<h1 id="register-label">Add Products</h1>
							<hr>

							<form id="register" action="/addproducts" method="POST" enctype="multipart/form-data">
							<div>
								@if(isset($errors['name'])) <span class = "err">{!! $errors['name'] !!}</span> @endif
								<label>Book name:</label>
								<input type="text" name="name" placeholder="Book name">
							</div>

							<div>
								@if(isset($errors['auth'])) <span class = "err">{!! $errors['auth'] !!}</span> @endif
								<label>Author:</label>
								<input type="text" name="auth" placeholder="Author">
							</div>

							
							<div>
								@if(isset($errors['price'])) <span class = "err">{!! $errors['price'] !!}</span> @endif
								<label>Price:</label>
								<input type="text" name="price" placeholder="Price">
							</div>

							<div>
								@if(isset($errors['bkcat'])) <span class = "err">{!! $errors['bkcat'] !!}</span> @endif
								<label>select Category</label>
								<select name = "bkcat">
								<option value="">Select Category</option>
								@foreach ($cat as $cat)
									<option value="{!! $cat->category_id !!}">{!! $cat->category_name !!}</option>


								@endforeach
																									
								</select>
								
							</div>

							<div>
								<label>image</label>
								<input type="file" name="pic">
							</div>

							

							<input type="submit" name="submit" value="add">

							</form>
@stop

