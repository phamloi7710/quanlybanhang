<?php

namespace App\Model\Product;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    public function category()
    {
    	return  $this->belongsTo('App\Model\Product\Category', 'cate_id', 'id');
    }
    public function manufacturer()
    {
    	return  $this->belongsTo('App\Model\Product\Manufacturer', 'manufacturer_id', 'id');
    }
    public function Properties()
    {
    	return  $this->belongsTo('App\Model\Product\Properties', 'properties_id', 'id');
    }
}
