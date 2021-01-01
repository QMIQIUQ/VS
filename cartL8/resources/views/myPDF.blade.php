<!DOCTYPE html>
<html>
<head>
    <title>Southern Cart</title>
</head>
<body>
    <h1>Southern Cart</h1>
    <p>Product List</p>
    <div>
	    <div>
		    <table>
		        <thead>
		        <tr>
		            <th>ID</th>  
                    <th>Image</th>                  
		            <th>Name</th>
                    <th>Category</th>
		            <th>Quantity</th>
		            <th>Price</th>
                    
		        </tr>
		    </thead>
		        <tbody>	
                @foreach($products as $product)
		            <tr>
		                <td>{{$product->id}}</td>
                        <td><img src="{{ public_path('images/'.$product->image) }}" alt="" width="50"></td>
                        <td >{{$product->name}}</td>
		                <td>{{$product->categoryID}}</td>
                        <td>{{$product->quantity}}</td>
                        <td>{{$product->price}}</td>
		                
		            </tr> 
                @endforeach				
		        </tbody>
		    </table>
	</div>
    </div>
</body>
</html>