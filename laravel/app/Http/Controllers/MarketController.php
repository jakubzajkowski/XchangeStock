<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Euro;
use App\Models\Usd;
use App\Models\Gbp;
use App\Models\Chf;
use App\Models\Gold;
use App\Models\News;

class MarketController extends Controller
{
    public function diff($value){
        $diffValue = round((($value[count($value)-2]['price']/$value[count($value)-1]['price'])-1)*100, 2);
        if(($value[count($value)-2]['price']/$value[count($value)-1]['price'])>0){
            return -$diffValue;
        }
        else{
            return $diffValue;
        }
    }
    public function diffLate($value){
        return round((($value[count($value)-10]['price']/$value[count($value)-1]['price'])-1)*100, 2);
    }
    public function power($value,$value2){
        return round($value[count($value)-1]['price']/$value2[count($value2)-1]['price'], 2);
    }
    public function color($power){
        if ($power<1){
            return 'text-danger';
        }
        if ($power>1){
            return 'text-success';
        }
    }
    public function low($currency){
        $Return=[];
        for ($i=1;$i<=10;$i++){
            array_push($Return,$currency[count($currency)-$i]['price']);
        }
        return min($Return);
    }
    public function lowGold($currency){
        $usd = Usd::orderBy('date')->get();
        $Return=[];
        for ($i=1;$i<=10;$i++){
            array_push($Return,$currency[count($currency)-$i]['price']);
        }
        return round(min($Return)/$usd[count($usd)-1]['price'],2);
    }
    public function high($currency){
        $Return=[];
        for ($i=1;$i<=10;$i++){
            array_push($Return,$currency[count($currency)-$i]['price']);
        }
        return max($Return);
    }
    public function highGold($currency){
        $usd = Usd::orderBy('date')->get();
        $Return=[];
        for ($i=1;$i<=10;$i++){
            array_push($Return,$currency[count($currency)-$i]['price']);
        }
        return round(max($Return)/$usd[count($usd)-1]['price'],2);
    }
    public function powers(){
        $euro = Euro::orderBy('date')->get();
        $usd = Usd::orderBy('date')->get();
        $gbp = Gbp::orderBy('date')->get();
        $chf = Chf::orderBy('date')->get();
        $gold = Gold::orderBy('date')->get();
        return [
            'gbp-usd'=>[$this->power($gbp,$usd),$this->power($usd,$gbp),'Gbp/Usd',$gbp,$this->high($gbp),$this->low($gbp),$this->diffLate($gbp),$this->diff($gbp),'Great Britain pound / United States Dollar'],
            'usd-eur'=>[$this->power($usd, $euro),$this->power($euro,$usd),'Usd/Eur',$usd,$this->high($usd),$this->low($usd),$this->diffLate($usd),$this->diff($usd),'United States Dollar / Euro'],
            'eur-gbp'=>[$this->power($euro,$gbp),$this->power($gbp,$euro),'Eur/Gbp',$euro,$this->high($euro),$this->low($euro),$this->diffLate($euro),$this->diff($euro), 'Euro / Great Britain pound'],
            'gbp-chf'=>[$this->power($gbp,$chf),$this->power($chf,$gbp),'Gbp/Chf',$gbp,$this->high($gbp),$this->low($gbp),$this->diffLate($gbp),$this->diff($gbp),'Great Britain pound / Confoederatio Helvetica Franc'],
            'chf-eur'=>[$this->power($chf,$euro),$this->power($euro,$chf),'Chf/Eur',$chf,$this->high($chf),$this->low($chf),$this->diffLate($chf),$this->diff($chf), 'Confoederatio Helvetica Franc / Euro'],
            'usd-chf'=>[$this->power($usd,$chf),$this->power($chf,$usd),'Usd/Chf',$usd,$this->high($usd),$this->low($usd),$this->diffLate($usd),$this->diff($usd),'United States Dollar / Confoederatio Helvetica Franc'],
            'gold-usd'=>[$this->power($gold,$usd),$this->power($usd,$gold),'Gold/Usd',$gold,$this->highGold($gold),$this->lowGold($gold),$this->diffLate($gold),$this->diff($gold), 'Gold / United States Dollar'],
            'gold-eur'=>[$this->power($gold,$euro),$this->power($euro,$gold),'Gold/Eur',$gold,$this->highGold($gold),$this->lowGold($gold),$this->diffLate($gold),$this->diff($gold), 'Gold / Euro']

        ];
    }

    public function show(){
        $Return=[];
        foreach ($this->powers() as $key => $value) {
            $currencyPowers=[$value[0],$value[1],$this->color($value[0]),$this->color($value[1]),$value[2],$value[7],$key,$value[4],$value[5],$value[6]];
            array_push($Return,$currencyPowers);
        }
        return view('market',['power'=>$Return]);
    }
    public function showMarketPages($currency){
        $news = News::where('currency',$currency)->orderBy('id')->get();
        $euro = Euro::orderBy('date')->get();
        $usd = Usd::orderBy('date')->get();
        $gbp = Gbp::orderBy('date')->get();
        $chf = Chf::orderBy('date')->get();
        $gold = Gold::orderBy('date')->get();
        return view("market/currency",[
            'power'=>$this->powers()[$currency],
            'news'=>[
                $news[0]['title'],
                $news[0]['author'],
                $news[0]['content0'],
                $news[0]['created_at']
            ]
        ]);
    }
}
