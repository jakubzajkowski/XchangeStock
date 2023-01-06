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
        $user = User::create(request(['email', 'country','username','password','title','firstname','surname','birth','number']));
        auth()->login($user);
        return redirect()->to('/');
    }
}
