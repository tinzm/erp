<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	protected $guarded =[];
	
    public function products()
    {
    	return $this->hasMany(Warehouse::class);
    }
}
