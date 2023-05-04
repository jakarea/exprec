<?php

namespace App\Http\Controllers;

use Stripe\Stripe;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Stripe::setApiKey(env('STRIPE_SECRET'));

        $customers = User::role('Customer')->join('subscriptions', 'subscriptions.user_id', '=', 'users.id')
        ->select('users.*', 'subscriptions.user_id')
        ->paginate(12);

        return view('customers.index', compact('customers'))
            ->with('i', ($request->input('page', 1) - 1) * 12);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        return view('customers.show', compact('customer', 'subscriptions', 'paymentMethods', 'paymentIntents'));
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
