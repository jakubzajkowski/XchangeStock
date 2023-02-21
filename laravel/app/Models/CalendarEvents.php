<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalendarEvents extends Model
{
    use HasFactory;
    protected $table = 'calendarevents';
    public $timestamps= false;
    public $incrementing = true;
}
