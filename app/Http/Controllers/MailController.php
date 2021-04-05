<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;
class MailController extends Controller
{
    public function send() {
        $data = array('name'=>"Alisher", "body" => "Test mail");
        Mail::send('demo', $data, function($message){
            $message->to('naiman.team@gmail.com', 'Ali Ali')
                    ->subject('My test email');
                $message->from('noname.ali111@gmail.com', 'Alisher Mukanov');
        });
        echo "Email Sent!";
    }
}
