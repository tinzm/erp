<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Warehouse;
use App\PurchaseOrder;

class PurchasingOrderController extends Controller
{

    public function index()
    {
        $purchaseOrders = PurchaseOrder::all();

        $products = $purchaseOrders->map(function($product) {
            return Warehouse::find($product->product_id);
        });
        return view('purchasingOrders', ['products' => $products]);
    }
    public function show($id)
    {
    	PurchaseOrder::firstOrcreate([
    		'product_id' => $id,
    	]);

        return redirect('/purchases');
    }
}
