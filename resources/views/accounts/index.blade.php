@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <table class="table">
	                	<thead>
	                		<tr>
	                			<th>ID:</th>
	                			<th>Account Number</th>
	                            <th>Account Name</th>
	                			<th>Balance:</th>
	                		</tr>
	                	</thead>
	                	<tbody>
	                		<tr>
	                			<td>{{$account->id}}</td>
	                			<td>{{$account->accountNumber}}</td>
	                			<td>{{$account->name}}</td>
	                			<td>${{number_format($account->balance, 2) }}</td>
	                		</tr>
	                	</tbody>
	                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection