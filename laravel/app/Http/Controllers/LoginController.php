<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function show(){
        return view('login',['error'=>'']);
    }
    public function getData(Request $req,User $user){
        $credentials = $req->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
        $remember = $req->input('remember');
 
        if (Auth::attempt($credentials)) {
            $req->session()->regenerate();
 
            return redirect("account/".Auth::user()->id);;
        }
        return view('login',['error'=>'Username or password is wrong']);
    }
}
