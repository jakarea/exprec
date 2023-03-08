<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        return view('course/index');
    }
    public function mylearning()
    {
        return view('course/mylearning-2');
    }
    public function suggested()
    {
        return view('course/suggested');
    }
}
