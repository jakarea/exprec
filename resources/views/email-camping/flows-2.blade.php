@extends('layouts.master')
@section('title') Flows Two @endsection

@section('style')
<link href="{{ asset('assets/css/e-campaign.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<main class="email-camping-page-wrap">
    {{-- header @S --}}
    <div class="email-camping-head">
        <h1>Flows</h1>
    </div>
    {{-- header @E --}}

    {{-- filter @S --}}
    <form action="">
        <div class="row">
            <div class="col-lg-6 col-md-8 col-12">
                <div class="flow-search-filter">
                    <input type="text" placeholder="Search Flows" class="form-control">
                    <i class="fas fa-search"></i>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="flow-dropdown-filter">
                    <select name="" id="" class="form-control">
                        <option value="">Select Tag</option>
                        <option value="">Tag 01</option>
                        <option value="">Tag 02</option>
                        <option value="">Tag 03</option>
                        <option value="">Tag 04</option>
                    </select>
                    <i class="fas fa-angle-down"></i>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="flow-dropdown-filter">
                    <select name="" id="" class="form-control">
                        <option value="">All Statuses</option>
                        <option value="">Statuses 01</option>
                        <option value="">Statuses 02</option>
                        <option value="">Statuses 03</option>
                        <option value="">Statuses 04</option>
                    </select>
                    <i class="fas fa-angle-down"></i>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-5">
                <div class="flow-dropdown-filter">
                    <select name="" id="" class="form-control">
                        <option value="">All Days</option>
                        <option value="">7 days</option>
                        <option value="">14 days</option>
                        <option value="">21 days</option>
                    </select>
                    <i class="fas fa-angle-down"></i>
                </div>
            </div>
            <div class="col-lg-3 col-md-5 col-sm-8 col-7">
                <div class="flow-dropdown-filter">
                    <img src="{{asset('assets/images/e-campaign/gear-icon.svg')}}" alt="Icon" class="img-fluid">
                    <select name="" id="" class="form-control ps-5">
                        <option value="">Active on site</option>
                        <option value="">7 days</option>
                        <option value="">14 days</option>
                        <option value="">21 days</option>
                    </select>
                    <i class="fas fa-angle-down"></i>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                {{-- flow filter table @S --}}
                <div class="flow-filter-table">
                    <table>
                        <tr>
                            <th width="15%">Flow <img src="{{asset('assets/images/e-campaign/up-down-angle.svg')}}"
                                    alt="Icon" class="img-fluid"></th>
                            <th>Type </th>
                            <th width="15%">Status <img src="{{asset('assets/images/e-campaign/up-down-angle.svg')}}"
                                    alt="Icon" class="img-fluid"></th>
                            <th>Last updated <img src="{{asset('assets/images/e-campaign/up-down-angle.svg')}}"
                                    alt="Icon" class="img-fluid"></th>
                            <th>Conversions <img src="{{asset('assets/images/e-campaign/up-down-angle.svg')}}"
                                    alt="Icon" class="img-fluid"></th>
                            <th>Conversions rate <img src="{{asset('assets/images/e-campaign/up-down-angle.svg')}}"
                                    alt="Icon" class="img-fluid"></th>
                        </tr>
                        <tr>
                            <td>
                                <h6>Abandoned Cart</h6>
                                <h5>Checkout Started</h5>
                            </td>
                            <td>
                                <i class="fa-regular fa-envelope"></i>
                            </td>
                            <td>
                                <i class="fas fa-circle"></i>
                                <span>Draft</span>
                            </td>
                            <td>
                                <p>Jan 28 at 4:22 pm</p>
                            </td>
                            <td>
                                <p>0</p>
                            </td>
                            <td>
                                <div class="d-flex">
                                    <p>0.0%</p>
                                    <a href="#"><i class="fa-solid fa-ellipsis"></i></a>
                                </div>
                            </td>
                            <td>
                        </tr>
                        <tr>
                            <td>
                                <h6 class="error-txt">Welcome Series <i class="fa-solid fa-circle-exclamation"></i></h6>
                                <h5>Added to SMS <br> Subscription list</h5>
                            </td>
                            <td>
                                <i class="fa-regular fa-envelope"></i>
                            </td>
                            <td>
                                <i class="fas fa-circle"></i>
                                <span>Draft</span>
                            </td>
                            <td>
                                <p>Jan 28 at 4:22 pm</p>
                            </td>
                            <td>
                                <p>0</p>
                            </td>
                            <td>
                                <div class="d-flex">
                                    <p>0.0%</p>
                                    <a href="#"><i class="fa-solid fa-ellipsis"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="7" class="table-swipe">
                                <a href="#"><i class="fas fa-angle-left"></i></a>
                                <span>01</span>
                                <a href="#"><i class="fas fa-angle-right"></i></a>
                            </td>
                        </tr>
                    </table>
                </div>
                {{-- flow filter table @E --}}
            </div>
        </div>
    </form>
    {{-- filter @E --}}

    {{-- keep it up @S --}}
    <div class="keep-head">
        <div class="media">
            <div class="media-body">
                <h2>Keep it up</h2>
                <h6>Drive up revenue and engagement with key automations that are pre-built and ready to turn on!</h6>
            </div>
            <a href="#">View All Idea</a>
        </div>
    </div>
    <div class="row">
        {{-- keep item @S --}}
        <div class="col-lg-4 col-md-6 col-12">
            <div class="keep-item-box">
                <div class="keep-item-top">
                    <a href="#">
                        <i class="fa-solid fa-circle-xmark"></i>
                    </a>
                    <img src="{{asset('assets/images/e-campaign/keep-icon-01.svg')}}" alt="Icon" class="img-fluid icon">
                </div>
                <div class="keep-item-txt">
                    <h4>Browse Abandonment</h4>
                    <p>Did you see something you liked? Convert curiosity info cash with this money making series.</p>
                    <hr>
                    <div class="media"> 
                        <img src="{{asset('assets/images/e-campaign/up-arrow.svg')}}" alt="Icon" class="img-fluid">
                        <div class="media-body">
                            <p>These emails have the highest open rates of any flow.</p>
                        </div>
                    </div>
                    <a href="#" class="get-bttn">Get Started</a>
                </div>
            </div>
        </div>
        {{-- keep item @E --}}
        {{-- keep item @S --}}
        <div class="col-lg-4 col-md-6 col-12">
            <div class="keep-item-box">
                <div class="keep-item-top">
                    <a href="#">
                        <i class="fa-solid fa-circle-xmark"></i>
                    </a>
                    <img src="{{asset('assets/images/e-campaign/keep-icon-02.svg')}}" alt="Icon" class="img-fluid icon">
                </div>
                <div class="keep-item-txt">
                    <h4>Customer Thank you</h4>
                    <p>Build loyalty with this best-practice flow. You can even tailor content for new vs. returning customer!</p>
                    <hr>
                    <div class="media"> 
                        <img src="{{asset('assets/images/e-campaign/up-arrow.svg')}}" alt="Icon" class="img-fluid">
                        <div class="media-body">
                            <p>Post-purchase emails see over 60% open rates on average.</p>
                        </div>
                    </div>
                    <a href="#" class="get-bttn">Get Started</a>
                </div>
            </div>
        </div>
        {{-- keep item @E --}}
        {{-- keep item @S --}}
        <div class="col-lg-4 col-md-6 col-12">
            <div class="keep-item-box">
                <div class="keep-item-top">
                    <a href="#">
                        <i class="fa-solid fa-circle-xmark"></i>
                    </a>
                    <img src="{{asset('assets/images/e-campaign/keep-icon-01.svg')}}" alt="Icon" class="img-fluid icon">
                </div>
                <div class="keep-item-txt">
                    <h4>Product Review/Cross Sell</h4>
                    <p>Check in, ask for a review, or cross-sell complimentary items with this timely sequence.</p>
                    <hr>
                    <div class="media"> 
                        <img src="{{asset('assets/images/e-campaign/up-arrow.svg')}}" alt="Icon" class="img-fluid">
                        <div class="media-body">
                            <p>Post-purchase touchpoints boost overall engagement.</p>
                        </div>
                    </div>
                    <a href="#" class="get-bttn">Get Started</a>
                </div>
            </div>
        </div>
        {{-- keep item @E --}}
        {{-- keep item @S --}}
        <div class="col-lg-4 col-md-6 col-12">
            <div class="keep-item-box get-idea-box">
                <div class="text-center">
                    <img src="{{asset('assets/images/e-campaign/telegram-icon.svg')}}" alt="Icon" class="img-fluid icon">
                </div>
                <div class="keep-item-txt text-center">
                    <h4>Looking for some ideas?</h4>
                    <p>Check out the flow library for more pre-built flows.</p>
                    <a href="#" class="get-bttn">Browse ideas</a> 
                </div>
            </div>
        </div>
        {{-- keep item @E --}}
    </div>
    {{-- keep it up @E --}}

</main>
@endsection