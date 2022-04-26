<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('my-captcha', [\App\Http\Controllers\HomeController::class,'myCaptcha'])->name('myCaptcha');
Route::post('my-captcha', [\App\Http\Controllers\HomeController::class,'myCaptchaPost'])->name('myCaptcha.post');
Route::get('refresh_captcha', [\App\Http\Controllers\HomeController::class,'refreshCaptcha'])->name('refresh_captcha');
