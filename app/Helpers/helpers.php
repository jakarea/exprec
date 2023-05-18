<?php

use Carbon\Carbon;
use Stripe\Stripe;
use App\Jobs\TotalStripesEarning;
use App\Jobs\StripeSubscriptionList;
use Illuminate\Support\Facades\Cache;
use App\Jobs\StripeSubscriptionRefundList;
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
    $data = $data = \App\Models\User::wherehas('roles', function ($q) {
        $q->where('name', 'Customer');
    })->where('stripe_id', '!=', '')->count();
    return $data;
}

/*
* Total number of product
* @return int
*/
function totalProduct()
{
    if(Auth::user()->hasRole('Admin')){
        $data = \App\Models\ProductResearch::count();
    }else{
        $data = \App\Models\FavoriteProduct::where('user_id',Auth::user()->id)->count();
    }
    return $data;
}

/*
* Total number of course
* @return int
*/
function totalCourse()
{
    if(Auth::user()->hasRole('Admin')){
        $data = \App\Models\Course::count();
    }else{
        $data = \App\Models\Enrollment::where('user_id',Auth::user()->id)->count();
    }
    return $data;
}


function totalProjects(){
    $data = \App\Models\Project::where('user_id',Auth::user()->id)->count();

    return $data;
}

function totalAds(){
    $user_id = Auth::user()->id;
    $data = \App\Models\Ads::where('user_ids','LIKE',"%{$user_id}%")->count();
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
    $data = 0;
    $subscriptionList = (new StripeSubscriptionList())->delay(Carbon::now()->addSeconds(3));
    $subscription = $subscriptionList->handle();
    if (count($subscription) > 0) {
        $data += count($subscription);
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
    $data = 0;
    $subscriptionList = (new StripeSubscriptionRefundList())->delay(Carbon::now()->addSeconds(3));
    $subscription = $subscriptionList->handle();
    if (count($subscription) > 0) {
        $data += count($subscription);
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
    $customer = array();
    $paidCustomer = array();
    $earnings = array();

    for ($i = 0; $i < 12; $i++) {
        $month[] = date('M', strtotime("-$i month"));

        // Check if the data is in the cache
        $customerData = Cache::get('customerData'.$i);
        $paidCustomerData = Cache::get('paidCustomerData'.$i);
        $earning = Cache::get('earning'.$i);


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

        if (!$earning) {
            $earning = 0;
            $cacheKey = 'earning'.$i;
                
            if (Cache::has($cacheKey)) {
                $earning = Cache::get($cacheKey);
            } else {
                set_time_limit(120); // Increase maximum execution time to 120 seconds
                
                $earningsData = (new TotalStripesEarning())->handle();
        
                foreach ($earningsData as $key => $value) {
                    if (date('m', $value->created) == date('m', strtotime("-$i month")) && date('Y', $value->created) == date('Y', strtotime("-$i month"))) {
                        $earning += $value->amount / 100;
                    }
                }
        
                Cache::put($cacheKey, $earning, now()->addHours(24));
            }
        }
        
        

        $customer[] = $customerData;
        $paidCustomer[] = $paidCustomerData;
        $earnings[] = $earning;
    }

    $data = [
        'month' => $month,
        'customer' => $customer,
        'paidCustomer' => $paidCustomer,
        'earnings' => $earnings
    ];

    return $data;
}

/**
 * Get first lesson by course id
 */
function getFirstLesson($courseId)
{
    $lesson = \App\Models\Lesson::where('course_id', $courseId)->orderBy('order', 'asc')->first();
    return $lesson;
}

/**
 * Get Course category ['develoment', 'design', 'marketing', 'business', 'lifestyle', 'photography']
 */
function getCourseCategory()
{
    $categories = \App\Models\Course::pluck('categories')->toArray();
    $categories = array_map('trim', $categories); // Trim whitespace from category names
    $categories = array_unique(explode(',', implode(',', $categories)));
    return $categories;
}


function is_image_exist($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    // don't download content
    curl_setopt($ch, CURLOPT_NOBODY, 1);
    curl_setopt($ch, CURLOPT_FAILONERROR, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec($ch);
    curl_close($ch);
    if($result !== FALSE)
    {
        return true;
    }
    else
    {
        return false;
    }
}
