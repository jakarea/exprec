@extends('layouts.master')
@section('title','Home Page ')
@section('style') 
<link href="{{ asset('assets/css/home.css') }}" rel="stylesheet" type="text/css" />  
@endsection
@section('content') 

<!-- === main home page @S === -->
<main class="main-home-page"> 
    <div class="row">
        <div class="col-12">
            <!-- Show all sesssion success message -->
            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show alert-custom-txt" role="alert">
                    <div class="media">
                            <div class="media-body">
                                <h6 class="alert-heading">Success</h6>
                                <p>{{ session()->get('success') }}</p>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div> 
                </div> 
                @endif
            <!-- Show all session warning message -->
            @if(session()->has('warning')) 
            <div class="alert alert-danger alert-dismissible fade show alert-custom-txt" role="alert">
                <div class="media"> 
                        <div class="media-body">
                            <h6 class="alert-heading">Warning!</h6>
                            <p>{{ session()->get('warning') }}</p>
                        </div>
                        <a href="{{url('/subscription')}}">Subscribe</a> 
                </div> 
                </div> 
            @endif
        </div> 
    @role("Customer")
    @php
        $user = Auth::user();
        $stripe_id = $user->stripe_id;
    if ( !empty($stripe_id) ) {
        $stripe = new \Stripe\StripeClient( env('STRIPE_SECRET') );
        $subscription = $stripe->subscriptions->all(['customer' => $stripe_id]);
        $subscription_end_date = $subscription->data[0]->current_period_end;
        $subscription_end_date = date('d-m-Y', $subscription_end_date);
        $subscription_end_date2 = $subscription->data[0]->current_period_end;
        $remaining_days = ceil(($subscription_end_date2 - time()) / 86400);
    }
    @endphp
    @if ( !empty($subscription) && $subscription->data[0]->status == 'active' && $remaining_days > 7 )
    <div class="col-lg-12 col-md-12 col-sm-12 col-12">  
        <div class="alert alert-success alert-dismissible fade show alert-custom-txt" role="alert">
            <div class="media">
                <div class="media-body">
                    <h6 class="alert-heading">Subscription</h6>
                    <p>Your subscription will end on {{ $subscription_end_date }}, You have remain only {{ $remaining_days }} days!</p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div> 
        </div>  
    </div>
    @endif
    @endrole
        <!-- col @S -->
        @role("Admin")
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <div class="total-session-box">
                <h6>Total Customers</h6>
                <div class="d-flex">
                    <h2>{{ $userCount }}</h2>
                    <i class="fas fa-users"></i>
                </div> 
            </div>
        </div>
        <!-- col @E -->
        @endrole
        <!-- col @S -->
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <div class="total-session-box">
                <h6>Total Products</h6>
                <div class="d-flex">
                    <h2>{{$productsCount}}</h2>
                    <i class="fas fa-cart-shopping"></i>
                </div> 
            </div>
        </div>
        <!-- col @E -->
        <!-- col @S -->
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <div class="total-session-box">
                <h6>Total Courses</h6>
                <div class="d-flex">
                    <h2>{{$courseCount}}</h2>
                    <i class="fas fa-business-time"></i>
                </div> 
            </div>
        </div>
        <!-- col @E -->
        <!-- col @S -->
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <div class="total-session-box">
                <h6>Total Tools</h6>
                <div class="d-flex">
                    <h2>05</h2>
                    <i class="fas fa-screwdriver-wrench"></i>
                </div> 
            </div>
        </div>
        <!-- col @E -->
        <!-- col @S -->
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <div class="total-session-box">
                <h6>Discounts</h6>
                <div class="d-flex">
                    <h2>00</h2>
                    <i class="fas fa-tags"></i>
                </div> 
            </div>
        </div>
        <!-- col @E -->
        <!-- col @S -->
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <div class="total-session-box">
                <h6>Subscriptions</h6>
                <div class="d-flex">
                    <h2>00</h2>
                    <i class="fas fa-ticket"></i>
                </div> 
            </div>
        </div>
    </div>
</main>
<!-- === main home page @E === -->

@endsection
@section('script') 
    <!-- changePassword is equal true -->
    @php
        $changePassword = session()->get('changePassword');
    @endphp
    @if ($changePassword == true)
    <script>
        $(document).ready(function(){
           // redirect to change password page after 2 second
              setTimeout(function(){
                 window.location.href = "{{ route('changePassword') }}";
              }, 2000);
        });
    </script>
    @endif
@endsection