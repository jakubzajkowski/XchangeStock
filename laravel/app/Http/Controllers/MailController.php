<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SignUp;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail($mail,$name){
        Mail::to($mail)->send(new SignUp($name,$mail));
    }
}
