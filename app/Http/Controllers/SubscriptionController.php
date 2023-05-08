<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use App\Models\User;
use Illuminate\Pagination\LengthAwarePaginator;
class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all products from stripe
        Stripe::setApiKey(env('STRIPE_SECRET'));

        // Get all subscriptions created in Stripe with pagination
        $limit = 10;
        $subscriptions = \Stripe\Subscription::all([
            'limit' => $limit,
            'expand' => ['data.customer', 'data.plan.product'],
        ]);

        $subscriptions_data = $subscriptions->data;

        while ($subscriptions->has_more) {
            $last_subscription = end($subscriptions_data);
            $next_subscriptions = \Stripe\Subscription::all([
                'limit' => $limit,
                'starting_after' => $last_subscription->id,
                'expand' => ['data.customer', 'data.plan.product'],
            ]);
            $subscriptions_data = array_merge($subscriptions_data, $next_subscriptions->data);
            $subscriptions = $next_subscriptions;
        }

        // Paginate the subscriptions data
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $itemsPerPage = $limit;
        $currentItems = array_slice($subscriptions_data, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);
        $subscriptions_paginated = new LengthAwarePaginator($currentItems, count($subscriptions_data), $itemsPerPage);
        $subscriptions_paginated->withPath('subscriptions');
        return view('subscription.index', compact('subscriptions_paginated'));
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
        Stripe::setApiKey(env('STRIPE_SECRET'));
    
        // Get subscription from Stripe by ID
        $subscription = \Stripe\Subscription::retrieve($id);
    
        // Get customer data from Stripe by customer Stripe ID
        $customer = \Stripe\Customer::retrieve($subscription->customer);
        $subscription->customer = $customer;
        // Get user associated with the customer
        $user = User::where('stripe_id', $customer->id)->first();
        $subscription->user = $user;
        // Expand plan and product information
        $subscription->plan = \Stripe\Plan::retrieve($subscription->plan->id);
        $subscription->product = \Stripe\Product::retrieve($subscription->plan->product);
    
        // Get payment method data from Stripe by default payment method ID
        $subscription->payment_method = \Stripe\PaymentMethod::retrieve($subscription->default_payment_method);
    
        // Get invoice data from Stripe by latest invoice ID
        $subscription->invoice = \Stripe\Invoice::retrieve($subscription->latest_invoice);
    
        // Get refund data for the invoice's charge if it exists
        if ($subscription->invoice->charge) {
            $refund = \Stripe\Refund::all([
                'charge' => $subscription->invoice->charge,
            ]);
            $subscription->refund = $refund->data;
        } else {
            $subscription->refund = null;
        }

        // dd($subscription);
    
        return view("subscription.show", compact('subscription'));
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function refunds(Request $request, $id)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));
        // send refund request to stripe
        $refunds = \Stripe\Refund::create([
            'charge' => $id,
        ]);
        return redirect()->back()->with('success', 'Refund request sent successfully');
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
