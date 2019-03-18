<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\NewsCategory;
use App\Model\News;
class NewsController extends Controller
{
    public function getDetail($slug)
    {
    	$news = News::where('slug', $slug)->where('status', 'active')->first();
    	$more = News::where('cate_id', $news->cate_id)->where('status', 'active')->where('id', '!=', $news->id)->limit(7)->get();
    	return view('frontend.v1.pages.news.detail', ['news'=>$news, 'more'=>$more]);
    }
    public function getNewsCate($slug)
    {
    	$categories = NewsCategory::where('slug', $slug)->where('status', 'active')->first();
    	return view('frontend.v1.pages.news.newsCategories', ['categories'=>$categories]);
    }
}
