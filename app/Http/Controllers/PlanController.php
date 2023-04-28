<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;
use Laravel\Cashier\Cashier;
use Illuminate\Support\Facades\DB;

class PlanController extends Controller
{
        /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $plans = Plan::get();

        // return "we are here";
  
        return view("plans", compact("plans"));

        // $stripe = Cashier::stripe();
        // $products = $stripe->products->all();
        
        // return view('plans', [
        //     'products' => $products,
        //     'intent' => auth()->user()->createSetupIntent(),
        // ]);
    }  
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function show(Plan $plan, Request $request)
    {
        $intent = auth()->user()->createSetupIntent();
        return view("subscription", compact("plan", "intent"));
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function subscriptionStore(Request $request)
    {
        $plan = Plan::find($request->plan);

        $subscription = $request->user()->newSubscription($request->plan, $plan->stripe_plan)
                        ->create($request->token);
                          
        return view("subscription_success");
    }

    /**
     * Write code on Method
     */
    public function subscription() {
        
        $plans = Plan::get();
        
        return view("plans", compact("plans"));
    }
}
