@extends('layouts.app')
@section('content') 
<div class="container">
	    <div class="row">
		<form   method="post" action="{!! URL::to('paypal') !!}" >
			@csrf
		    <table class="table table-hover table-striped">
				
		        <thead>
		        <tr class="thead-dark">
		            <th>ID</th>
                    <th>Image</th>
		            <th>Name</th>
                   
		            <th>Quantity</th>
		            <th>Amount</th>
                    <th>Status</th>
		        </tr>
		    </thead>
		        <tbody>	
				@php
					$total=0;
				@endphp
                @foreach($myorders as $myorder)
		            <tr>
		                <td>{{$myorder->id}}</td>
                        <td><img src="{{ asset('images/') }}/{{$myorder->image}}" alt="" width="50"></td>
		                <td style="max-width:300px">
		                    <h6>{{$myorder->name}}</h6>		                   
		                </td>
		                
                        <td>{{$myorder->qty}}</td>
						@php
							$subtotal = $myorder->qty*$myorder->price;

							$total=$total+$subtotal;
						@endphp

                        <td>{{$subtotal}}</td>
		                <td>
		                    {{ $myorder->paymentStatus }}
		                </td>
		            </tr> 
                @endforeach
				 
				<tr class="thead-dark">
		        <td>&nbsp;</td>
                <td>&nbsp;</td>
		        <td>&nbsp;</td>                   
		        <td>&nbsp;</td>
		        <td><input type="hidden" name="amount" value="{{ $total }}"></td>
                <td><input type="submit" name="paynow" value="Pay Now"></td>
		    </tr>
		</form>					
		        </tbody>			
		    </table>		

	</div>
    </div>
@endsection