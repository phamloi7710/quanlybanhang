<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Session;
class AuthenticationController extends Controller
{
    public function getLogin(){
    	return view('admin.pages.authentication.login');
    }
    public function postLogin(Request $request){
        $remember = (Input::has('remember')) ? true : false;
    	$data = [
            'username' => $request->txtUsername,
            'password' => $request->txtPassword,
        ];
    	if(Auth::attempt($data)){
            $notifySuccess = array(
                'message' => 'Đăng Nhập Thành Công',  
                'alert-type' => 'success',
            );
    		return redirect()->route('getIndexAdmin')->with($notifySuccess);
    	}
    	else{
    		$notifyError = array(
                'message' => 'Đăng Nhập Không Thành Công', 
                'alert-type' => 'error',
            );
    		return redirect()->back()->with($notifyError);;
    	}
    }
    public function getLogout() {
       Auth::logout();
       return redirect(\URL::previous());
    }
}
