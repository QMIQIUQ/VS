@extends('layouts.app')
@section('content') 
            <div class="container" >
                <div class="row" style="text-align:right">
                    
                    <form class="form-group"  method="post" action="{{ route('updateproduct') }}" enctype="multipart/form-data" >
                    @csrf <!-- very important if you didn't insert CSRF, it not allow submit the data-->
                    <p>
                        <h3>Edit Product</h3>
                    </p>
                    @foreach($products as $product)

                    <p>
                        <label for="ID" class="label">Product ID</label>
                        <input type="text" name="ID" id="ID" value="{{$product->id}}" readonly>
                    </p>
                    <p>
                        <label for="name" class="label">Name</label>
                        <input type="text" name="name" id="name" value="{{$product->name}}">
                    </p>
                    <p>
                        <label for="description" class="label">Description</label>
                        <input type="text" name="description" id="description" value="{{$product->description}}">
                    </p>
                    <div class="form-group">
                    <select name= "category" id= "category" class="form-control">
                        @foreach($categories as $category)
                        <option  value="{{ $category->id }}"
                        @if($product->categoryID==$category->id)
                        selected                    
                        @endif
                        >{{ $category->name }}</option>
                        @endforeach
                    </select> 
                    </div>
                    <p>
                        <label for="price" class="label">Price</label>
                        <input type="number" name="price" id="Price" value="{{$product->price}}">
                    </p>
                    <p>
                        <label for="quantity" class="label">Quantity</label>
                        <input type="number" name="quantity" id="quantity" value="{{$product->quantity}}">
                    </p>

                    <p>
                        <input type="file" class="form-control" name="product-image" value="">
                    </p>

                    @endforeach
                    <p>
                        <input type="submit" name="edit" value="edit">
                    </p>
                    </form>
                    
                </div>
            </div>