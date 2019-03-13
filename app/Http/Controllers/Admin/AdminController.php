<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Page;
class AdminController extends Controller
{
    public function getIntroduce()
    {
    	$introduce = Page::where('url', 'gioi-thieu.html')->first();
    	return view('admin.pages.introduce', ['introduce'=>$introduce]);
    }
    public function postIntroduce(Request $request)
    {
        $introduceData = Page::where('url', 'gioi-thieu.html')->first();
        if ($introduceData) {
            $introduce = Page::where('url', 'gioi-thieu.html')->first();
            $introduce->title = 'Giới Thiệu';
            $introduce->content = $request->content;
        }else{
            $introduce = new Page();
            $introduce->url = 'gioi-thieu.html';
            $introduce->title = 'Giới Thiệu';
            $introduce->content = $request->content;
        }
        $introduce->save();
        $notification = array(
            'message' => 'Cập Nhật Nội Dung Thành Công!', 
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }
}
