<?php

namespace App\Http\Middleware;

use Closure;
use Stripe\Stripe;
use App\Models\User;
use App\Models\Refund;
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
        if (! auth()->user()) {
            return redirect()->route('login');
        }

        // get user who has role admin
        $admin = User::whereHas('roles', function($q){
            $q->where('name', 'admin');
        })->first();
        
        // if user has role admin
        if ($admin) {
            return $next($request);
        }
        
        Stripe::setApiKey(env('STRIPE_SECRET'));

        if (! auth()->user()->stripe_id) {
            return redirect()->route('home')->with('warning', 'Please purchase our package or your package has been expired!');
        }

        $user = DB::table('subscriptions')->where('user_id', auth()->user()->id)->first('stripe_id');
        $refund = Refund::where('user_id', auth()->user()->id)->first();

        if ($refund && $refund->status == 'approved') {
            return redirect()->route('home')->with('warning', 'Your package has been refunded. Please contact support for further assistance.');
        }
        
        $user = DB::table('subscriptions')->where('user_id', auth()->user()->id)->first('stripe_id');
        
        // if user has role customer
        if ($user && $user->stripe_id) {
            // Retrieve the customer object
            $customer = \Stripe\Customer::retrieve(auth()->user()->stripe_id);
        
            // Retrieve the subscription object from the customer object
            $subscription = \Stripe\Subscription::retrieve($user->stripe_id);
        
            // Check if subscription is active, canceled, or unpaid
            if ($subscription->status == 'active' || $subscription->status != 'canceled' || $subscription->status != 'unpaid') {
                return $next($request);
            } else if ($subscription->status == 'canceled' || $subscription->status == 'unpaid') {
                return redirect()->route('home')->with('warning', 'Your subscription has been canceled or unpaid. Please purchase a new package or contact support for further assistance.');
            } else {
                return redirect()->route('home')->with('warning', 'Your package has expired. Please purchase a new package or contact support for further assistance.');
            }
        }
        
        return redirect()->route('home')->with('warning', 'Please purchase our package to access this page.');
        
    }

}
