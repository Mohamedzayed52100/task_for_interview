<?php

namespace App\Http\Controllers;
 

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class MailController extends Controller
{
    public function send(){
        Mail::to('mohamedzayed52100@gmail.com')->send(new TestMail());
        return redirect('/')->with('wait_user' , 'wait till admin make your status true and system send mail to admin to accept you');
    
    }
}
