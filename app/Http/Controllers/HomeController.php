<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Course;
use App\Models\ProductResearch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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

    public function postChangePassword(Request $request)
    {
        //validate password and confirm password
        $this->validate($request, [
            'password' => 'required|confirmed|min:6|string',
        ]);

        $userId = Auth()->user()->id; 
        $user = User::where('id', $userId)->first();
        $user->password = Hash::make($request->password);
        return redirect()->route('home')->with('success', 'Your password has been changed successfully!');
    }

}
