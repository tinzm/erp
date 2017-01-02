@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
           	<form action="/procurement/{{$product->id}}" method="post">
           		{{ csrf_field() }}
           		<div class="form-group">
           			<label for="#">Quantity:</label>
           			<input type="number" name="quantity">
           		</div>

           		<div class="form-group">
           			<label for="#">Supplier</label>
           			<input type="text" name="supplier">
           		</div>

           		<div class="form-group">
           			<button class="btn btn-primary">Submit	</button>
           		</div>
           	</form>
        </div>
    </div>
</div>
@endsection
