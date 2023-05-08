<?php

namespace App\Http\Controllers;

use Stripe\Stripe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;

class CustomerSubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        Stripe::setApiKey(env('STRIPE_SECRET'));

        $user = User::where('email', Auth::user()->email)->first();
        $subscription_id  = DB::table('subscriptions')->where('user_id', $user->id)->first();  
        if ( !empty($subscription_id) ) {
            $subscriptions = \Stripe\Subscription::retrieve(['id' => $subscription_id->stripe_id,]);
            $subscriptions->user = $user;
            $subscriptions->plan = \Stripe\Plan::retrieve(['id' => $subscriptions->plan->id,]);
            $subscriptions->plan->product = \Stripe\Product::retrieve(['id' => $subscriptions->plan->product,]);
            
            return view('subscription.customer.index', compact('subscriptions'));
        }
        else
        {
            return redirect()->back()->with('error', 'You have not subscribed to any plan yet.');
        }
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
