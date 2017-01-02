<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Warehouse;
use App\Account;

class CustomerController extends Controller
{
    public function store(Request $request)
    {
        $warehouse = Warehouse::find($request->product_id);

        $totalAmount = $this->calculateAmount($request->balance, $warehouse, $request->quantity);

    	$customer = Customer::firstOrCreate([
    		'full_name' => $request->name,
            'amount' => $totalAmount,
    		'product_id' => $request->product_id,
    		'address' => $request->address,
    		'email' => $request->email,
    		'quantity' => $request->quantity
    	]);

        $this->updateAccount($warehouse, $request->quantity);

        $this->updateWarehouse($warehouse, $request->quantity);

        return redirect('/salesOrder/' . $customer->id);
    }

    public function calculateAmount($balance, $warehouse, $quantity) 
    {
        $totalAmount = $balance - $warehouse->price * $quantity;

        return $totalAmount;
    }

    public function updateWarehouse($warehouse, $quantity)
    {
        $warehouse->update([
            'quantity' => $warehouse->quantity - intval($quantity)
        ]);
    }

    public function updateAccount($warehouse, $quantity)
    {
        $account = Account::find(1);

        $totalPrice = $warehouse->price * $quantity;

        $account->update([
            'balance' => $account->balance + $totalPrice
        ]);



    }
}
