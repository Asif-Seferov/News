<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
//use Brian2694\Toastr\Facades\Toastr;
class LoginController extends Controller
{
    //login page
    public function login_page(){
        return view('admin.login.login');
    }
    //login form check 
    public function login_check(Request $request){ //$_POST[""]
        if($request->isMethod('post')){
            $credentials = $request->only('email', 'password');
            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);
            if(Auth::attempt($credentials)){
                $request->session()->regenerate();
                //Toastr::success('Girişiniz təsdiqlənmişdir', 'Uğurlu');
                return redirect()->route('adminhome');
                
            }
            return back()->withErrors([
                'email'=>'Daxil etdiyiniz email və ya şifrə yanlışdır.',
            ]);
        }
        else{
            return view('admin.login.login');
        }
    }
    //admin logout
    public function logout(Request $request){
        

      
         Auth::logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');  
    }
}
