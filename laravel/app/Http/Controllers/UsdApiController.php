<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usd;

class UsdApiController extends Controller
{
    public function getdata(Usd $usd){
        $cSession = curl_init(); 
        curl_setopt($cSession,CURLOPT_URL,"https://api.nbp.pl/api/exchangerates/rates/a/usd/last/10/?format=json");
        curl_setopt($cSession,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($cSession,CURLOPT_HEADER, false); 
        $result=curl_exec($cSession);
        $res = json_decode($result,true);

        $check = $usd::orderBy('date')->get();
        if ($check[count($check)-1]['date']!==$res['rates'][count($res['rates'])-1]['effectiveDate']) {
            $usd->code=$res['code'];
            $usd->date=$res['rates'][count($res['rates'])-1]['effectiveDate'];
            $usd->price=$res['rates'][count($res['rates'])-1]['mid'];
            $usd->save();
        }
        return $usd::orderBy('date')->get();
    }
}
