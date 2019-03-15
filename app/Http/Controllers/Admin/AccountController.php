<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
class AccountController extends Controller
{
    public function getList(Request $request)
    {
    	if(request()->has('is_admin'))
    	{
    		$users = User::where('is_admin', request('is_admin'))->paginate(10)->appends('is_admin', request('is_admin'));
    	}
    	else
    	{
    		$users = User::paginate(10);
    	}
    	return view('admin.pages.account.list', ['users' => $users]);
    }
    public function getAdd()
    {
    	return view('admin.pages.account.add');
    }
}
