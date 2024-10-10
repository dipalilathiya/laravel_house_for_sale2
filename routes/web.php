<?php

use App\Http\Controllers\admin_controller;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\auth_controller;
use App\Http\Controllers\usercontroller;
use Illuminate\Support\Facades\Route;

 Route::any('/register',[usercontroller::class,'register'])->name('register');
 Route::any('/login',[usercontroller::class,'login'])->name('login');
 Route::any('/index',[usercontroller::class,'index'])->name('index');
 Route::any('/about',[usercontroller::class,'about'])->name('about');
 Route::any('/conact',[usercontroller::class,'contact'])->name('contact');
 Route::any('/blog',[usercontroller::class,'blog'])->name('blog');
 Route::any('/a_tools',[admincontroller::class,'a_tools'])->name('Tools1');
 Route::any('/u_tools',[usercontroller::class,'u_tools'])->name('Tools');
 Route::any('{id}',[admincontroller::class,'at_delete'])->name('at_delete');
//  Route::any('{id}',[admincontroller::class,'at_update'])->name('at_update');
//  Route::any('/' ,function(){
//     return view('user/Tooldetails');
//  });