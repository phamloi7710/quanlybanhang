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
        $rules = array('txtName' => 'unique:news_categories,name');
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            $notifyError = array(
                'message' => __('notify.error.addNew', ['attribute'=> 'Danh mục tin tức']),  
                'alert-type' => 'error',
            );
            return redirect()->back()->with($notifyError);
        }
        else {
            $category->save();
            $notifySuccess = array(
                'message' => __('notify.success.addNew', ['attribute'=> 'danh mục tin tức']),  
                'alert-type' => 'success',
            );
            return redirect()->route('getListNewsCategoriesAdmin')->with($notifySuccess);
        }
    }
    public function getEditCategory($id)
    {
    	$category = Category::find($id);
    	return view('admin.pages.news.category.edit', ['category'=>$category]);
    }
    public function postEditCategory(Request $request, $id)
    {
    	$category = Category::find($id);
    	$category->name = $request->txtName;
        $category->slug = changeTitle($request->txtName);
        $category->status = $request->status;
        $category->save();
        $notifySuccess = array(
            'message' => __('notify.success.addNew', ['attribute'=> 'danh mục tin tức']),  
            'alert-type' => 'success',
        );
        return redirect()->route('getListNewsCategoriesAdmin')->with($notifySuccess);
    }
    public function getDeleteCategory($id)
    {
    	$category = Category::find($id);
    	if($category->delete())	
    	{
    		echo "Data Deleted";
    	}
    }



















    public function getListNews()
    {
    	$news = News::all();
    	return view('admin.pages.news.list', ['news'=>$news]);
    }
    public function getAddNews()
    {
    	$categories = Category::all();
    	return view('admin.pages.news.add', ['categories'=>$categories]);
    }
    public function postAddNews(Request $request)
    {
    	$news = new News();
    	$news->title = $request->txtTitle;
    	$news->slug = changeTitle($request->txtTitle);
    	$news->cate_id = $request->sltCate;
    	$news->image = $request->txtAvatarUrl;
    	$news->description = $request->description;
    	$news->status = $request->status;
    	$news->status_home = $request->status_home;
    	$news->content = $request->content;
    	$news->save();
    	$notifySuccess = array(
            'message' => 'Thêm mới tin tức thành công!',  
            'alert-type' => 'success',
        );
        return redirect()->route('getListNewsAdmin')->with($notifySuccess);
    }
    public function getEditNews($id)
    {
    	$news = News::find($id);
    	$categories = Category::all();
    	return view('admin.pages.news.edit', ['categories'=>$categories, 'news'=>$news]);
    }
    public function postEditNews(Request $request, $id)
    {
    	$news = News::find($id);
    }
    public function getDeleteNews($id)
    {
    	$news = News::find($id);
    	if($news->delete())	
    	{
    		echo "Data Deleted";
    	}
    }
}
