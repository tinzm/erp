<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Warehouse;
class SalesOrderController extends Controller
{
    public function index($id)
    {
    	$customer = Customer::find($id);
    	$warehouse = Warehouse::find($customer->product_id);

    	return view('salesorder.index', [
    		'customer' => $customer, 
    		'product' => $warehouse
    	]);
    }
}
