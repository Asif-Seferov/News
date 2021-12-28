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
        return view('layouts.about');
    }
    //blogs page
    public function blogs(){
        return view('layouts.blogs');
    }
    //contact page
    public function contact(){
        return view('layouts.contact');
    }

}
