<?php

namespace App\Http\Controllers\Elearning;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ElearningController extends Controller
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
