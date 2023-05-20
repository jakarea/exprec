<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Course; 
use Stripe\Stripe;
use Spatie\Permission\Models\Role;
use App\Models\ProductResearch;
use Illuminate\Support\Str;
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

         // Set Stripe API key
        Stripe::setApiKey(env('STRIPE_SECRET'));
    
        // Get customer data by ID and role
        $customer = User::role('Customer')->find($id);
    
        // Get subscription data from Stripe by customer Stripe ID
        $subscriptions = \Stripe\Subscription::all([
            'customer' => $customer->stripe_id,
            'expand' => ['data.plan.product'],
        ]);
    
        // Get payment method data from Stripe by customer Stripe ID
        $paymentMethods = \Stripe\PaymentMethod::all([
            'customer' => $customer->stripe_id,
            'type' => 'card',
        ]);
    
        // Retrieve all PaymentIntents for the specified customer with pagination
        $limit = 100;
        $paymentIntents = [];
    
        // Retrieve the first page of PaymentIntents
        $response = \Stripe\PaymentIntent::all([
            'limit' => $limit,
            'expand' => ['data.customer', 'data.payment_method'],
        ]);
    
        $paymentIntents = array_merge($paymentIntents, $response->data);
    
        // Retrieve subsequent pages of PaymentIntents
        while ($response->has_more) {
            $response = \Stripe\PaymentIntent::all([
                'limit' => $limit,
                'starting_after' => end($response->data)->id,
                'expand' => ['data.customer'],
            ]);
    
            $paymentIntents = array_merge($paymentIntents, $response->data);
        }

        // dd($paymentIntents);
    
        // Return the customers.show view with all relevant data
        return view('profile/profile', compact('customer', 'subscriptions', 'paymentMethods', 'paymentIntents')); 
    }

    public function editMyProfile($id)
    {
        $user = User::find($id);   
        return view('profile/profile-edit',compact('user'));  
    }

    public function updateMyProfile(Request $request)
    {
        // return $request->all();
        $userId = Auth()->user()->id; 
        //validate password and confirm password
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,'.$userId,
            // 'password' => 'confirmed|min:6|string',
            'thumbnail' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

       
        $user = User::where('id', $userId)->first();
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }else{
            $user->password = $user->password;
        } 

        if ($request->thumbnail) {
            $userSlug = Str::slug($user->name); 
            $imageName = $userSlug.'.'.request()->thumbnail->getClientOriginalExtension();
            request()->thumbnail->move(public_path('assets/images/user'), $imageName); 
            $user->thumbnail = $imageName;
        }

        $user->save();
        return redirect()->route('myProfile')->with('success', 'Your Profile has been Updated successfully!');
    }

    public function refund()
    {
        return view('refund/index');  
    }

    public function refundShow()
    {
        return view('refund/show');  
    }

    public function calculator()
    {
        return view('calculator/index');
    }

    public function timeline()
    {
        return view('timeline/index');
    }

}