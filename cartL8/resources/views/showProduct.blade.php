@extends('layouts.app')
@section('content')
@if(Session::has('success'))
<div class="alert alert-success" role="alert">
	{{ Session::get('success')}}
</div>
@endif


<div class="container">
	<div class="row">
		<table class="table table-hover table-striped">
			<thead>
				<tr class="thead-dark">
					<th>ID</th>
					<th>Image</th>
					<th>Name</th>
					<th>Category</th>
					<th>Quantity</th>
					<th>Price</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($products as $product)
				<tr>
					<td>{{$product->id}}</td>
					<td><img src="{{ asset('images/') }}/{{$product->image}}" alt="" width="50"></td>
					<td style="max-width:300px">
						<h6>{{$product->name}}</h6>
						<em class="text-muted">
							{{$product->description}}
						</em>
					</td>
					<td>{{$product->categoryID}}</td>
					<td>{{$product->quantity}}</td>
					<td>{{$product->price}}</td>
					<td>
						<a href="{{route('editproduct', ['id' => $product->id])}}" class="btn btn-warning"><i
								class="fas fa-edit">Edit</i></a> |
						<a href="{{ route('deleteProduct', ['id' => $product->id]) }}" class="btn btn-danger"
							onclick="return confirm('Sure Want Delete?')">Delete</a>
					</td>
				</tr>
				@endforeach


			</tbody>
		</table>

		<div class="text-center">
			{{ $products->links() }}
		</div>

	</div>
</div>

@endsection