<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Chf;

class ChfApiController extends Controller
{
    public function getdata(Chf $chf){
        $cSession = curl_init(); 
        curl_setopt($cSession,CURLOPT_URL,"https://api.nbp.pl/api/exchangerates/rates/a/chf/last/10/?format=json");
        curl_setopt($cSession,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($cSession,CURLOPT_HEADER, false); 
        $result=curl_exec($cSession);
        $res = json_decode($result,true);
        
        $check = $chf::orderBy('date')->get();
        if ($check[count($check)-1]['date']!==$res['rates'][count($res['rates'])-1]['effectiveDate']){
            $chf->code=$res['code'];
            $chf->date=$res['rates'][count($res['rates'])-1]['effectiveDate'];
            $chf->price=$res['rates'][count($res['rates'])-1]['mid'];
            $chf->save();
        }
        return $chf::orderBy('date')->get();
    }
}
