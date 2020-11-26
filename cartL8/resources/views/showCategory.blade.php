@extends('layouts.app')
@section('content') 
 @if(Session::has('deleteSuccess'));
	<div class="alert alert-success" role="alert">
		{{Session::get('deleteSuccess')}}

	</div>
@endif

            <div  align="center">
               <table>
                    <tr>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Action</td>
                    </tr>


                    @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td><a href="{{ route('deleteCategory', ['id' => $category->id]) }}" class="btn btn-danger">Delete</a></td>
                    </tr>
                    @endforeach

               </table>
            </div>
        </div>
@endsection('content') 