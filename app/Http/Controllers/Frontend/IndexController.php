<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Product\Category;
use App\Model\Product\Product;
use App\Model\News;
use App\Model\NewsCategory;
class IndexController extends Controller
{
    public function getIndex()
    {
    	$category = Category::where('status', 'active')->get();
    	$product = Product::where('status', 'active')->get();
    	$featuredNews = News::where('status', 'active')->where('status_home', 'active')->get();
    	return view('frontend.v1.index', ['category'=>$category, 'featuredNews'=>$featuredNews]);
    }
}
