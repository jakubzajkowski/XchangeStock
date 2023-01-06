<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Euro;

class EuroApiController extends Controller
{
    public function getdata(Euro $euro){
        $cSession = curl_init(); 
        curl_setopt($cSession,CURLOPT_URL,"https://api.nbp.pl/api/exchangerates/rates/a/eur/last/10/?format=json");
        curl_setopt($cSession,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($cSession,CURLOPT_HEADER, false); 
        $result=curl_exec($cSession);
        $res = json_decode($result,true);

        $check = $euro::orderBy('date')->get();
        if ($check[count($check)-1]['date']!==$res['rates'][count($res['rates'])-1]['effectiveDate']){
            $euro->code=$res['code'];
            $euro->date=$res['rates'][count($res['rates'])-1]['effectiveDate'];
            $euro->price=$res['rates'][count($res['rates'])-1]['mid'];
            $euro->save();
        }
        return $euro::orderBy('date')->get();
    }
}
