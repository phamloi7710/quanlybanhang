<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Product\Category;
use App\Model\Product\Product;
use App\Https\Requests\Admin\Category\AddNewRequest;
use Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
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
    public function delete($id)
    {
        $products = Product::where('cate_id',$id)->count();
        if ($products==0) {
            $category = Category::find($id);
            if($category->delete()) 
            {
                return response(['msg' => 'Xóa thành công!', 'status' => 'success']);
            }
        }
        else{
            return response(['msg' => 'Không thể xóa!', 'status' => 'failed']);
        }
    }
    public function getList()
    {
        $products = Product::all();
        return view('admin.pages.product.list', ['products'=>$products]);
    }
    public function getAdd()
    {
        $categories = Category::all();
        return view('admin.pages.product.add', ['categories'=>$categories]);
    }
    public function postAdd(Request $request)
    {
        $product = new Product();
        $product->name = $request->txtName;
        $product->slug = changeTitle($request->txtName);
        $product->cate_id = $request->sltCate;
        $product->price_import = $request->txtNhap;
        $product->price = $request->txtPrice;
        $product->price_sale = $request->txtSalePrice;
        $product->qty = $request->txtQty;
        $product->status = $request->status;
        $product->avatar = $request->avatar;
        $imageData = array();
        $urlImage = $request->image;
        if(is_array($urlImage)) {
            for($i=0; $i < count($urlImage); $i++) {
                $imageData[$i] = [
                    'url_image' => $urlImage[$i],
                ];
            }
        }
        $product->image_data = serialize($imageData);
        $product->description = $request->description;
        $product->content = $request->content;
        $product->user_id = Auth::user()->id;
        $product->seo_title = $request->txtSeoTitle;
        $product->seo_description = $request->txtSeoDescription;
        $product->seo_key_words = $request->txtSeoKeywords;
        $product->save();
        $notifySuccess = array(
            'message' => 'Thêm Mới Sản Phẩm Thành Công!',  
            'alert-type' => 'success',
        );
        return redirect()->route('getListProductsAdmin')->with($notifySuccess);
    }
    public function getEdit($id)
    {
        $categories = Category::all();
        $product = Product::find($id);
        $imageData = unserialize($product->image_data);
        return view('admin.pages.product.edit', ['product'=>$product, 'categories'=>$categories, 'imageData'=>$imageData]);
    }
    public function postEdit(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->txtName;
        $product->slug = changeTitle($request->txtName);
        $product->cate_id = $request->sltCate;
        $product->price_import = $request->txtNhap;
        $product->price = $request->txtPrice;
        $product->price_sale = $request->txtSalePrice;
        $product->qty = $request->txtQty;
        $product->status = $request->status;
        $product->avatar = $request->avatar;
        $imageData = array();
        $urlImage = $request->image;
        if(is_array($urlImage)) {
            for($i=0; $i < count($urlImage); $i++) {
                $imageData[$i] = [
                    'url_image' => $urlImage[$i],
                ];
            }
        }
        $product->image_data = serialize($imageData);
        $product->description = $request->description;
        $product->content = $request->content;
        $product->user_id = Auth::user()->id;
        $product->seo_title = $request->txtSeoTitle;
        $product->seo_description = $request->txtSeoDescription;
        $product->seo_key_words = $request->txtSeoKeywords;
        $product->save();
        $notifySuccess = array(
            'message' => 'Chỉnh Sửa Sản Phẩm Thành Công!',  
            'alert-type' => 'success',
        );
        return redirect()->route('getListProductsAdmin')->with($notifySuccess);
    }
    public function getHotDeal()
    {
        $products = Product::where('status', 'active')->get();
        return view('admin.pages.product.hot-deal.list', ['products'=>$products]);
    }
    public function postHotDeal(Request $request)
    {
        print_r(strtotime($request->startDate));
        print_r(strtotime($request->endDate));
    }
}
