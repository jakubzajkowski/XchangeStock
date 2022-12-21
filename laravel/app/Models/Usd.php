<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usd extends Model
{
    use HasFactory;
    protected $table = 'usd';
    public $timestamps= false;
}
