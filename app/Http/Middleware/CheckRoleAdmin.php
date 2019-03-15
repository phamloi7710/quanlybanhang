<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class CheckRoleAdmin
{
    public function handle($request, Closure $next)
    {
        if(Auth::check())
        {
            $user = Auth::user();
            if($user->is_admin == 'true'){
                return $next($request);
            }else{
                $notifyError = array(
                    'message' => 'Bạn Không Có Quyền Truy Cập Vào Trang Quản Trị! Một Email đã được gửi đi để thông báo với quản trị viên về vụ việc này!', 
                    'alert-type' => 'error',
                );
                Auth::logout();
                return redirect()->route('getLoginAdmin')->with($notifyError);
            }
        }else{
            return redirect()->route('getLoginAdmin');
        }
    }
}
