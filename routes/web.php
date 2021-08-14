<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/test',function (){
   return view('admin.template');
});

Route::group(['prefix'=>'yonetim'],function (){
Route::get('/',[\App\Http\Controllers\YonetimController::class,'index'])->name('yonetim.index');
});

//Route::get('/yonetim',[\App\Http\Controllers\YonetimController::class,'index'])->name('yonetim.index');
Route::get('/giris',[\App\Http\Controllers\LoginController::class,'index'])->name('giris');
Route::get('/password',function (){
   return view('password');
})->name('password') ;


Route::get('/register',function (){
    return view('register');
})->name('register');

Route::get('/index',function (){
    return view('front.index');
});
