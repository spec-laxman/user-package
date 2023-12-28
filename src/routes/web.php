<?php

use Illuminate\Support\Facades\Route;
use SpecIndia\User\Http\Controllers\AuthController;


Route::group(['middleware'=>'web', 'namespace' => 'SpecIndia\User\Http\Controllers'],function(){
    
    Route::get('login',[AuthController::class,'index'])->name('login');
    Route::post('login',[AuthController::class,'login'])->name('login')->middleware('throttle:2,1');

    Route::get('register',[AuthController::class,'register_view'])->name('register');
    Route::post('register',[AuthController::class,'register'])->name('register')->middleware('throttle:2,1');
});

 Route::group(['middleware'=>'auth', 'namespace' => 'SpecIndia\User\Http\Controllers'],function(){

//     Route::get('home',[AuthController::class,'home'])->name('home');
     Route::get('logout',[AuthController::class,'logout'])->name('logout');
//     Route::resource('items', ItemController::class);
//     Route::get('/item', [ItemController::class, 'index']);
    
 });
    
