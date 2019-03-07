<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Product\Category;
use App\Https\Requests\Admin\Category\AddNewRequest;
use Validator;
use Illuminate\Support\Facades\Input;
class ProductController extends Controller
{
    
    public function getListCate()
    {
        $categories = Category::all();
        return view('admin.pages.category.list', ['categories'=>$categories]);
    }
    public function getAddCate()
    {
        return view('admin.pages.category.add');
    }
    public function postAddCate(Request $request)
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
            return redirect()->route('getListCateAdmin')->with($notifySuccess);
        }
        
    }
    public function getEditCate($id)
    {
        $category = Category::find($id);
        return view('admin.pages.category.edit', ['category'=>$category]);
    }
    public function postEditCate(Request $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->txtName;
        $category->slug = changeTitle($request->txtName);
        $category->status = $request->status;
        $input['txtName'] = $request->txtName;
        $rules = array('txtName' => 'unique:categories,name');
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            $notifyError = array(
                'message' => __('notify.error.edit', ['attribute'=> __('general.category')]),  
                'alert-type' => 'error',
            );
            return redirect()->back()->with($notifyError);
        }
        else {
            $category->save();
            $notifySuccess = array(
                'message' => __('notify.success.edit', ['attribute'=> __('general.category')]),  
                'alert-type' => 'success',
            );
            return redirect()->route('getListCateAdmin')->with($notifySuccess);
        }
        
    }
    public function getList()
    {
        return view('admin.pages.product.list');
    }
    public function getAdd()
    {
        return view('admin.pages.product.add');
    }
    public function postAdd(Request $request)
    {
        
    }
    public function getEdit($id)
    {
        
    }
    public function postEdit(Request $request, $id)
    {
        
    }
}
