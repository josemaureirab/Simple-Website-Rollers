<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use App\Mail\SendEmail;

class MailController extends Controller
{
    public function index()
    {
        return view("mail.mail");
    }

    public function sendemail(Request $get)
    {
        $this->validate($get,[
            "name" => "required",
            "email" => "required",
            "subject" => "required",
            "message" => "required",
        ]);

        $name = $get->name;
        $email = $get->email;
        $subject = $get->subject;
        $message = $get->message;

        Mail::to("omar.carrasco@usach.cl")->send( new SendEmail($name, $email, $subject, $message) );
        Mail::to("guillermo.campos@usach.cl")->send( new SendEmail($name, $email, $subject, $message) );
        Mail::to("jose.maureira.b@usach.cl")->send( new SendEmail($name, $email, $subject, $message) );
        Mail::to("eduardo.pailemilla@usach.cl")->send( new SendEmail($name, $email, $subject, $message) );
        Session::flash("success");
        
        return back();
    }
}
