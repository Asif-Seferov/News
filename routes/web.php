<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\RoleController;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Admin\PermissionController;

//use Illuminate\Support\Facades\Auth;

//Template pages
Route::get('/anaseife', [PagesController::class, 'home'])->name('home');
Route::get('/haqqimizda', [PagesController::class, 'about'])->name('about');
Route::get('/meqaleler', [PagesController::class, 'blogs'])->name('blogs');
Route::get('/elaqe', [PagesController::class, 'contact'])->name('contact');
Route::get('/qeydiyyat', [PagesController::class, 'register'])->name('user.register');


//User route
/* Route::prefix('users')->group(function () {
    Route::get('/user', [UserController::class, 'list'])->name('users.list');
    Route::get('/register', [RegisterController::class, 'showRegisterPage'])->name('register');
    Route::post('/register', [RegisterController::class, 'registerUser']);
}); */

// admin login page
Route::get('/login', [LoginController::class, 'login_page'])->name('login');
// admin role check
Route::post('/login-check', [LoginController::class, 'login_check'])->name('login.check');

//user CRUD
Route::prefix('admin')->middleware('auth')->group(function (){
    
    //Admin panel routing
        Route::get('/home', [HomeController::class, 'index'])->name('adminhome');
        Route::get('/istifadeci-siyahisi', [HomeController::class, 'userList'])->name('user.list');
        Route::get('/logout', [LoginController::class, 'logout'])->name('admin_logout');
        //Check User role in route
        Route::middleware('role:Admin')->group(function(){

            Route::get('/istifadeci-elave-et', [HomeController::class, 'getUserAddPage'])->name('user.addPage');
            Route::post('/istifadeci', [HomeController::class, 'getUserAdd'])->name('user.add');
            
            Route::post('/user-delete', [HomeController::class, 'userDelete'])->name('user.delete');
            Route::get('/user-edit/{id}', [HomeController::class, 'userEdit'])->name('user.edit');
            Route::post('/user-update/{id}', [HomeController::class, 'userUpdate'])->name('user.update');
  
            // User role 
            
            Route::get('/user/role', [RoleController::class, 'user_role'])->name('user.role');
            Route::get('/user/role-add/page', [RoleController::class, 'user_role_add_page'])->name('user.role.add.page');
            Route::post('/user/role-add', [RoleController::class, 'user_role_add'])->name('user.role.add');
            Route::get('/user/edit-role/{id}', [RoleController::class, 'edit_user_role'])->name('edit.user.role');
            Route::post('/user/update-role/{id}', [RoleController::class, 'update_user_role'])->name('update.user.role');
            Route::post('/user/delete-role', [RoleController::class, 'delete_user_role'])->name('delete.user.role'); 

            // User permission
            Route::get('/user/permission', [PermissionController::class, 'permission_list'])->name('permission.list');
            Route::get('/user/add-permission/page', [PermissionController::class, 'add_permision_page'])->name('add.permision.page');
            Route::post('/user/add-permission', [PermissionController::class, 'add_permission'])->name('add.permission');
            Route::get('/user/edit-permission/{id}', [PermissionController::class, 'edit_permission'])->name('edit.permission');
            Route::post('/user/update-permission/{id}', [PermissionController::class, 'update_permission'])->name('update.permission');
            Route::post('/user/delete-permission', [PermissionController::class, 'delete_permission'])->name('delete.permission');
        });
   
});

