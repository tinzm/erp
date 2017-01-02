<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Warehouse;
use App\PurchaseOrder;
use App\Account;

class ProcurementController extends Controller
{
    public function edit($id)
    {
    	return view('procurement', ['product' => Warehouse::find($id)]);
    }

   public function update(Request $request, $id)
   {
   		$warehouse = Warehouse::find($id);
      $account = Account::find(1);

   		$purchaseOrder = PurchaseOrder::where('product_id', $id)->first();

   		$purchaseOrder->delete();

   		$warehouse->update([
   			'quantity' => $warehouse->quantity + intval($request->quantity)
   		]);
      
      $account->update([
        'balance' => $account->balance - $request->quantity * ($warehouse->price - 5)
      ]);

   		return redirect('/warehouse');
   }
}
