<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Model\Language;
class LanguageController extends Controller
{

    public function getList()
    {
    	$languages = Language::all();
    	return view('admin.pages.language.list', ['languages'=>$languages]);
    }
    public function postAdd(Request $request)
    {
    	$language = new Language();
    	$language->name = $request->txtLanguageName;
    	$language->code = $request->txtLanguageCode;
    	$language->image = $request->image;
    	$language->status = $request->status;
    	$language->user_id = Auth::user()->id;
    	$language->save();
    	$notification = array(
            'message' => __('notify.success.addNew', ['attribute'=>__('general.language')]), 
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }
    public function postEdit(Request $request, $id)
    {
    	$language = Language::find($id);
    	$language->name = $request->txtLanguageName;
    	$language->code = $request->txtLanguageCode;
    	$language->image = $request->image;
    	$language->status = $request->status;
    	$language->user_id = Auth::user()->id;
    	$language->save();
    	$notification = array(
            'message' => __('notify.success.update', ['attribute'=>__('general.language')]), 
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }
    public function index()
    {


        if(!Session::has('locale'))
        {
            Session::put('locale', Input::get('locale'));
        }else{
            Session::put('locale', Input::get('locale'));
        }
        return Redirect::back();

    }

    public function locale($locale)
    {

        Session::put('locale', $locale);
        App::setLocale($locale);
       // exit($locale);

        return Redirect::back();
    }
}
