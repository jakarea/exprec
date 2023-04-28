@extends('layouts.auth')

@section('title') Subscription @endsection

@section('content')
<!-- ====== subscription page content @S ====== -->
<section class="subscription-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="subscription-header">
                    <h1>Explore Flexible Pricing Plans and Choose the Best <br> Option   for Your Business</h1>
                    <p>You have an exciting chance to enhance your ad campaigns and gain valuable insights with Exprec's powerful tools and analytics. Start now to make the most of our extensive data and analytics, and achieve your business goals with ease.</p>
                </div>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
            </div> 
        </div>
      
        <div class="row">
            <div class="col-12">
                <div class="plan-tab-head">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    @foreach($plans as $planName) 
                        <li class="nav-item" role="presentation">
                            <button class="nav-link @if($planName['id'] == '1') active @endif" id="pills-{{$planName['id']}}-tab" data-bs-toggle="pill" data-bs-target="#pills-{{$planName['id']}}" type="button" role="tab" aria-controls="pills-{{$planName['id']}}" aria-selected="true">
                                @if($planName['id'] == '1') Monthly @elseif($planName['id'] == '2') Yearly @endif
                            </button>
                        </li>
                    @endforeach 
                    </ul> 
                </div>
            </div>
        </div>
        <div class="tab-content" id="pills-tabContent">
            @foreach($plans as $plan) 
            <div class="tab-pane fade @if($plan['id'] == '1') active show @endif" id="pills-{{$plan['id']}}" role="tabpanel" aria-labelledby="pills-{{$plan['id']}}-tab" tabindex="0"> 
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="subscription-plan-box">
                            <div class="plan-header"> 
                                <h4>{{ $plan->name }}</h4>
                            </div>
                            <div class="plan-body"> 
                                <h5 class="plan-title">${{ $plan->price }}/Mo</h5>
                                <ul>
                                    <li>
                                        <i class="fa fa-check"></i> Elearning 
                                    </li>
                                    <li>
                                        <i class="fa fa-check"></i> Email Marketing
                                    </li>
                                    <li>
                                        <i class="fa fa-check"></i> Adspy
                                    </li>
                                    <li>
                                        <i class="fa fa-check"></i> Adspy Facebook
                                    </li>
                                    <li class="na">
                                        <i class="fa fa-check"></i> Adspy Pinterest <sup>(Upcomming)</sup>
                                    </li>
                                    <li class="na">
                                        <i class="fa fa-check"></i> Adspy Tiktok <sup>(Upcomming)</sup>
                                    </li>
                                    <li>
                                        <i class="fa fa-check"></i> Interest tool
                                    </li>
                                    <li>
                                        <i class="fa fa-check"></i> Product Research
                                    </li> 
                                </ul>
                            </div>
                            <div class="plan-footer">
                                <a href="{{ route('plans.checkout', $plan->id) }}" class="plan-btn">Purchase Now</a>
                            </div>
                        </div>
                    </div>
                    </div>
                </div> 
            @endforeach
        </div> 
    </div>
</section>
<!-- ====== subscription page content @E ====== -->
@endsection