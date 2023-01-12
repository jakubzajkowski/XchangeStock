<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InfoUsers;


class RegisterController2 extends Controller
{
    public function show(){
        return view('register2');
    }
    public function getData(Request $req,InfoUsers $infouser){
        $req->validate([
            'job'=>'',
            'person'=>'',
            'company'=>'',
            'hobby'=>'required',
        ]);
        if(!empty($req->input('job'))){
            $infouser->id = session('user')['id'];
            $infouser->job = $req->input('job');
            $infouser->person = '';
            $infouser->company = $req->input('company');
            $infouser->hobby = $req->input('hobby');
            $infouser->save();
        }else{
            if(!empty($req->input('company'))){
                $infouser->id = session('user')['id'];
                $infouser->job = '';
                $infouser->person = $req->input('person');
                $infouser->company = $req->input('company');
                $infouser->hobby = $req->input('hobby');
                $infouser->save();
            }
            else{
                $infouser->id = session('user')['id'];
                $infouser->job = '';
                $infouser->person = $req->input('person');
                $infouser->company = '';
                $infouser->hobby = $req->input('hobby');
                $infouser->save();
            }
        }
        return redirect()->to('register3');
    }
}
