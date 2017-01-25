@extends('base')
@section('browsertitle')addcategory @stop
@section('content')

	<h1 id="register-label">Add Category</h1>
					<hr>

					<form id="register" action="/addcategory" method="POST">
					<div>
						@if(isset($errors['cname'])) <span class = "err">{!! $errors['cname'] !!}</span> @endif
						<label>category name:</label>
						<input type="text" name="cname" placeholder="Post Category Title">
						
					</div>
					

					<input type="submit" name="submit" value="add">

					</form>
@stop
