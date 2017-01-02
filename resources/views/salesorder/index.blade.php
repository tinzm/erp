@extends('layouts.app')
@section('content')
<div class="container">
	<div class="alert alert-info">
		<h3 style="text-align: center">Sales Order</h3>
	</div>
    @include('partial.salesOrder.customer')

    @include('partial.salesOrder.quotation')
</div>
@endsection

