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
