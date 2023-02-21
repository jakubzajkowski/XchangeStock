<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CalendarEvents;

class CalendarController extends Controller
{
    public function show(){
        return view('education/calendar');
    }
    public function showApi(CalendarEvents $events){
        return $events::whereRaw('date > now()')->orderBy('date')->get();;
    }
}
