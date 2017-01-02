<div class="panel panel-default">
                <div class="panel-heading">WareHouse</div>

                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <thead>
                                <th>ID:</th>
                                <th>Name:</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Description</th>
                                <th>Status:</th>
                            </thead>
                        </tr>

                        <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->quantity}}</td>
                                    <td>{{$product->description}}</td>
                                    
                                    @if (Auth::guest())
                                        @if (!$product->outOfStock())
                                            <td><a href="/order/{{$product->id}}" class="btn btn-success">Buy</a></td>
                                        @endif
                                    @endif

                                    @if (Auth::user())
                                        @if ($product->hasLowStock())
                                            <td><a href="/purchase/{{$product->id}}" class="btn btn-info">Low Stock</a></td>
                                        @endif
                                        @if ($product->outOfStock())
                                            <td>
                                                <a href="/purchase/{{$product->id}}" class="btn btn-danger">
                                                    Out of Stock
                                                </a>
                                            </td>
                                        @endif
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>