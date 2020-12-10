@extends('layouts.app')
@section('content')

<div class="row">

    <div class="col-md-1 col-sm-6"></div>
    <div class="col-md-10 col-sm-6">
        <div class="card border-0" style="background-color: transparent">
            <h5 class="card-title" style="margin-top: 10px">Product</h5>
            <div class="row">
                @foreach($products as $product)
                <div class="col-sm-4" style="margin-top: 10px" id="myList">
                    <div class="card h-100">
                        <div class="card-body">

                            <a href="{{ route('product.detail', ['id' => $product->id]) }}" style="text-decoration: none">
                                <div class="bd-example">
                                    <div>
                                        <img src="{{ asset('images/') }}/{{$product->image}}" class="d-block w-100"
                                            alt="...">

                                    </div>
                                </div>
                                <div class="card-heading" style="text-align: center">
                                    <h5 class="card-title">{{$product->name}}</h5>
                                    RM {{$product->price}}
                                </div>
                                <div style="text-align: center">
                                    <a href=" #​​​​" class="btn btn-danger">Add To Cart</a>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</div>
<div class="col-md-1"></div>
</div>



</body>

<@endSection