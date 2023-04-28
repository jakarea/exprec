<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Course;
use App\Models\ProductResearch;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    { 
        $userCount = User::count(); 
        $productsCount = ProductResearch::count(); 
        $courseCount = Course::count(); 
        return view('index',compact('userCount','productsCount','courseCount'));
    }
    public function changePassword()
    {
        $userId = Auth()->user()->id; 
        $user = User::where('id', $userId)->first();
        return view('profile/change-password',compact('user'));
    }
     
}
