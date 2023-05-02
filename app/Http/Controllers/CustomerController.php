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
