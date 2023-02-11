<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExperienceUsers;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function show($id){
        return view('userdashboard');
    }
    public function addGraph(Request $req){
        $expUsers = ExperienceUsers::where('id', Auth::id())->first();
        if ($expUsers['graph0']!==null && $expUsers['graph1']!==null && $expUsers['graph2']!==null && $expUsers['graph3']!==null){
                $expUsers->graph0=strtolower($req->graph);
                $expUsers->save();
                return view('userdashboard');
        }
        else{
            if ($expUsers['graph0']==null){
                $expUsers->graph0=strtolower($req->graph);
                $expUsers->save();
                return view('userdashboard');
                }
                if ($expUsers['graph0']!==null && $expUsers['graph1']==null){
                    $expUsers->graph1=strtolower($req->graph);
                    $expUsers->save();
                    return view('userdashboard');
                    }
                    if ($expUsers['graph1']!==null && $expUsers['graph2']==null){
                        $expUsers->graph2=strtolower($req->graph);
                        $expUsers->save();
                        return view('userdashboard');
                        }
                        if ($expUsers['graph2']!==null && $expUsers['graph3']==null){
                            $expUsers->graph3=strtolower($req->graph);
                            $expUsers->save();
                            return view('userdashboard');
                            }
        }
            
    }
    public function userInfo(){
            $data=[];
            $expUsers = ExperienceUsers::where('id', Auth::user()->id)->first();
            array_push($data, Auth::user());
            array_push($data, $expUsers);
            return $data;
    }
}
