<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    protected $guarded = [];

    public function products()
    {
    	return $this->belongsTo(Warehouse::class, 'product_id');
    }
}
