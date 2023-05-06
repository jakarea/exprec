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

        return view('refunds.show', compact('refund'));
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
