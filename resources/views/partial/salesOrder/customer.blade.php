<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Customer Details</div>

            <div class="panel-body">
                <table class="table">
                	<thead>
                		<tr>
                			<th>ID:</th>
                			<th>full Name:</th>
                            <th>Balance</th>
                			<th>Date:</th>
                			<th>Shipped Via</th>
                			<th>FOB</th>
                			<th>Terms</th>
                		</tr>
                	</thead>
                	<tbody>
                		<tr>
                			<td>{{$customer->id}}</td>
                			<td>{{$customer->full_name}}</td>
                            <td>${{ number_format($customer->amount, 2) }}</td>
                			<td>{{$customer->created_at->diffForHumans()}}</td>
                			<td>Ground:</td>
                			<td>{{ $customer->address }}</td>
                			<td>10</td>
                		</tr>
                	</tbody>
                </table>
            </div>
        </div>
    </div>
</div>