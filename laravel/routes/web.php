<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\RegisterController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class,'show']);
Route::get('/services', [ServicesController::class,'show']);
Route::get('/education', [EducationController::class,'show']);
Route::get('/market', [MarketController::class,'show']);
Route::get('/support', [SupportController::class,'show']);
Route::get('/aboutUs', [AboutUsController::class,'show']);
Route::get('/register', [RegisterController::class,'show']);
Route::post('/register', [RegisterController::class,'getData']);
