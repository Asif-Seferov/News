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
//Template pages
Route::get('/anaseife', [PagesController::class, 'home'])->name('home');
Route::get('/haqqimizda', [PagesController::class, 'about'])->name('about');
Route::get('/meqaleler', [PagesController::class, 'blogs'])->name('blogs');
Route::get('/elaqe', [PagesController::class, 'contact'])->name('contact');
Route::get('/qeydiyyat', [PagesController::class, 'register'])->name('user.register');


//User route
Route::prefix('users')->group(function () {
    Route::get('/user', [UserController::class, 'list'])->name('users.list');
    Route::get('/register', [RegisterController::class, 'showRegisterPage'])->name('register');
    Route::post('/register', [RegisterController::class, 'registerUser']);
});


//Admin panel routing
Route::get('/admin', [HomeController::class, 'index'])->name('adminhome');
//user CRUD
Route::prefix('admin')->group(function (){
    Route::get('/istifadeci-elave-et', [HomeController::class, 'getUserAddPage'])->name('user.addPage');
    Route::post('/istifadeci', [HomeController::class, 'getUserAdd'])->name('user.add');
    Route::get('/istifadeci-siyahisi', [HomeController::class, 'userList'])->name('user.list');
    Route::post('/user-delete', [HomeController::class, 'userDelete'])->name('user.delete');
    Route::get('/user-edit/{id}', [HomeController::class, 'userEdit'])->name('user.edit');
    Route::post('/user-update/{id}', [HomeController::class, 'userUpdate'])->name('user.update');
});

