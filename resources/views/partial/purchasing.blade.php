
<div class="panel panel-default">
    <div class="panel-heading">Purchasing Order</div>

    <div class="panel-body">
        <table class="table">
            <tr>
                <thead>
                    <th>ID:</th>
                    <th>Name:</th>
                    <th>Price:</th>
                </thead>
            </tr>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->price}}</td>
                        <td><a href="/procurement/{{$product->id}}/edit" class="btn btn-primary">Purchase Product</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>