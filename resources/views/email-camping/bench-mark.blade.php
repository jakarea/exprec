@extends('layouts.master')

@section('title') Bench Mark - Email Campaign @endsection

@section('style')
<link href="{{ asset('assets/css/email-camping.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/e-campaign.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<main class="email-camping-page-wrap">
    <div class="editing-panel-header">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-images-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-images" type="button" role="tab" aria-controls="pills-images"
                    aria-selected="true">Overview</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link " id="pills-brand-tab" data-bs-toggle="pill" data-bs-target="#pills-brand"
                    type="button" role="tab" aria-controls="pills-brand" aria-selected="true">Business
                    Performance</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link " id="pills-fonts-tab" data-bs-toggle="pill" data-bs-target="#pills-fonts"
                    type="button" role="tab" aria-controls="pills-fonts" aria-selected="true">Email Campaigns</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link " id="pills-sms-tab" data-bs-toggle="pill" data-bs-target="#pills-sms"
                    type="button" role="tab" aria-controls="pills-sms" aria-selected="true">SMS Campaigns</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link " id="pills-flows-tab" data-bs-toggle="pill" data-bs-target="#pills-flows"
                    type="button" role="tab" aria-controls="pills-flows" aria-selected="true">Flows</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link " id="pills-signup-tab" data-bs-toggle="pill" data-bs-target="#pills-signup"
                    type="button" role="tab" aria-controls="pills-signup" aria-selected="true">Signup Forms</button>
            </li>
        </ul>
    </div>
    {{-- product body @S --}}
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane show active" id="pills-images" role="tabpanel" aria-labelledby="pills-images-tab"
            tabindex="0">
            {{-- header @S --}}
            <div class="email-camping-head">
                <h1>Bench mark</h1>
            </div>
            {{-- header @E --}}

            {{-- schedule form @S --}}
            <div class="schedule-form-box">
                <div class="media">
                    <img src="{{asset('assets/images/e-campaign/bench-mark-img.svg')}}" alt="Icon"
                        class="img-fluid icon">
                    <div class="media-body">
                        <h6>welcome To Benchmark</h6>
                        <p>Benchmarks provide a vx»int of refererxe that can use to cc.*tvare to others Eke it At Kla•vtyo. benchmark your Exasiness against an identified peer group e as well as yout <br>
                            irxiustry. By viewing data on your email and business perfcxmance in context. you better pl&l and gri«itize your efforts to grow your business.</p>
                    </div>
                </div>
                <div class="close-icons" onclick="this.parentNode.style.display='none'">
                    <a href="javascript:void(0)"><i class="fa-solid fa-circle-xmark"></i></a>
                </div>
            </div>
            {{-- schedule form @E --}}

            {{-- save time form @S --}}
            <div class="save-time-form-wrap">
                <div class="d-flex">
                    <h5>New: Save time with scheduled forms <i class="fa-solid fa-circle-info"></i></h5>
                    <a href="javascript:void(0)" onclick="this.parentNode.parentNode.style.display='none'"><i class="fa-solid fa-circle-xmark"></i></a>
                </div> 

                <p>All peer benchmarks. irrludng historical data. are now updated to ccynpare to y•cxr latest peer yc:nap so that you cai ccnsistentt•y performance over tine. In the future. when your peer group <br>
                    updates. you historical data Will compare to ttk> peer group. <a href="#">Learn more</a></p>
            </div>
            {{-- save time form @E --}}

            {{-- filter section @S --}}
            <div class="bench-filter-box">
                <h6>Show:</h6>
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-5 col-sm-12">
                        <div class="flow-dropdown-filter">
                            <select name="" id="" class="form-control">
                                <option value="">Last Month</option>
                                <option value="">Month 01</option>
                                <option value="">Month 02</option>
                                <option value="">Month 03</option>
                                <option value="">Month 04</option>
                            </select>
                            <i class="fas fa-angle-down"></i>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7 col-sm-12">
                        <div class="bench-mark-bttn">
                            <p>Benchmarks last updated: March 2023 <i class="fa-solid fa-circle-question"></i></p>
                            <a href="#">Export</a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- filter section @E --}}

            {{-- explore bench mark @S --}}
            <div class="explore-bench-mark-wrap">
                <h6>Explore Benchmark</h6>
                <div class="row">
                    {{-- item @S --}}
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="bench-mark-explore-box">
                            <div class="media">
                                <img src="{{asset('assets/images/e-campaign/bench-mark-icon-01.svg')}}" alt="Icon" class="img-fluid">
                                <div class="media-body">
                                    <h5>Business Performance</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- item @E --}}
                    {{-- item @S --}}
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="bench-mark-explore-box">
                            <div class="media">
                                <img src="{{asset('assets/images/e-campaign/bench-mark-icon-02.svg')}}" alt="Icon" class="img-fluid">
                                <div class="media-body">
                                    <h5>Email Campaigns</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- item @E --}}
                    {{-- item @S --}}
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="bench-mark-explore-box">
                            <div class="media">
                                <img src="{{asset('assets/images/e-campaign/bench-mark-icon-03.svg')}}" alt="Icon" class="img-fluid">
                                <div class="media-body">
                                    <h5>SMS Campaigns</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- item @E --}}
                    {{-- item @S --}}
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="bench-mark-explore-box">
                            <div class="media">
                                <img src="{{asset('assets/images/e-campaign/bench-mark-icon-04.svg')}}" alt="Icon" class="img-fluid">
                                <div class="media-body">
                                    <h5>Flows</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- item @E --}}
                    {{-- item @S --}}
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="bench-mark-explore-box">
                            <div class="media">
                                <img src="{{asset('assets/images/e-campaign/bench-mark-icon-05.svg')}}" alt="Icon" class="img-fluid">
                                <div class="media-body">
                                    <h5>Signup Forms</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- item @E --}}
                </div>
            </div>
            {{-- explore bench mark @E --}}

            {{-- bench mark data box @S --}}
            <div class="camping-empty-box-wrap">
                <div class="camping-empty-txt">
                    <img src="{{ asset('assets/images/email-camping/spider-icon.svg') }}" alt="spider-icon" class="img-fluid">
                    <h5>Send more messages to access benchmark data</h5>
                    <p>To access email and SMS benchmarks.
                        t account must have sent at least 25 emails and 25 SMS messages. respectively.
                        over the past 6 months- If you teach either threshold within this month, your benchmarks Will be available next month</p> 
                </div>
            </div>
            {{-- bench mark data box @E --}}

        </div>
        <div class="tab-pane " id="pills-brand" role="tabpanel" aria-labelledby="pills-brand-tab" tabindex="0">
            {{-- header @S --}}
            <div class="email-camping-head">
                <h1>Business Performance</h1>
            </div>
            {{-- header @E --}}
        </div>
        <div class="tab-pane " id="pills-fonts" role="tabpanel" aria-labelledby="pills-fonts-tab" tabindex="0">
            {{-- header @S --}}
            <div class="email-camping-head">
                <h1>Email Campaigns</h1>
            </div>
            {{-- header @E --}}
        </div>
        <div class="tab-pane " id="pills-sms" role="tabpanel" aria-labelledby="pills-sms-tab" tabindex="0">
           {{-- header @S --}}
           <div class="email-camping-head">
            <h1>SMS Campaigns</h1>
        </div>
        {{-- header @E --}}
        </div>
        <div class="tab-pane " id="pills-flows" role="tabpanel" aria-labelledby="pills-flows-tab" tabindex="0">
           {{-- header @S --}}
           <div class="email-camping-head">
            <h1>Flows</h1>
        </div>
        {{-- header @E --}}
        </div>
        <div class="tab-pane " id="pills-signup" role="tabpanel" aria-labelledby="pills-signup-tab" tabindex="0">
           {{-- header @S --}}
           <div class="email-camping-head">
            <h1>Signup Forms</h1>
        </div>
        {{-- header @E --}}
        </div>
    </div>
    {{-- product body @E --}}

</main>
@endsection

@section('script')

@endsection