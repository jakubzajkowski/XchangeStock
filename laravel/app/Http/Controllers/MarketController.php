<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Euro;
use App\Models\Usd;
use App\Models\Gbp;
use App\Models\Chf;
use App\Models\Gold;

class MarketController extends Controller
{
    public function diff($value){
        return round((($value[count($value)-2]['price']/$value[count($value)-1]['price'])-1)*100, 2);
    }
    public function power($value,$value2){
        return round($value[count($value)-1]['price']/$value2[count($value2)-1]['price'], 2);
    }

    public function show(Euro $euro,Usd $usd,Gbp $gbp,Chf $chf,Gold $gold){
        $euro = $euro::orderBy('date')->get();
        $usd = $usd::orderBy('date')->get();
        $gbp = $gbp::orderBy('date')->get();
        $chf = $chf::orderBy('date')->get();
        $gold = $gold::orderBy('date')->get();
        $powerGbpUsd = $this->power($gbp,$usd);
        $powerUsdGpb = $this->power($usd, $gbp);
        $powerUsdEuro = $this->power($usd, $euro);
        $powerEuroUsd = $this->power($euro,$usd);
        $powerEuroGbp = $this->power($euro,$gbp);
        $powerGbpEuro = $this->power($gbp,$euro);
        $powerGbpChf = $this->power($gbp,$chf);
        $powerChfGbp = $this->power($chf,$gbp);
        $powerChfEuro = $this->power($chf,$euro);
        $powerEuroChf = $this->power($euro,$chf);
        $powerUsdChf = $this->power($usd,$chf);
        $powerChfUsd = $this->power($chf,$usd);
        $powerChfUsd = $this->power($chf,$usd);
        $powerGoldUsd = $this->power($gold,$usd);
        $powerUsdGold = $this->power($usd,$gold);
        $powerGoldEuro = $this->power($gold,$euro);
        $powerEuroGold = $this->power($euro,$gold);

        function color($power){
            if ($power<1){
                return 'text-danger';
            }
            if ($power>1){
                return 'text-success';
            }
        }

        return view('market',['power'=>
        [
        'power0'=>[$powerUsdEuro,$powerEuroUsd,color($powerUsdEuro),color($powerEuroUsd),'Usd/Euro', $this->diff($usd)],
        'power1'=>[$powerGbpUsd,$powerUsdGpb,color($powerGbpUsd),color($powerUsdGpb),'Gbp/Usd',$this->diff($gbp)],
        'power2'=>[$powerEuroGbp,$powerGbpEuro,color($powerGbpEuro),color($powerEuroGbp),'Euro/Gbp',$this->diff($euro)],
        'power3'=>[$powerGbpChf,$powerChfGbp,color($powerChfGbp),color($powerGbpChf),'Gbp/Chf',$this->diff($gbp)],
        'power4'=>[$powerChfEuro,$powerEuroChf,color($powerEuroChf),color($powerChfEuro),'Chf/Euro',$this->diff($chf)],
        'power5'=>[$powerUsdChf,$powerChfUsd,color($powerChfUsd),color($powerUsdChf),'Usd/Chf',$this->diff($usd)],
        'power6'=>[$powerGoldUsd,$powerUsdGold,color($powerGoldUsd),color($powerUsdGold),'Gold/Usd',$this->diff($gold)],
        'power7'=>[$powerGoldEuro,$powerEuroGold,color($powerGoldEuro),color($powerEuroGold),'Gold/Euro',$this->diff($gold)],
        ]
    ]);
    }
}
