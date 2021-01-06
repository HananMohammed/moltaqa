<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
|Admin Panel Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your Admin Panel Control. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web", "auth:sanctum", "verified" middleware group. Now create something great!
|
*/

Route::get('/', function () { return view('admin.dashboard'); })->name('adminPanel');
Route::resource('about','AboutController');
Route::resource('how-work','HowWorkController');
Route::resource('screens','ScreenController');
Route::resource('advantages','AdvantageController');
