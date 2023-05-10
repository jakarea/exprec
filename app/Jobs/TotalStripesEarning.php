<?php

namespace App\Jobs;

use Stripe\Stripe;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class TotalStripesEarning implements ShouldQueue
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
        // get total earning from stripe
        Stripe::setApiKey(env('STRIPE_SECRET'));
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        $limit = 100;
        $earnings = [];
        $starting_after = null;
        
        do {
            $params = [
                'limit' => $limit,
                'expand' => ['data.source'],
            ];
            if ($starting_after) {
                $params['starting_after'] = $starting_after;
            }
            $response = $stripe->balanceTransactions->all($params);
            if (count($response->data) > 0) {
                $starting_after = end($response->data)->id;
                $earnings = array_merge($earnings, $response->data);
            }
        } while ($response->has_more);
        
        return $earnings;
        

    }
}
