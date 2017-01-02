<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Warehouse;

class WarehouseController extends Controller
{
    public function index()
    {
    	$products = Warehouse::all();
    	return view('warehouse.index', ['products' => $products]);
    }


}
