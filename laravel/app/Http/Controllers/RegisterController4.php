<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mail\SignUp;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\MailController;
use App\Models\User;

class RegisterController4 extends Controller
{
    public function show(){
        return view('register4');
    }
    public function getData(Request $req){
        $mail = new MailController();
        $mail->sendMail(session('user')['email'],session('user')['username']);
        if (session('remember')=='on'){
            Auth::login(session('user'));
            return redirect()->to('/account/'.session('user')['id']);
        }
        else{
            return redirect()->to('/');
        }
    }
}
