<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //home page
    public function home(){
        return view('home._categories');
    }
    //about page
    public function about(){
        return view('pages.about');
    }
    //blogs page
    public function blogs(){
        return view('pages.blogs');
    }
    //contact page
    public function contact(){
        return view('pages.contact');
    }
    //register page
    public function register(){
        return view('pages.register');
    }

}
