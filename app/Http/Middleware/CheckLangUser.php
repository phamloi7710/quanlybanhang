<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Lang;

class CheckLangUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = Auth::user();
        $lang = Lang::getLocale();

        $userLang = $user->lang_code;

        if($user->is_root == 1) goto end; //admin free access

        if($userLang !== $lang) {
             return redirect()->route('learningFail')->with([
                        'err_type'=>'langUser',
                        'msg'=>__('curriculum.warningLangUser')
                    ]);
        }

        end:

        return $next($request);
    }
}
