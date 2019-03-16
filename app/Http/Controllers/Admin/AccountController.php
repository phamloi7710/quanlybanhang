<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Requests\User\AddUserRequest;
use Validator;
use Hash;
use Session;
use Illuminate\Support\Facades\Input;
use App\Model\EmailTemplate;
use Illuminate\Support\Facades\Mail;
use App\Mail\ChangePassword;
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
    public function postAdd(Request $request)
    {
        $user = new User();
        $user->name = $request->txtName;
        $user->slug = changeTitle($request->txtName);
        $user->username = $request->txtUsername;
        $user->email = $request->txtEmail;
        $user->phone = $request->txtPhone;
        $user->gender = $request->gender;
        $user->password = bcrypt($request->txtPassword);
        $user->is_admin = $request->is_admin;
        $user->avatar = $request->avatar;
        $user->status = $request->status;
        $rules = array('txtEmail' => 'unique:users,email');
        $input_email['txtEmail'] = Input::get('txtEmail');
        $validator_email = Validator::make($input_email, $rules);
        if ($validator_email->fails()) {
            $notifyError = array(
                'message' => 'Địa chỉ email đã tồn tại!',  
                'alert-type' => 'error',
            );
            return redirect()->back()->withErrors($validator_email)->withInput()->with($notifyError);
        }else{
            $user->save();
            $notification = array(
                'message' => 'Thêm mới tài khoản thành công!', 
                'alert-type' => 'success',
            );
            return redirect()->route('getListUsersAdmin')->with($notification);
        }
    }
    public function getChangePassword($id)
    {
        $user = User::find($id);
        return view('admin.pages.account.change_pass', ['user'=>$user]);
    }
    public function postChangePassword(Request $request, $id)
    {
        $user = User::find($id);
        $passwordValue = $request->txtReNewPass;
        $user->password_value = $passwordValue;
        $user->password = bcrypt($passwordValue);
        
        $user->save();
        $template = EmailTemplate::where('key','changed-password')->first();
        if(isset($template))
        {
            Mail::to($user->email)->send(new ChangePassword($user));
            Session::flash('success', 'Mật khẩu mới đã được gửi đến Email tài khoản này!');
        }
        else{
            Session::flash('success', 'Khôi phục mật khẩu thành công ! Mật khẩu mới của tài khoả này là:');
        }        
        return redirect()->back();
    }
}
