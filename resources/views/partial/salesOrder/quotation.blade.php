<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Product Details</div>

            <div class="panel-body">
                <table class="table">
                	<thead>
                		<tr>
                			<th>Product ID:</th>
                			<th>Product Name:</th>
                			<th>Product description:</th>
                			<th>Quantity</th>
                			<th>Unit Price</th>
                			<th>Total</th>
                		</tr>
                	</thead>
                	<tbody>
                		<tr>
                			<td>{{$product->id}}</td>
                			<td>{{$product->name}}</td>
                			<td>{{$product->description }}</td>
                			<td>{{ $customer->quantity }}</td>
                			<td>{{ $product->price }}</td>
                			<td>{{ $product->price * $customer->quantity }}</td>
                		</tr>
                	</tbody>
                </table>
            </div>
        </div>
    </div>
</div>