<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Page;
class FrontendController extends Controller
{
    public function getIntroduce()
    {
        $introduce = Page::where('url', 'gioi-thieu.html')->first();
        return view('frontend.v1.pages.introduce', ['introduce'=>$introduce]);
    }
}
