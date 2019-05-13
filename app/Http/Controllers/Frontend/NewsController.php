<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\NewsCategory;
use App\Model\News;
use Session;
class NewsController extends Controller
{
    public function getDetail($slug)
    {
    	$news = News::where('slug', $slug)->where('status', 'active')->first();
    	$more = News::where('cate_id', $news->cate_id)->where('status', 'active')->where('id', '!=', $news->id)->limit(7)->get();
        $getAllNewsCate = NewsCategory::where('status', 'active')->limit(7)->get();



        $sessionKey = $news->id;
        $sessionView = Session::get($sessionKey);
        $views = News::findOrFail($news->id);
        if (!$sessionView) { //nếu chưa có session
            Session::put($sessionKey, 1); //set giá trị cho session
            $views->increment('views');
        }
    	return view('frontend.v1.pages.news.detail', ['news'=>$news, 'more'=>$more, 'getAllNewsCate'=>$getAllNewsCate]);
    }
    public function getNewsCate($slug)
    {
    	$categories = NewsCategory::where('slug', $slug)->where('status', 'active')->first();
        $getAllNewsCate = NewsCategory::where('status', 'active')->limit(7)->get();
        $news = $categories->news;
        $xemnhieu = News::where('id', '>', '0')->orderBy('views', 'DESC')->limit(2)->get();
    	return view('frontend.v1.pages.news.newsCategories', ['categories'=>$categories, 'getAllNewsCate'=>$getAllNewsCate, 'xemnhieu'=>$xemnhieu]);
    }
}
