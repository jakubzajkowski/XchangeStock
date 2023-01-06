<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Gbp;

class GbpApiController extends Controller
{
    public function getdata(Gbp $gbp){
        $cSession = curl_init(); 
        curl_setopt($cSession,CURLOPT_URL,"https://api.nbp.pl/api/exchangerates/rates/a/gbp/last/10/?format=json");
        curl_setopt($cSession,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($cSession,CURLOPT_HEADER, false); 
        $result=curl_exec($cSession);
        $res = json_decode($result,true);

        $check = $gbp::orderBy('date')->get();
        if ($check[count($check)-1]['date']!==$res['rates'][count($res['rates'])-1]['effectiveDate']){
            $gbp->code=$res['code'];
           $gbp->date=$res['rates'][count($res['rates'])-1]['effectiveDate'];
           $gbp->price=$res['rates'][count($res['rates'])-1]['mid'];
           $gbp->save();
        }
        return $gbp::orderBy('date')->get();
    }
}
