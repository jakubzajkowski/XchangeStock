<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\GoldApiController;
use App\Http\Controllers\Api\UsdApiController;
use App\Http\Controllers\Api\EuroApiController;
use App\Http\Controllers\Api\GbpApiController;
use App\Http\Controllers\Api\ChfApiController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/gold', [GoldApiController::class,'getdata']);
Route::get('/usd', [UsdApiController::class,'getdata']);
Route::get('/eur', [EuroApiController::class,'getdata']);
Route::get('/gbp', [GbpApiController::class,'getdata']);
Route::get('/chf', [ChfApiController::class,'getdata']);
