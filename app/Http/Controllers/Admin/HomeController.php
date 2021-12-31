<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;

class HomeController extends Controller
{
    //admin panel home page
    public function index(){
        return view('admin.index');
    }
    //admin panel login page
    public function login(){
        return view('admin.login');
    }
    //admin register page
    public function getUserAdd(){
        $roles = Role::get();
        return view('admin.users.user_add', compact('roles'));
    }
}
