@extends('base')
@section('browsertitle')editcategory @stop
@section('content')

		 <h1 id="register-label">Edit Category</h1>
					<hr>
						<form id="register" action="/editcategory/{!! $id !!}/"  method="POST">
						<div>
							<label>category name:</label>
							<input type="text" name="cname" placeholder="Post Title" value="{!! $cat->category_name !!}">
							
						</div>
							

						<input type="submit" name="submit" value="Update">

						</form>

@stop
