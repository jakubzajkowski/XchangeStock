<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExperienceUsers extends Model
{
    use HasFactory;
    protected $table = 'experienceusers';
    public $incrementing = false;
    public $timestamps = false;
}
