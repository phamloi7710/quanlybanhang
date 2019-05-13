<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Model\Language;
use Spatie\Activitylog\Models\Activity;
class LanguageController extends Controller
{

    public function getList()
    {
    	$languages = Language::where('id', '>', '0')->get();
    	return view('admin.pages.language.list', compact('languages'));
    }
    public function postAdd(Request $request)
    {
    	$language = new Language();
    	$language->name = $request->txtLanguageName;
    	$language->code = $request->txtLanguageCode;
    	$language->image = $request->image;
    	$language->status = $request->status;
        $userId = Auth::user()->id;
        $language->user_id = $userId;
    	$language->save();
        activity()->causedBy($userId)->performedOn($language)->log('Ngôn Ngữ '.$language->name.' Đã Được Thêm Mới');

        $lastActivity = Activity::all()->last();
        $lastActivity->subject;
        $lastActivity->causer;
    	$notification = array(
            'message' => __('notify.success.addNew', ['attribute'=>__('general.language')]), 
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }
    public function postEdit(Request $request, $id)
    {
        $oldData = Language::find($id);
    	$language = Language::find($id);
    	$language->name = $request->txtLanguageName;
    	$language->code = $request->txtLanguageCode;
    	$language->image = $request->image;
    	$language->status = $request->status;
        $userId = Auth::user()->id;
    	$language->user_id = $userId;
    	$language->save();
        activity()->causedBy($userId)->performedOn($language)
            ->withProperties(
                    [
                        'name' => 'Tên Ngôn Ngữ: '.$oldData->name.' ---> '.$language->name.'',
                        'code' => 'Mã Ngôn Ngữ: '.$oldData->code.' ---> '.$language->code.'',
                        'image' => 'Hình Ảnh: '.$oldData->image.' ---> '.$language->image.'',
                        'status' => 'Trạng Thái: '.$oldData->status.' ---> '.$language->status.'',
                    ])->log('Ngôn Ngữ "'.$language->name.'" Đã Được Chỉnh Sửa');
        $lastActivity = Activity::all()->last();
        $lastActivity->subject;
        $lastActivity->causer;
    	$notification = array(
            'message' => __('notify.success.update', ['attribute'=>__('general.language')]), 
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }
    public function deleteLanguage($id)
    {
        // Language::destroy($id);
        $language = Language::find($id);
        if($language->delete()) 
        {
            return response(['msg' => 'Xóa thành công!', 'status' => 'success']);
        }
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
