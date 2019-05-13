<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Contact;
use App\Model\EmailTemplate;
use App\Mail\MailNewContact;
use Illuminate\Support\Facades\Mail;
class ContactController extends Controller
{
    public function getContact()
    {
    	return view('frontend.v1.pages.contact');
    }
    public function postContact(Request $request)
    {
    	$contact = new Contact();
    	$contact->name = $request->txtName;
    	$contact->phone = $request->txtPhone;
    	$contact->email = $request->txtEmail;
    	$contact->content = $request->content;
    	$contact->save();
    	$emailAdmin = 'phamloi7710@gmail.com';
        $template = EmailTemplate::where('key','new-contact')->first();
        if(isset($template))
        {
            Mail::to($emailAdmin)->send(new MailNewContact($contact));
            
        }
        echo "<script LANGUAGE='JavaScript'>
            window.alert('Cám ơn bạn đã quan tâm đến các dự án của OSIMI. Chúng tôi sẽ liên hệ tới bạn trong thời gian sớm nhất');
            window.location.href='/';
            </script>";
    }
}
