<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Activitylog\Models\Activity;
class SystemController extends Controller
{
    public function getActivityLogs()
    {
    	$activity = Activity::all();
    	return view('admin.pages.activity_history.list', ['activity'=>$activity]);
    }
}
