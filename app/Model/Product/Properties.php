<?php

namespace App\Model\Product;

use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
    protected $table = "properties";
    public function product()
    {
    	return $this->hasMany('App\Model\Product\Product', 'properties_id', 'id');
    }
}
