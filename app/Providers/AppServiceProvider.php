<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use View;
use DB;
use Lang;
use App\Model\Language;
use App\Model\Product\Category;
use App\Model\Product\Product;
use App\Model\WebInfomation;
use App\Model\NewsCategory;
use App;
class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Schema::defaultStringLength(191);
        if(Schema::hasTable('languages')) {
            $getLocale = App::getLocale();
            $languages = Language::where('status', 'active')->orderBy('order')->get();
            View::composer('admin.general.top', function ($view) use ($languages,$getLocale) {
                $view->with(['languages'=>$languages,'getLocale'=>$getLocale]);
            });
        }
        if(Schema::hasTable('categories')) {
            $categories = Category::where('status','active')->get();
            View::composer('frontend.v1.general.header-menu', function ($view) use ($categories) {
                $view->with(['categories'=>$categories]);
            });
        }
        if(Schema::hasTable('web_infomations')) {
            $webInfo = WebInfomation::where('key', 'web-info')->first();
            if(!$webInfo){
                $info = new WebInfomation();
                $siteName = '';
                $info->key = 'web-info';
                $info->phone = 'a:0:{}';
                $info->email = 'a:0:{}';
                $info->address = 'a:0:{}';
                $info->save();
                $fanpage = '';
                $twitter = '';
                $googlePlus = '';
                $youtubeChannel = '';
                $instagram = '';
                $seoTitle = '';
                $seoDescription = '';
                $seoKeywords = '';
                $logo = '';
                $favicon = '';
            }else{
                $siteName = $webInfo->site_name;
                $fanpage = $webInfo->fanpage;
                $twitter = $webInfo->twitter;
                $googlePlus = $webInfo->google_plus;
                $youtubeChannel = $webInfo->youtube_channel;
                $instagram = $webInfo->instagram;
                $seoTitle = $webInfo->seo_title;
                $seoDescription = $webInfo->seo_description;
                $seoKeywords = $webInfo->seo_key_words;
                $logo = $webInfo->logo_url;
                $favicon = $webInfo->favicon_url;
            }
            
            View::composer('frontend.v1.general.header', function ($view) use ($siteName, $fanpage, $twitter, $googlePlus, $youtubeChannel, $instagram, $seoTitle, $seoDescription, $seoKeywords, $logo, $favicon) {
                $view->with([
                    'siteName'=>$siteName,
                    'fanpage'=>$fanpage,
                    'twitter'=>$twitter,
                    'googlePlus'=>$googlePlus,
                    'youtubeChannel'=>$youtubeChannel,
                    'instagram'=>$instagram,
                    'seoTitle'=>$seoTitle,
                    'seoDescription'=>$seoDescription,
                    'seoKeywords'=>$seoKeywords,
                    'logo'=>$logo,
                    'favicon'=>$favicon,
                ]);
            });
            View::composer('frontend.v1.general.top', function ($view) use ($siteName, $logo) {
                $view->with([
                    'siteName'=>$siteName,
                    'logo'=>$logo,
                ]);
            });
            View::composer('frontend.v1.index', function ($view) use ($siteName, $fanpage, $twitter, $googlePlus, $youtubeChannel, $instagram, $seoTitle, $seoDescription, $seoKeywords) {
                $view->with([
                    'siteName'=>$siteName,
                    'fanpage'=>$fanpage,
                    'twitter'=>$twitter,
                    'googlePlus'=>$googlePlus,
                    'youtubeChannel'=>$youtubeChannel,
                    'instagram'=>$instagram,
                    'seoTitle'=>$seoTitle,
                    'seoDescription'=>$seoDescription,
                    'seoKeywords'=>$seoKeywords
                ]);
            });
        }
        if(Schema::hasTable('news_categories')) {
            $newsCategories = NewsCategory::where('status', 'active')->get();
            View::composer('frontend.v1.general.top-menu', function ($view) use ($newsCategories) {
                $view->with(['newsCategories'=>$newsCategories]);
            });
        }
    }
    public function register()
    {
        //
    }
}
