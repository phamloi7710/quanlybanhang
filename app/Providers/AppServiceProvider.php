<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use View;
use DB;
use Lang;
use App\Model\Language;
use App;
class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Schema::defaultStringLength(191);
     	$getLocale = App::getLocale();
        $flag = Language::where('code', $getLocale)->first();
        if(Schema::hasTable('languages')) {
            $languages = Language::where('status', 'active')->orderBy('order')->get();
            View::composer('admin.general.top', function ($view) use ($languages,$getLocale,$flag) {
                $view->with(['languages'=>$languages,'getLocale'=>$getLocale,'flag'=>$flag]);
            });
        }
    }
    public function register()
    {
        //
    }
}
