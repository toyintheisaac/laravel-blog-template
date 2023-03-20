<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index(){
        return view('index');
    }
    public function profile(){
        return view('profile');
    } 
    public function password_change(){
        return view('change-password');
    } 

}
