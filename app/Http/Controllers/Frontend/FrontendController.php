<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Page;
use App\Model\Product\Category;
use App\Model\Product\Product;
class FrontendController extends Controller
{
    public function getIntroduce()
    {
        $introduce = Page::where('url', 'gioi-thieu.html')->first();
        return view('frontend.v1.pages.introduce', ['introduce'=>$introduce]);
    }
    public function getShowProductCate(Request $request, $url)
    {
    	$category = Category::where('status', 'active')->where('slug', $url)->first();
        $products = $category->product;
    	return view('frontend.v1.pages.product.product_cate', ['products'=>$products, 'category'=>$category]);
    }
}
