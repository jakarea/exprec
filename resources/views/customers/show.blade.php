@extends('layouts.admin')
@section('title') Admin - Customer Details @endsection
@section('content') 
@role("Admin")
<main class="product-research-page-wrap">
    <div class="row">
        <div class="col-3">
            <div class="card h-100">
                <div class="card-body">
                    <div class="customer-info">
                        <a href="#">Customer</a>
                        <h6>{{ $customer->name }}</h6>
                        <p>{{ $customer->email }}</p>
                        <br>
                        <div id="accordion mt-3">
                            <div id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Details</button>
                            </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="mt-2">
                                    <code>{{ $customer->stripe_id }}</code></br>
                                    <!-- Account Details -->
                                    <div class="account-details text-mute">
                                        <span class="text-mute mb-2 border-bottom d-block">Account Details</span>
                                        <p>{{ $customer->email }}</p>
                                        <p>{{ $customer->name }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="col-9">
            <div class="content-overviews">
                <div class="card">
                    <div class="card-header bg-transparent">
                        <h6 class="card-title mb-0">Overviews</h6>
                    </div>
                    <div class="card-body">
                        <!-- Subscription Start -->
                        <div class="subscription">
                            <h6>Subscription</h6><hr>
                            <div class="subscription-info">
                            @if ( count($subscriptions->data) > 0 )
                            @foreach( $subscriptions->data as $subscription )
                                <div class="row">
                                    <div class="col-6">
                                        <div class="subscription-info-item">
                                            <span class="text-mute">Status</span>
                                            <h6 class="text-success">{{ $subscription->status }}</h6>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="subscription-info-item">
                                            <span class="text-mute">Plan</span>
                                            <h6 class="text-success">{{ $subscription->plan->product->name }}</h6>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="subscription-info-item">
                                            <span class="text-mute">Start Date</span>
                                            <h6 class="text-success">{{ date('Y-m-d', $subscription->current_period_start) }}</h6>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="subscription-info-item">
                                            <span class="text-mute">End Date</span>
                                            <h6 class="text-success">{{ date('Y-m-d', $subscription->current_period_end) }}</h6>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="subscription-info-item">
                                            <span class="text-mute">Next Billing Date</span>
                                            <h6 class="text-success">{{ date('Y-m-d', $subscription->current_period_end) }}</h6>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="subscription-info-item">
                                            <span class="text-mute">Next Billing Amount</span>
                                            <h6 class="text-success">$ {{ $subscription->plan->amount / 100 }}</h6>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            @else
                                <div class="row">
                                    <div class="col-6">
                                        <div class="subscription-info-item">
                                            <span class="text-mute">Status</span>
                                            <h6 class="text-success">No Subscription</h6>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <!-- Subscription End -->
                            </div>
                        </div>
                        <br>
                        <!-- Payment Method Start -->
                        <div class="payment-method">
                            <h6>Payment Method</h6><hr>
                            <div class="payment-method-info">
                            @if ( count($paymentMethods->data) > 0 )
                            @foreach( $paymentMethods->data as $paymentMethod )
                                <div class="row">
                                    <div class="col-6">
                                        <div class="payment-method-info-item">
                                            <span class="text-mute">Card Brand</span>
                                            <h6 class="text-success">{{ $paymentMethod->card->brand }}</h6>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="payment-method-info-item">
                                            <span class="text-mute">Card Number</span>
                                            <h6 class="text-success">{{ $paymentMethod->card->last4 }}</h6>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="payment-method-info-item">
                                            <span class="text-mute">Card Expiry</span>
                                            <h6 class="text-success">{{ $paymentMethod->card->exp_month }}/{{ $paymentMethod->card->exp_year }}</h6>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="payment-method-info-item">
                                            <span class="text-mute">Card Country</span>
                                            <h6 class="text-success">{{ $paymentMethod->card->country }}</h6>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            @else
                                <div class="row">
                                    <div class="col-6">
                                        <div class="payment-method-info-item">
                                            <span class="text-mute">Card Brand</span>
                                            <h6 class="text-success">No Payment Method</h6>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            </div>
                        </div><br>
                        <!-- Payment Method End -->
                        <!-- Payment List -->
                        <div class="payment-list">
                            <h6>Payment List</h6><hr>
                            <div class="payment-list-info">
                            @if ( count($paymentIntents->data) > 0 )
                            @foreach( $paymentIntents->data as $paymentIntent )
                            @if ( $paymentIntent->customer->email == $customer->email )
                                <div class="row">
                                    <div class="col-4">
                                        <div class="payment-list-info-item">
                                            <span class="text-mute">Amount</span>
                                            <h6 class="text-success">$ {{ $paymentIntent->amount / 100 }}</h6>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="payment-list-info-item">
                                            <span class="text-mute">Status</span>
                                            <h6 class="text-success">{{ $paymentIntent->status }}</h6>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="payment-list-info-item">
                                            <span class="text-mute">Created</span>
                                            <h6 class="text-success">{{ date('Y-m-d', $paymentIntent->created) }}</h6>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @endforeach
                            @else
                                <div class="row">
                                    <div class="col-6">
                                        <div class="payment-list-info-item">
                                            <span class="text-mute">Amount</span>
                                            <h6 class="text-success">No Payment</h6>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@else
<main class="course-page-wrap d-flex justify-content-center align-items-center">
    <h4>You Don't have access to this page!</h4>
</main>
@endrole
@endsection