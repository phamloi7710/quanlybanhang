<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function getList()
    {
    	return view('admin.pages.product.list');
    }
    public function getAdd()
    {
    	return view('admin.pages.product.add');
    }
}
