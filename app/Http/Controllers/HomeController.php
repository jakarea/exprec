<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Course;
use Stripe\Stripe;
use Spatie\Permission\Models\Role;
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

    public function myProfile()
    {
        $id = Auth()->user()->id;   

         // set stripe api key
         Stripe::setApiKey(env('STRIPE_SECRET'));
         // get customer data by id and role
         $customer = User::role('Customer')->find($id);
         // get subscription data from stripe by customer stripe_id
         $subscriptions = \Stripe\Subscription::all([
             'customer' => $customer->stripe_id,
             'expand' => ['data.plan.product'], 
         ]);
         // get payment method data from stripe by customer stripe_id
         $paymentMethods = \Stripe\PaymentMethod::all([
             'customer' => $customer->stripe_id,
             'type' => 'card',
         ]);
         // get all payment list from stripe by customer stripe_id
         $paymentIntents = \Stripe\PaymentIntent::all([
             'expand' => ['data.customer'],
         ]);
 
         return view('profile/profile', compact('customer', 'subscriptions', 'paymentMethods', 'paymentIntents'));
 
    }

    public function editMyProfile($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();
    
        return view('profile/profile-edit',compact('user','roles','userRole')); 
    }

}