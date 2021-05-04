<?php

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\Dashboardcontroller;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\Auth\RegisterController;



Route::get('/',function ()
{
   return  view('home');
})->name('home');

Route::get('/dashboard',[Dashboardcontroller::class ,'index'])->name('dashboard');
Route::get('/register',[RegisterController::class ,'index'])->name('register');
Route::post('/register',[RegisterController::class ,'store']);
Route::get('/login',[LoginController::class ,'index'])->name('login');
Route::post('/login',[LoginController::class ,'store']);
Route::post('/logout',[LogoutController::class ,'store'])->name('logout');
Route::get('/posts',[PostController::class ,'index'])->name('posts');
Route::post('/posts',[PostController::class ,'store']);

