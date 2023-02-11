<?php

namespace App\Http\Controllers;
use App\Rules\PasswordLengthRule ;
use App\Rules\BirthRule;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function show(){
        return view('register');
    }
    public function getData(Request $req,User $user){
        $req->validate([
            'email'=>'required|email',
            'country'=>'required',
            'username'=>'required|unique:users',
            'password'=>['required',new PasswordLengthRule()],
            'title'=>'required',
            'firstname'=>'required',
            'surname'=>'required',
            'birth'=>['required',new BirthRule()],
            'number'=>'required',
        ]);
        $data=$req->input();
        $user = User::create(
            [
            'email'=>$data['email'],
            'country'=>$data['country'],
            'username'=>$data['username'],
            'password'=>$data['password'],
            'title'=>$data['title'],
            'firstname'=>$data['firstname'],
            'surname'=>$data['surname'],
            'birth'=>$data['birth'],
            'number'=>$data['number'],
            'verified_email'=>"no",
            'role'=>"user",
            ]
    );
        session(['user' => $user]);
        session(['remember' => $req->input('remember')]);
        return redirect()->to('register2');
    }
}
