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
Route::post('/giris/post',[\App\Http\Controllers\LoginController::class,'post'])->name('giris.post');

Route::get('/password',[\App\Http\Controllers\PasswordController::class,'index'])->name('password');

Route::get('/register',[\App\Http\Controllers\RegisterController::class,'index'])->name('register');
//Route::post('/register/post',[\App\Http\Controllers\RegisterController::class,'gonder'])->name('register.post');
Route::post('/register/post',[\App\Http\Controllers\RegisterController::class,'gonder'])->middleware('kotukelime')->name('register.post');

Route::get('/index',[\App\Http\Controllers\IndexController::class,'index'])->name('front.index');

Route::get('/ayarlar',[\App\Http\Controllers\AyarlarController::class,'index'])->name('ayarlar');

//Route::get('/deneme',[\App\Http\Controllers\DenemeController::class,'index'])->name('deneme');
//Route::post('/deneme/post',[\App\Http\Controllers\DenemeController::class,'gonder'])->name('deneme.gonder');



