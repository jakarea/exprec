<?php

use Stripe\Stripe;
use Illuminate\Support\Facades\Cache;
/**
 * Created by Md Ariful Islam.
 * this is a helper file for global function that can be used in any where
 */

 /* @param string $apiKey
 */
 Stripe::setApiKey(env('STRIPE_SECRET'));

 /**
  * Get all the customer from user table
  */
function getCustomer()
{
    $customer = \App\Models\User::wherehas('roles', function ($q) {
        $q->where('name', 'Customer');
    })->get();
    return $customer;
}

/*
* Total number of customer
* @return int
*/
function totalCustomer()
{
    $data = getCustomer()->count();
    return $data;
}

/*
* Total number of paid customer
* @return int
*/
function totalPaidCustomer()
{
    $data = getCustomer()->count();
    return $data;
}

/*
* Total number of product
* @return int
*/
function totalProduct()
{
    $data = \App\Models\ProductResearch::count();
    return $data;
}

/*
* Total number of course
* @return int
*/
function totalCourse()
{
    $data = \App\Models\Course::count();
    return $data;
}

/*
* Total number of tools
* @return int
*/
function totalTools()
{
    $data = \App\Models\Interest::count();
    return $data;
}

/*
* Total number of subscription
* @return int
*/
function totalSubscription()
{
    // get all subscription from stripe
    $stripe = new \Stripe\StripeClient( env('STRIPE_SECRET') );
    $subscription = $stripe->subscriptions->all();
    $data = count($subscription->data);
    while ($subscription->has_more) {
        $subscription = $stripe->subscriptions->all(['starting_after' => $subscription->data[count($subscription->data) - 1]->id]);
        $data += count($subscription->data);
    }
    return $data;
}

/*
* Total number of subscription refund
* @return int
*/
function totalSubscriptionRefund()
{
    // get all subscription from stripe
    $stripe = new \Stripe\StripeClient( env('STRIPE_SECRET') );
    $subscription = $stripe->refunds->all();
    $data = count($subscription->data);
    while ($subscription->has_more) {
        $subscription = $stripe->refunds->all(['starting_after' => $subscription->data[count($subscription->data) - 1]->id]);
        $data += count($subscription->data);
    }
    return $data;
}

/**
 * Dynamic Apex Chart Data
 * Total Subscription, Customer, Paid Customer, Refund
 */
function dynamicChartData()
{
   // Get Subscription, Customer, Paid Customer, Refund Based on monthly also need 12 month name for label data
    $month = array();
    $subscription = array();
    $customer = array();
    $paidCustomer = array();
    $refund = array();

    for ($i = 0; $i < 12; $i++) {
        $month[] = date('M', strtotime("-$i month"));

        // Check if the data is in the cache
        $subscriptionData = Cache::get('subscriptionData'.$i);
        $customerData = Cache::get('customerData'.$i);
        $paidCustomerData = Cache::get('paidCustomerData'.$i);
        $refundData = Cache::get('refundData'.$i);

        if (!$subscriptionData) {
            // If the data is not in the cache, send an API request to retrieve it and store it in the cache
            $stripe = new \Stripe\StripeClient( env('STRIPE_SECRET') );
            $subscriptionData = $stripe->subscriptions->all(['limit' => 1000, 'created' => ['gte' => strtotime(date('Y-m-01 00:00:00', strtotime("-$i month"))), 'lte' => strtotime(date('Y-m-t 23:59:59', strtotime("-$i month")))]])->count();
            Cache::put('subscriptionData'.$i, $subscriptionData, now()->addHours(24));
        }

        if (!$customerData) {
            $customerData = \App\Models\User::wherehas('roles', function ($q) {
                $q->where('name', 'Customer');
            })->whereMonth('created_at', date('m', strtotime("-$i month")))->whereYear('created_at', date('Y', strtotime("-$i month")))->count();
            Cache::put('customerData'.$i, $customerData, now()->addHours(24));
        }

        if (!$paidCustomerData) {
            $paidCustomerData = \App\Models\User::wherehas('roles', function ($q) {
                $q->where('name', 'Customer');
            })->where('stripe_id', '!=', null)->whereMonth('created_at', date('m', strtotime("-$i month")))->whereYear('created_at', date('Y', strtotime("-$i month")))->count();
            Cache::put('paidCustomerData'.$i, $paidCustomerData, now()->addHours(24));
        }

        if (!$refundData) {
            $stripe = new \Stripe\StripeClient( env('STRIPE_SECRET') );
            $refundData = $stripe->refunds->all(['limit' => 1000, 'created' => ['gte' => strtotime(date('Y-m-01 00:00:00', strtotime("-$i month"))), 'lte' => strtotime(date('Y-m-t 23:59:59', strtotime("-$i month")))]])->count();
            Cache::put('refundData'.$i, $refundData, now()->addHours(24));
        }

        $subscription[] = $subscriptionData;
        $customer[] = $customerData;
        $paidCustomer[] = $paidCustomerData;
        $refund[] = $refundData;
    }

    $data = [
        'month' => $month,
        'subscription' => $subscription,
        'customer' => $customer,
        'paidCustomer' => $paidCustomer,
        'refund' => $refund,
    ];

    return $data;
}