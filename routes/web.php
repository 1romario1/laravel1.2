<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Colombia',function(){
    return view('Colombia');
});
Route::get('/Peru',function(){
    return view('Peru');
});
Route::get('/Bolivia',function(){
    return view('Bolivia');
});
Route::get('/Mexico',function(){
    return view('Mexico');
});
Route::get('/Brasil',function(){
    return view('Brasil');
});

