<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Euro;
use App\Models\Usd;
use App\Models\Gbp;
use App\Models\Chf;

class HomeController extends Controller
{
    public function show(Euro $euro,Usd $usd,Gbp $gbp,Chf $chf){
        string : $euro = $euro::orderBy('date')->get();
        $usd = $usd::orderBy('date')->get();
        $gbp = $gbp::orderBy('date')->get();
        $chf = $chf::orderBy('date')->get();
        $powerGbpUsd = round($gbp[count($gbp)-1]['price']/$usd[count($usd)-1]['price'], 2);
        $powerUsdEuro = round($usd[count($usd)-1]['price']/$euro[count($euro)-1]['price'], 2);
        $powerEuroGbp = round($euro[count($euro)-1]['price']/$gbp[count($gbp)-1]['price'], 2);
        $powerUsdGbp = round($usd[count($usd)-1]['price']/$gbp[count($gbp)-1]['price'], 2);
        $powerGbpEuro = round($gbp[count($gbp)-1]['price']/$euro[count($euro)-1]['price'], 2);
        $powerGbpChf = round($gbp[count($gbp)-1]['price']/$chf[count($chf)-1]['price'], 2);
        $powerChfEuro = round($chf[count($chf)-1]['price']/$euro[count($euro)-1]['price'], 2);
        $powerUsdChf = round($usd[count($usd)-1]['price']/$chf[count($chf)-1]['price'], 2);
        function color($power){
            if ($power<1){
                return 'text-danger';
            }
            if ($power>1){
                return 'text-success';
            }
        }
        return view('home',
        [
        'power'=>
            [
            'power0'=>[$powerUsdEuro,color($powerUsdEuro),'Usd/Euro'],
            'power1'=>[$powerGbpUsd,color($powerGbpUsd),'Gbp/Usd'],
            'power2'=>[$powerEuroGbp,color($powerEuroGbp),'Euro/Gbp'],
            'power3'=>[$powerUsdGbp,color($powerUsdGbp),'Usd/Gbp'],
            'power4'=>[$powerGbpEuro,color($powerGbpEuro),'Gbp/Euro'],
            'power5'=>[$powerGbpChf,color($powerGbpChf),'Gbp/Chf'],
            'power6'=>[$powerChfEuro,color($powerChfEuro),'Chf/Euro'],
            'power7'=>[$powerUsdChf,color($powerUsdChf),'Usd/Chf'],
            'power8'=>[$powerGbpEuro,color($powerGbpEuro),'Gbp/Euro'],
            'power9'=>[$powerGbpEuro,color($powerGbpEuro),'Gbp/Euro'],
            ]
        ]);
    }
}
