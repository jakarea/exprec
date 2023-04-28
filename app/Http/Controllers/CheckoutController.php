<?php

namespace App\Http\Controllers;

use Stripe\Stripe;
use App\Models\Plan;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Stripe\Checkout\Session;
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
        Stripe::setApiKey('sk_test_51MyRmPIPOd0zPaLLVoU39SY8hJKkKLWSXU4y8bule6fXQuzRtInpIbdJqD4CPxvPOkzhiRefwgDy1UgEInscPT1100cKRkHxeu');
    
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
            'cancel_url' => route('checkout.cancel'),
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
        Stripe::setApiKey('sk_test_51MyRmPIPOd0zPaLLVoU39SY8hJKkKLWSXU4y8bule6fXQuzRtInpIbdJqD4CPxvPOkzhiRefwgDy1UgEInscPT1100cKRkHxeu');

        // Get the last subscription from stripe payment list and retrive customer email after create account
        $user = Session::all()['data'][0]['customer_details']['email'];
        $user = User::where('email', $user)->first();

        // if user is not null and not find in user table then create new user else update user
        if($user != null){
            $user->update([
                'name' => Session::all()['data'][0]['customer_details']['name'],
                'email' => Session::all()['data'][0]['customer_details']['email'],
                'password' => Hash::make(Str::random(24)),
                'stripe_id' => Session::all()['data'][0]['customer'],
                'pm_type' => Session::all()['data'][0]['payment_method_details']['card']['brand'],
                'pm_last_four' => Session::all()['data'][0]['payment_method_details']['card']['last4'],
                'trial_ends_at' => null,
            ]);
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
        }
        
        return view('subscription_success');
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
