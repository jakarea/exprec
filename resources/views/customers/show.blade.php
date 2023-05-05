@extends('layouts.admin')
@section('title') Admin - Customer Details @endsection

@section('style')
<link href="{{ asset('assets/css/profile.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
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
                        @if($customer->thumbnail)
                        <img src="{{ asset('assets/images/user/'.$customer->thumbnail) }}" alt="{{$customer->name}}"
                            class="img-fluid">
                        @else
                        <span>{!! strtoupper($customer->name[0]) !!}</span>
                        @endif
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
                    <p>{{ date('M d, Y h:i a', $subscription->current_period_start) }}</p>
                </div>
                <div class="form-group my-0">
                    <label for=""><i class="fa-regular fa-calendar"></i> End Date: </label>
                    <p>{{ date('M d, Y h:i a', $subscription->current_period_end) }}</p>
                </div>
                <div class="form-group my-0">
                    <label for=""><i class="fa-solid fa-money-bills"></i> Next Billing Amount: </label>
                    <p>$ {{ $subscription->plan->amount / 100 }}</p>
                </div>
                <div class="form-group my-0">
                    <label for=""><i class="fa-solid fa-calendar-day"></i> Next Billing Date: </label>
                    <p>{{ date('M d, Y h:i a', $subscription->current_period_end) }}</p>
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
            <div class="row">
                <div class="col-12">
                    <div class="productss-list-box payment-history-table">
                        <h5 class="p-3 pb-0">card History :</h5>
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
                                <td>
                                    @if( $paymentMethod->card->brand == 'visa')
                                    <i class="fa-brands fa-cc-visa"></i> {{ $paymentMethod->card->brand }}
                                    @elseif( $paymentMethod->card->brand == 'mastercard')
                                    <i class="fa-brands fa-cc-mastercard"></i> {{ $paymentMethod->card->brand }}
                                    @elseif( $paymentMethod->card->brand == 'amex')
                                    <i class="fa-brands fa-cc-amex"></i> {{ $paymentMethod->card->brand }}
                                    @elseif( $paymentMethod->card->brand == 'discover')
                                    <i class="fa-brands fa-cc-discover"></i> {{ $paymentMethod->card->brand }}
                                    @elseif( $paymentMethod->card->brand == 'jcb')
                                    <i class="fa-brands fa-cc-jcb"></i> {{ $paymentMethod->card->brand }}
                                    @elseif( $paymentMethod->card->brand == 'diners')
                                    <i class="fa-brands fa-cc-diners-club"></i> {{ $paymentMethod->card->brand }}
                                    @elseif( $paymentMethod->card->brand == 'unionpay')
                                    <i class="fa-brands fa-cc-unionpay"></i> {{ $paymentMethod->card->brand }}
                                    @elseif( $paymentMethod->card->brand == 'unknown')
                                    <i class="fa-solid fa-credit-card"></i> {{ $paymentMethod->card->brand }}
                                    @endif
                                </td>
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
                <div class="col-12">
                    <!-- Customer Payment List -->
                    <div class="productss-list-box payment-history-table mt-5">
                        <h5 class="p-3 pb-0">Payment History :</h5>
                        @if ( count($paymentIntents) > 0 )
                        <table>
                            <tr>
                                <th width="5%">No</th>
                                <th>Amount</th>
                                <th>Payment Method</th>
                                <th>Payment Status</th>
                                <th>Card Number</th>
                                <th>Payment Date</th>
                            </tr>
                            <!-- item start -->
                            @foreach( $paymentIntents as $key => $paymentIntent )
                            @if( $paymentIntent->customer->email == $customer->email)
                            <tr>
                                <td>{{ $key +1 }}</td>
                                <td>$ {{ $paymentIntent->amount / 100 }}</td>
                                <td>{{ $paymentIntent->payment_method_types[0] }}</td>
                                <td>
                                @if ($paymentIntent->status == 'succeeded')
                                    @php
                                        $hasRefunds = false;
                                        foreach ($refunds as $refund) {
                                            if ($refund->payment_intent == $paymentIntent->id && $refund->status == 'succeeded') {
                                                $hasRefunds = true;
                                                break;
                                            }
                                        }
                                    @endphp
                                    @if ($hasRefunds)
                                        <span class="text-danger">Refunded</span>
                                    @else
                                        <span class="text-success">{{ $paymentIntent->status }}</span>
                                    @endif
                                @endif

                                </td>
                                <td>********{{ $paymentIntent->payment_method->card->last4 }}</td>
                                <td>{{ date('M d, Y h:i a', $paymentIntent->created) }}</td>
                            </tr>
                            @endif
                            @endforeach
                            <!-- item end -->
                        </table>
                        @else
                        <div class="row">
                            <div class="col-12">
                                <div class="payment-method-info-item">
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

</main>
@endsection