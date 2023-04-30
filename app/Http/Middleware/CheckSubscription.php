<?php

namespace App\Http\Middleware;

use Closure;
use Stripe\Stripe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckSubscription
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        $user = DB::table('subscriptions')->where('user_id', auth()->user()->id)->first('stripe_id');
        
        // get user who has role admin
        // $admin = User::whereHas('roles', function($q){
        //     $q->where('name', 'admin');
        // })->first();

        // if user has role admin
        // if ($admin) {
        //     return $next($request);
        // }

        if ($user && $user->stripe_id) {
            // Retrieve the customer object
            $customer = \Stripe\Customer::retrieve(auth()->user()->stripe_id);

            // Retrieve the subscription object from the customer object
            $subscription = \Stripe\Subscription::retrieve($user->stripe_id);
            // dd($subscription);
            if ($subscription->status == 'active') {
                return $next($request);
            }
            else {
                // redirect home with notification for purchase subscription
                return redirect()->route('home')->with('warning', 'Please purchase our package or your pacakge has been expired!');
            }
        }
        // auth()->logout();
        return redirect()->route('home')->with('warning', 'Please purchase our package or your pacakge has been expired!');
    }

}
