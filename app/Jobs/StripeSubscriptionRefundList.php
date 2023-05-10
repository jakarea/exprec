<?php

namespace App\Jobs;

use Stripe\Stripe;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class StripeSubscriptionRefundList implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // get subscription refund list
        Stripe::setApiKey(env('STRIPE_SECRET'));
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        $limit = 100;
        $refunds = [];
        $starting_after = null;

        do {
            $params = [
                'limit' => $limit,
            ];
            if ($starting_after) {
                $params['starting_after'] = $starting_after;
            }
            $response = $stripe->refunds->all($params);
            if (count($response->data) > 0) {
                $starting_after = end($response->data)->id;
                $refunds = array_merge($refunds, $response->data);
            }
        } while ($response->has_more);
        
        return $refunds;
    }
}
