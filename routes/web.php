<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\PagesController;


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

Route::get('/anaseife', [PagesController::class, 'home'])->name('home');
Route::get('/haqqimizda', [PagesController::class, 'about'])->name('about');
Route::get('/meqaleler', [PagesController::class, 'blogs'])->name('blogs');
Route::get('/elaqe', [PagesController::class, 'contact'])->name('contact');


//Admin panel routing
Route::get('/admin', [HomeController::class, 'index'])->name('adminhome');
