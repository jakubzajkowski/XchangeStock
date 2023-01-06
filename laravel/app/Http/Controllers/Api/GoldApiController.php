<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gold;
class GoldApiController extends Controller
{
    public function getdata(Gold $gold){
        $cSession = curl_init(); 
        curl_setopt($cSession,CURLOPT_URL,"http://api.nbp.pl/api/cenyzlota/last/30/?format=json");
        curl_setopt($cSession,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($cSession,CURLOPT_HEADER, false); 
        $result=curl_exec($cSession);
        $res = json_decode($result,true);

        $check = $gold::orderBy('date')->get();
        if ($check[count($check)-1]['date']!==$res[count($res)-1]['data']) {
            $gold->date=$res[count($res)-1]['data'];
            $gold->price=$res[count($res)-1]['cena'];
            $gold->save();
        }
        return $gold::orderBy('date')->get();
    }
}
