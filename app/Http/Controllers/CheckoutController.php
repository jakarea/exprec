<?php

namespace App\Http\Controllers;

use Auth;
use Stripe\Stripe;
use App\Models\Plan;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Stripe\Checkout\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createCheckoutSession($stripe_plan)
    {
        // Set your Stripe API secret key
        Stripe::setApiKey(env('STRIPE_SECRET'));
    
        // Get the selected plan
        $plan = Plan::findOrFail($stripe_plan);
    
        // Create a new Checkout Session
        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price' => $plan->stripe_plan,
                'quantity' => 1,
            ]],
            'mode' => 'subscription',
            'success_url' => route('checkout.success'),
            'cancel_url' => route('subscription.index'),
        ]);
        
        return redirect($session->url);
    }
     

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function checkoutSuccess()
    {
        //Set your Stripe API secret key
        Stripe::setApiKey(env('STRIPE_SECRET'));

        // Get the last subscription from stripe payment list and retrive customer email after create account
        $user = Session::all()['data'][0]['customer_details']['email'];
        $user = User::where('email', $user)->first();

        // Subscription get by subscription
        $subscription = \Stripe\Subscription::retrieve(Session::all()['data'][0]['subscription']);

        // customer get by customer
       $customer = \Stripe\Customer::retrieve(Session::all()['data'][0]['customer']);
        // dd($subscription);
        // get payment method data by customer        
        // dd(Session::all()['data'][0]);

        // if user is not null and not find in user table then create new user else update user
        if($user != null){
            $user->update([
                'name' => Session::all()['data'][0]['customer_details']['name'],
                'email' => Session::all()['data'][0]['customer_details']['email'],
                'stripe_id' => Session::all()['data'][0]['customer'],
                // 'pm_type' => Session::all()['data'][0]['payment_method_details']['card']['brand'],
                // 'pm_last_four' => Session::all()['data'][0]['payment_method_details']['card']['last4'],
                'trial_ends_at' => null,
            ]);
            // login user
            $changePassword = false;
            auth()->login($user);
        }else{
            $user = User::create([
                'name' => Session::all()['data'][0]['customer_details']['name'],
                'email' => Session::all()['data'][0]['customer_details']['email'],
                'password' => Hash::make(Str::random(24)),
                'stripe_id' => Session::all()['data'][0]['customer'],
                // 'pm_type' => Session::all()['data'][0]['payment_method_details']['card']['brand'],
                // 'pm_last_four' => Session::all()['data'][0]['payment_method_details']['card']['last4'],
                'trial_ends_at' => null,
            ]);
            // login user
            $changePassword = true;
            auth()->login($user);
        }

        // if subscription is not null and not find in subscription table then create new subscription else update subscription
        if($subscription != null){
            // user update subscription table by user id
            $subscroptionUser = DB::table('subscriptions')->where('user_id', $user->id)->first();
            if($subscroptionUser != null){
                DB::table('subscriptions')->where('user_id', $user->id)->update([
                    'name' => $subscription->plan->product,
                    'stripe_id' => $subscription->id,
                    'stripe_status' => $subscription->status,
                    'stripe_price' => $subscription->plan->id,
                    // 'stripe_plan' => $subscription->plan->id,
                    'quantity' => $subscription->quantity,
                    'trial_ends_at' => null,
                    'ends_at' => null,
                ]);
            }else {
                DB::table('subscriptions')->insert([
                    'user_id' => $user->id,
                    'name' => $subscription->plan->product,
                    'stripe_id' => $subscription->id,
                    'stripe_status' => $subscription->status,
                    'stripe_price' => $subscription->plan->id,
                    // 'stripe_plan' => $subscription->plan->id,
                    'quantity' => $subscription->quantity,
                    'trial_ends_at' => null,
                    'ends_at' => null,
                ]);
            }
        }        

        // with alert for change password
        return redirect()->route('home')->with('success', 'Your subscription has been created successfully. You are redirecting to password change page.')->with('changePassword', $changePassword);
    }    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function checkoutCancel()
    {
        return view('subscription_cancel');
    }
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
