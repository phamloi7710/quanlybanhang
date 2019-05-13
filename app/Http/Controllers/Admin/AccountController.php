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
use Illuminate\Support\Facades\Auth;
class AccountController extends Controller
{
    public function getList(Request $request)
    {
    	$users = User::where('id','>',0);
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $type = $request->type;
        $status = $request->status;
        if ($name) {
            $users->where('name', 'LIKE', '%' . $name . '%');
        }
        if ($email) {
            $users->where('email', 'LIKE', '%' . $email . '%');
        }
        if ($phone) {
            $users->where('phone', 'LIKE', '%' . $phone . '%');
        }
        if($type){
            $users->where('is_admin', $type);
        }
        if($status){
            $users->where('status', $status);
        }
        $users = $users->paginate(10)->appends($request->all())->setPath('');
    	return view('admin.pages.account.list', [
            'users' => $users,
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'type' => $type,
            'status' => $status
        ]);
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
        $user->password_value = $request->txtPassword;
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
    public function getEdit($id)
    {
        $user = User::find($id);
        return view('admin.pages.account.edit', ['user'=>$user]);
    }
    public function postEdit(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->txtName;
        $user->slug = changeTitle($request->txtName);
        $user->phone = $request->txtPhone;
        $user->gender = $request->gender;
        $user->is_admin = $request->is_admin;
        $user->avatar = $request->avatar;
        $user->status = $request->status;
        $user->save();
        $notification = array(
            'message' => 'Cập nhật tài khoản thành công!', 
            'alert-type' => 'success',
        );
        return redirect()->route('getListUsersAdmin')->with($notification);
    }
    public function getDelete(Request $request, $id)
    {
        $user = User::find($id);
        if($user->delete())  
        {
            echo "Data Deleted";
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
    public function getProfile($username)
    {
        $user = User::where('username', Auth::user()->username)->first();
        return view('admin.pages.account.profile', ['user'=>$user]);
    }
}
