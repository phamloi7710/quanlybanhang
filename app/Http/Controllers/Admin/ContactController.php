<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Contact;
class ContactController extends Controller
{
    public function getContact(Request $request)
    {
    	
    	if(request()->has('status'))
    	{
    		$contacts = Contact::where('status', request('status'))->paginate(10)->appends('status', request('status'));
    	}
    	else
    	{
    		$contacts = Contact::paginate(10);
    	}
    	return view('admin.pages.contact.list', ['contacts' => $contacts]);
    }
    public function postContact(Request $request, $id)
    {
    	$contact = Contact::find($id);
    	// echo "<pre>";
    	// print_r($contact);
    	// exit();
    	$contact->status = $request->status;
    	$contact->save();
    	$notification = array(
            'message' => 'Cập Nhật Trạng Thái Liên Hệ Thành Công!', 
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }
    public function deleteContact(Request $request, $id)
    {
    	$contact = Contact::find($id);
    	if($contact->delete())	
    	{
    		echo "Data Deleted";
    	}
    }
}
