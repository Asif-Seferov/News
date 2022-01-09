<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\RoleController;
//use Illuminate\Support\Facades\Auth;



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

// admin login page
Route::get('/login', [LoginController::class, 'login_page'])->name('login');
Route::post('/login-check', [LoginController::class, 'login_check'])->name('login.check');
//user CRUD
Route::prefix('admin')->middleware('auth')->group(function (){
    //Admin panel routing
    Route::get('/home', [HomeController::class, 'index'])->name('adminhome');
    Route::get('/istifadeci-elave-et', [HomeController::class, 'getUserAddPage'])->name('user.addPage');
    Route::post('/istifadeci', [HomeController::class, 'getUserAdd'])->name('user.add');
    Route::get('/istifadeci-siyahisi', [HomeController::class, 'userList'])->name('user.list');
    Route::post('/user-delete', [HomeController::class, 'userDelete'])->name('user.delete');
    Route::get('/user-edit/{id}', [HomeController::class, 'userEdit'])->name('user.edit');
    Route::post('/user-update/{id}', [HomeController::class, 'userUpdate'])->name('user.update');

    
    Route::get('/logOut', [LoginController::class, 'logout'])->name('admin_logout');
// User role 
    Route::get('/user/role', [RoleController::class, 'user_role'])->name('user.role');
    Route::get('/user/role-add/page', [RoleController::class, 'user_role_add_page'])->name('user.role.add.page');
    Route::post('/user/role-add', [RoleController::class, 'user_role_add'])->name('user.role.add');
    Route::get('/user/edit-role/{id}', [RoleController::class, 'edit_user_role'])->name('edit.user.role');
    Route::post('/user/update-role/{id}', [RoleController::class, 'update_user_role'])->name('update.user.role');
    Route::post('/user/delete-role', [RoleController::class, 'delete_user_role'])->name('delete.user.role');
});

