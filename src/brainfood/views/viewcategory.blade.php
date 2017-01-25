@extends('base')
@section('browsertitle')viewcategory @stop
@section('content')

			<table id="tab">
				<thead>
					<tr>
						<th>Category Name</th>
						<th>Category ID</th>
						
						<th>&nbsp;&nbsp;&nbsp;Edit</th>
						<th>&nbsp;&nbsp;Delete</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($cat as $cat)

						<tr>
						<td>{!! $cat->category_name !!}</td>
						<td>{!! $cat->category_id !!}</td>
						<td><a href="/editcategory/{!! $cat->category_id !!}/">Edit</a></td>
						<td><a href="/deletecategory/{!! $cat->category_id !!}/">Delete</a></td>
						</tr>
					@endforeach



          		</tbody>
			</table>

@stop
