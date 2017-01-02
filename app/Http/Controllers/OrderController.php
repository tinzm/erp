<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Warehouse;

class OrderController extends Controller
{
    public function show($id)
    {
    	return view('order.index', ['product' => Warehouse::find($id)]);
    }
}
