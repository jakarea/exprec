<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdspyController extends Controller
{
    public function index()
    {
        return view('adspy/index');
    }

    public function facebook()
    {
        return view('adspy/facebook');
    } 
    public function pinterest()
    {
        return view('adspy/pinterest');
    } 
    public function tiktok()
    {
        return view('adspy/tiktok');
    } 
    public function mylist()
    {
        return view('adspy/mylist');
    }  
}
