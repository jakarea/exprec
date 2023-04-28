<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Stripe\Stripe;
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
        Stripe::setApiKey('sk_test_51MyRmPIPOd0zPaLLVoU39SY8hJKkKLWSXU4y8bule6fXQuzRtInpIbdJqD4CPxvPOkzhiRefwgDy1UgEInscPT1100cKRkHxeu');

        $user = $request->user();

        if ($user && $user->stripe_id) {
            // $subscription = \Stripe\Subscription::retrieve('');
            // get subscription by user stripe id
            // $subscription = \Stripe\Subscription::retrieve($user->stripe_id);
            
            // if ($subscription->status == 'active') {
                return $next($request);
            // }
        }
        auth()->logout();
        return redirect()->route('subscription.index');
    }

}
