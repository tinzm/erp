<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    protected $guarded = [];

    public function hasLowStock()
    {
    	return $this->quantity < 5 && $this->quantity > 0;
    }

    public function outOfStock()
    {
    	return $this->quantity == 0;
    }

    public function customer()
    {
    	return $this->belongsTo(Customer::class);
    }
}
