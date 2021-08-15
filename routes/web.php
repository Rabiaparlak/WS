<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/test',function (){
   return view('admin.template');
});



Route::get('/yonetim',[\App\Http\Controllers\YonetimController::class,'index'])->name('yonetim.index');

Route::get('/giris',[\App\Http\Controllers\LoginController::class,'index'])->name('giris');

Route::get('/password',[\App\Http\Controllers\PasswordController::class,'index'])->name('password');

Route::get('/register',[\App\Http\Controllers\RegisterController::class,'index'])->name('register');

Route::get('/index',[\App\Http\Controllers\IndexController::class,'index'])->name('front.index');


