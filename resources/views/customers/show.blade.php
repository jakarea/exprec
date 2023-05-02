@extends('layouts.admin')
@section('title') Admin - Customer Details @endsection

@section('style')
<link href="{{ asset('assets/css/profile.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
@role("Admin")
<main class="course-page-wrap">
    <!-- user header area @S -->
    <div class="product-filter-wrapper my-0">
        <div class="product-filter-box mt-0">
            <div class="password-change-txt">
                <h1 class="mb-1">Customer Profile</h1>
                <p>This is <span class="text-danger"> {{ $customer->name }} </span> customer profile page.</p>
            </div>
            <div class="form-grp-btn mt-0 ms-auto">
                <a href="{{ url('customers') }}" class="btn me-3">All Customers</a>
            </div>
        </div>
    </div>
    <!-- user header area @E -->

    <div class="row">
        <div class="col-lg-4">
            <div class="change-password-form w-100 customer-profile-info">
                <div class="set-profile-picture">
                    <div class="media justify-content-center">
                        <span>{!! strtoupper($customer->name[0]) !!}</span> 
                    </div>
                    <div class="role-label">
                        @if(!empty($customer->getRoleNames()))
                        @foreach($customer->getRoleNames() as $v)
                        <span class="badge rounded-pill bg-dark">{{ $v }}</span>
                        @endforeach
                        @endif
                    </div>
                </div>
                <div class="text-center">
                    <h3>{{ $customer->name }} </h3>
                    <!-- details box @S -->
                    <div class="form-group mt-3 mb-1 ">
                        <label for=""><i class="fa-brands fa-cc-stripe"></i> Stripe ID: </label>
                        <code>{{ $customer->stripe_id }}</code>
                    </div>
                    <!-- details box @E -->
                    <div class="form-group mb-0 ">
                        <label for=""><i class="fa-solid fa-envelope"></i> Email: </label>
                        <p>{{ $customer->email }}</p>
                    </div>
                </div>
                <!-- details box @E -->
                <h6>Subscription :</h6>
                @if ( count($subscriptions->data) > 0 )
                @foreach( $subscriptions->data as $subscription )
                <div class="form-group mb-0">
                    <label for=""><i class="fa-solid fa-flag"></i> Status: </label>
                    @if( $subscription->status == 'active')
                    <p class="text-success">{{ $subscription->status }}</p>
                    @else
                    <p>{{ $subscription->status }}</p>
                    @endif

                </div>
                <div class="form-group mb-0">
                    <label for=""><i class="fa-solid fa-cube"></i> Plan: </label>
                    <p>{{ $subscription->plan->product->name }}</p>
                </div>
                <div class="form-group my-0">
                    <label for=""><i class="fa-solid fa-calendar"></i> Start Date: </label>
                    <p>{{ date('Y-m-d', $subscription->current_period_start) }}</p>
                </div>
                <div class="form-group my-0">
                    <label for=""><i class="fa-regular fa-calendar"></i> End Date: </label>
                    <p>{{ date('Y-m-d', $subscription->current_period_end) }}</p>
                </div>
                <div class="form-group my-0">
                    <label for=""><i class="fa-solid fa-money-bills"></i> Next Billing Amount: </label>
                    <p>$ {{ $subscription->plan->amount / 100 }}</p>
                </div>
                <div class="form-group my-0">
                    <label for=""><i class="fa-solid fa-calendar-day"></i> Next Billing Date: </label>
                    <p>{{ date('Y-m-d', $subscription->current_period_end) }}</p>
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
            </div>
        </div>
        <div class="col-lg-8">
            <!-- Customers payment listing @S -->
            <div class="row">
                <div class="col-12">
                    <div class="productss-list-box">
                        @if ( count($paymentMethods->data) > 0 )
                        <table>
                            <tr>
                                <th width="5%">No</th>
                                <th>Card Brand</th>
                                <th>Card Number</th>
                                <th>Card Expiry</th>
                                <th>Card Country</th>

                            </tr>
                            <!-- item start -->
                            @foreach( $paymentMethods->data as $key => $paymentMethod )
                            <tr>
                                <td>{{ $key +1 }}</td>
                                <td>{{ $paymentMethod->card->brand }}</td>
                                <td>********{{ $paymentMethod->card->last4 }}</td>
                                <td>{{ $paymentMethod->card->exp_month }} / {{ $paymentMethod->card->exp_year }}</td>
                                <td>{{ $paymentMethod->card->country }}</td>
                            </tr>
                            @endforeach
                            <!-- item end -->
                        </table>
                        @else
                        <div class="row">
                            <div class="col-12">
                                <div class="payment-method-info-item">
                                    <span class="text-mute">Card Brand</span>
                                    <h6 class="text-success">No Payment Method</h6>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <!-- Customers payment listing @E -->
        </div>
    </div>

</main>
@else
<main class="course-page-wrap d-flex justify-content-center align-items-center">
    <h4>You Don't have access to this page!</h4>
</main>
@endrole
@endsection