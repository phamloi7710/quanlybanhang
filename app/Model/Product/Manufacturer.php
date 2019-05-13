<?php

namespace App\Model\Product;

use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    protected $table = "manufacturer";
    public function product()
    {
    	return $this->hasMany('App\Model\Product\Product', 'manufacturer_id', 'id');
    }
}
