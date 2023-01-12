<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoUsers extends Model
{
    use HasFactory;
    protected $table = 'infousers';
    public $incrementing = false;
    public $timestamps = false;
}
