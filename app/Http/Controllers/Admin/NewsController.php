<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\News;
use App\Model\NewsCategory as Category;
use Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
class NewsController extends Controller
{
    public function getListCategories()
    {
    	$categories = Category::all();
    	return view('admin.pages.news.category.list', ['categories'=>$categories]);
    }
    public function getAddCategory()
    {
    	return view('admin.pages.news.category.add');
    }
    public function postAddCategory(Request $request)
    {
    	$category = new Category();
        $category->name = $request->txtName;
        $category->slug = changeTitle($request->txtName);
        $category->status = $request->status;
        $input['txtName'] = Input::get('txtName');
        $rules = array('txtName' => 'unique:categories,name');
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            $notifyError = array(
                'message' => __('notify.error.addNew', ['attribute'=> __('general.category')]),  
                'alert-type' => 'error',
            );
            return redirect()->back()->with($notifyError);
        }
        else {
            $category->save();
            $notifySuccess = array(
                'message' => __('notify.success.addNew', ['attribute'=> __('general.category')]),  
                'alert-type' => 'success',
            );
            return redirect()->route('getListNewsCategoriesAdmin')->with($notifySuccess);
        }
    }
    public function getEditCategory($id)
    {
    	return view('admin.pages.news.category.edit');
    }
    public function postEditCategory(Request $request, $id)
    {
    	
    }
    public function getDeleteCategory($id)
    {
    	
    }
}
