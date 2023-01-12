<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExperienceUsers;

class RegisterController3 extends Controller
{
    public function show(){
        return view('register3');
    }
    public function getData(Request $req,ExperienceUsers $experienceusers){
        $req->validate([
            'years'=>'required|integer',
            'age'=>'required|integer',
            'currency'=>'required',
        ]);
        $experienceusers->id = session('user')['id'];
        $experienceusers->years = $req->input('years');
        $experienceusers->age = $req->input('age');
        $experienceusers->currency= $req->input('currency');
        $experienceusers->save();
        return redirect()->to('/register4');
    }
}
