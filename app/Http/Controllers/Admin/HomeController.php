<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;



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
    public function getUserAddPage(){
        $roles = Role::get();
        return view('admin.users.user_add', compact('roles'));
    }
    //add users
    public function getUserAdd(Request $request){
        try{
            $name = $request->name;
            $surname = $request->surname;
            $email = $request->email;
            $password = $request->password;
            $roLId = $request->roLId;
            $userStatus = $request->user_status;

            $user = new User();
            $user->name = $name;
            $user->surname = $surname;
            $user->email = $email;
            $user->password = Hash::make($password);
            $user->roLId = $roLId;
            $user->user_status = $userStatus == 'on' ? 'on' : 'off';
            $user->save();

            Toastr::success('İstifadəçi uqurla əlavə olundu', 'Uqurlu');
            return redirect()->back();
        }catch(\Exception $e){
            Toaster::error('İstifadəçi əlavə olunarkən xəta baş verdi');
            return redirect()->back();
        }  
    }
    //list users
    public function userList(){
        $userLists = User::all();
        return view('admin.users.user_list', compact('userLists'));
    }
     
}
