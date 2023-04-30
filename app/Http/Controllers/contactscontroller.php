<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class contactscontroller extends Controller
{
    public function send(Request $request)
    {
        $firstname = $request->firstname;
        $lastname = $request->lastname;
        $fullname="$firstname $lastname";
        $subject = $request->subject;
        $messagee = $request->message;
        $useremail = $request->useremail;


        $email="kvtcsrilanka@yahoo.co.in";
        

        Mail::raw($messagee, function ($message) use ($email,$useremail,$fullname,$messagee){
            $message->to($email)
                    ->subject('New Student Inquery')
                    ->from($useremail,$fullname);
        });


        
        return redirect('/');
        }
        
}
