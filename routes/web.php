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

Route::get('/anaseife', function () {
    return view('home._categories');
})->name('home');
Route::get('/haqqimizda', function(){
    return view('layouts.about');
})->name('about');
Route::get('/meqaleler', function(){
    return view('layouts.blogs');
})->name('blogs');
Route::get('/elaqe', function(){
    return view('layouts.contact');
})->name('contact');

