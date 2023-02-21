<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RegisterController2;
use App\Http\Controllers\RegisterController3;
use App\Http\Controllers\RegisterController4;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CalendarController;
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
Route::get('/admin', [AdminController::class, 'show'])->middleware(['auth', 'isAdmin']);
Route::get('/mail', [MailController::class,'sendMail']);
Route::get('/services', [ServicesController::class,'show']);
Route::prefix('education')->group(function () {
    Route::get('', [EducationController::class,'show']);
    Route::get('/news', [EducationController::class,'showEducationNews']);
    Route::get('/news/{title}', [EducationController::class,'showNewsPages']);
    Route::get('/calendar', [CalendarController::class,'show']);
    Route::get('/calendar/events', [CalendarController::class,'showApi']);
});
Route::get('/market', [MarketController::class,'show']);
Route::get('/market/{currency}', [MarketController::class,'showMarketPages']);
Route::get('/support', [SupportController::class,'show']);
Route::get('/aboutUs', [AboutUsController::class,'show']);
Route::get('/register', [RegisterController::class,'show']);
Route::get('/register2', [RegisterController2::class,'show']);
Route::get('/register3', [RegisterController3::class,'show']);
Route::get('/register4', [RegisterController4::class,'show']);
Route::get('/login', [LoginController::class,'show']);
Route::get('/account/{id}', [UserDashboardController::class,'show'])->middleware('auth');
Route::get('/userinfo', [UserDashboardController::class,'userInfo'])->middleware('auth');
Route::post('/account/{id}', [UserDashboardController::class,'addGraph'])->middleware('auth');
Route::get('/logout', [LogoutController::class,'logout']);
Route::post('/register', [RegisterController::class,'getData']);
Route::post('/register2', [RegisterController2::class,'getData']);
Route::post('/register3', [RegisterController3::class,'getData']);
Route::post('/register4', [RegisterController4::class,'getData']);
Route::post('/login', [LoginController::class,'getData']);
