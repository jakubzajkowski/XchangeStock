<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class VerifyController extends Controller
{
    public function verify(Request $req,User $user){
        $req->validate([
            'email'=>'required',
            'verified_email'=>'required',
        ]);
        $update=$user::where('email',$req->input('email'));
        $update->update(['verified_email' => $req->input('verified_email')]);
        return redirect()->to('/');
    }   
}
