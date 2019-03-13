<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Product\Category;
use App\Model\Product\Product;
class ProductController extends Controller
{
    public function getDetail($cate_name, $slug)
    {
    	$product = Product::where('slug', $slug)->first();
    	$dataImage = unserialize($product->image_data);
    	$productRelate = Product::where('cate_id', $product->category->id)->where('id', '!=', $product->id)->get();
    	return view('frontend.v1.pages.detail', ['product'=>$product, 'dataImage'=>$dataImage, 'productRelate'=>$productRelate]);
    }
}
