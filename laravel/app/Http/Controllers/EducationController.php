<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class EducationController extends Controller
{
    private $newsArray=[];
    public function show(){
        return view('education/education');
    }
    public function showEducationNews(){
        $news = News::orderBy('created_at')->groupBy('title')->get();
        foreach($news as $value){
            array_push($this->newsArray, $value);
        };
        return view('education/news', ['news'=>array_reverse($this->newsArray)]);
    }
    public function showNewsPages($title){
        $newsTable = News::where('title',str_replace("-"," ",$title))->orderBy('id')->get();
        return view('education/newsPages', ['news'=>$newsTable[0]]);

    }
}
