<?php

namespace App\Http\Controllers;

use Stripe\Stripe;
use App\Models\User;
use App\Models\Refund;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RefundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all refunds from database
        $refunds = Refund::latest()->paginate(12);
        return view('refunds.index', compact('refunds'))
            ->with('i', (request()->input('page', 1) - 1) * 12);
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
        $request->validate([
            'reason' => 'required',
        ]);

        $user = Refund::where('user_id', Auth::user()->id)->where('charge_id', $request->charge_id)->first();
        if ($user) {
            return redirect()->back()->with('error', 'You have already requested a refund for this charge');
        }
        else{        
            $refunds = new Refund();
            $refunds->user_id = Auth::user()->id;
            $refunds->charge_id = $request->charge_id;
            $refunds->amount = $request->amount;
            $refunds->product_name = $request->product_name;
            $refunds->reason = $request->reason;
            $refunds->status = 'pending';
            $refunds->save();
        }

        return redirect()->back()
            ->with('success', 'Refund request sent successfully.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function cancel(Request $request)
    {
        //
        $user = Refund::where('user_id', Auth::user()->id)->where('charge_id', $request->charge_id)->first();
        if ($user) {
            return redirect()->back()->with('error', 'You have already requested a refund for this charge');
        }
        else{        
            $refunds = new Refund();
            $refunds->type = 'cancel';
            $refunds->user_id = Auth::user()->id;
            $refunds->charge_id = $request->charge_id;
            $refunds->amount = $request->amount;
            $refunds->product_name = $request->product_name;
            $refunds->reason = $request->reason;
            $refunds->status = 'pending';
            $refunds->save();
        }

        return redirect()->back()
            ->with('success', 'Cancel request sent successfully.');
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
        Stripe::setApiKey(env('STRIPE_SECRET'));

        $refund = Refund::find($id);

        // Get subscription from Stripe by $refund->charge_id
        $subscription = \Stripe\Subscription::all([
            'customer' => $refund->user->stripe_id,
        ]);
        $subscription = $subscription->data[0];

        $customer = \Stripe\Customer::retrieve($subscription->customer);
        $subscription->customer = $customer;

        // Get user associated with the customer
        $user = User::where('stripe_id', $customer->id)->first();
        $subscription->user = $user;

        $subscription->plan = \Stripe\Plan::retrieve($subscription->plan->id);
        $subscription->product = \Stripe\Product::retrieve($subscription->plan->product);
    
        // Get payment method data from Stripe by default payment method ID
        $subscription->payment_method = \Stripe\PaymentMethod::retrieve($subscription->default_payment_method);
    
        // Get invoice data from Stripe by latest invoice ID
        $subscription->invoice = \Stripe\Invoice::retrieve($subscription->latest_invoice);
    
        // Get refund data for the invoice's charge if it exists
        if ($subscription->invoice->charge) {
            $refunds = \Stripe\Refund::all([
                'charge' => $subscription->invoice->charge,
            ]);
            $subscription->refunds = $refunds->data;
        } else {
            $subscription->refunds = null;
        }

        // dd($subscription);

        return view('refunds.show', compact('refund', 'subscription'));
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
    public function approve(Request $request, $id)
    {
        //
        Stripe::setApiKey(env('STRIPE_SECRET'));
        // send refund request to stripe
        $refunds = \Stripe\Refund::create([
            'charge' => $id,
        ]);
        $refund = Refund::where('charge_id', $id)->first();
        $refund->status = 'approved';
        $refund->save();
        return redirect()->back()->with('success', 'Refund request approved successfully');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function rejected(Request $request, $id)
    {
        //
        $refund = Refund::where('charge_id', $id)->first();
        $refund->status = 'declined';
        $refund->save();
        return redirect()->back()->with('success', 'Refund request rejected successfully');
    }

    /**
     * Cancel the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function cancelSubscription(Request $request, $id)
    {
        //
        Stripe::setApiKey(env('STRIPE_SECRET'));
        $refund = Refund::where('charge_id', $id)->first();
        // return $refund;

        // Get subscription from Stripe by $refund->charge_id
        $subscription = \Stripe\Subscription::all([
            'customer' => $refund->user->stripe_id,
        ]);
        $subscription = $subscription->data[0];
        // send request to stripe to cancel subscription and return cancelled subscription data
        $subscription = $subscription->cancel();
        $user  = User::where('stripe_id', $refund->user->stripe_id)->first();
        $user->update([
            'stripe_id' => '',
        ]);
        $$refund->delete();

        // dd($subscription);
        return redirect()->route('refund.index')->with('success', 'Subscription cancelled successfully');
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
