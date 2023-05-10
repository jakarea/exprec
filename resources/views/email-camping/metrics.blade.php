@extends('layouts.master')

@section('title') Metrics - Email Campaign @endsection

@section('style')
<link href="{{ asset('assets/css/email-camping.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/e-campaign.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<main class="email-camping-page-wrap">
    {{-- head @S --}}
    <div class="email-camping-head metrics-head">
        <h1>Metrics</h1>
        <div class="metrics-head-bttns">
            <a href="#">Create from scratch</a>
            <a href="#">Reports Library</a>
        </div> 
    </div>
    {{-- head @E --}} 

     {{-- metrics filter @S --}}
     <div class="row">
        <div class="col-lg-6 col-md-8 col-12">
            <div class="flow-search-filter">
                <input type="text" placeholder="Search" class="form-control">
                <i class="fas fa-search"></i>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-7">
            <div class="flow-dropdown-filter">
                <select name="" id="" class="form-control">
                    <option value="">All integrations</option>
                    <option value="">All 01</option>
                    <option value="">All 02</option>
                    <option value="">All 03</option>
                    <option value="">All 04</option>
                </select>
                <i class="fas fa-angle-down"></i>
            </div>
        </div>
        <div class="col-lg-2 col-5 col-sm-3 col-md-3 form-clear">
            <a href="#">Clear</a>
        </div> 
    </div>
    {{-- metrics filter @E --}}

    {{-- matrics list box @S --}}
    <div class="matrics-list-wrap">
        <h4>Metrics name</h4>
        <ul>
            <li><a href="#"><img src="{{asset('assets/images/e-campaign/cog-icon.png')}}" alt="Icon" class="img-fluid"> Active on site</a></li>
            <li><a href="#"><img src="{{asset('assets/images/e-campaign/batch-icon.png')}}" alt="Icon" class="img-fluid"> Bounced Email</a></li>
            <li><a href="#"><img src="{{asset('assets/images/e-campaign/alibaba-icon.png')}}" alt="Icon" class="img-fluid"> Bounced Email</a></li>
            <li><a href="#"><img src="{{asset('assets/images/e-campaign/batch-icon.png')}}" alt="Icon" class="img-fluid"> Bounced Email</a></li>
            <li><a href="#"><img src="{{asset('assets/images/e-campaign/alibaba-icon.png')}}" alt="Icon" class="img-fluid"> Bounced Email</a></li>
            <li><a href="#"><img src="{{asset('assets/images/e-campaign/batch-icon.png')}}" alt="Icon" class="img-fluid"> Bounced Email</a></li>
            <li><a href="#"><img src="{{asset('assets/images/e-campaign/alibaba-icon.png')}}" alt="Icon" class="img-fluid"> Bounced Email</a></li>
            <li><a href="#"><img src="{{asset('assets/images/e-campaign/batch-icon.png')}}" alt="Icon" class="img-fluid"> Bounced Email</a></li>
            <li><a href="#"><img src="{{asset('assets/images/e-campaign/alibaba-icon.png')}}" alt="Icon" class="img-fluid"> Bounced Email</a></li>
            <li><a href="#"><img src="{{asset('assets/images/e-campaign/batch-icon.png')}}" alt="Icon" class="img-fluid"> Bounced Email</a></li>
            <li><a href="#"><img src="{{asset('assets/images/e-campaign/alibaba-icon.png')}}" alt="Icon" class="img-fluid"> Bounced Email</a></li>
            <li><a href="#"><img src="{{asset('assets/images/e-campaign/batch-icon.png')}}" alt="Icon" class="img-fluid"> Bounced Email</a></li>
            <li><a href="#"><img src="{{asset('assets/images/e-campaign/alibaba-icon.png')}}" alt="Icon" class="img-fluid"> Bounced Email</a></li>
            <li><a href="#"><img src="{{asset('assets/images/e-campaign/batch-icon.png')}}" alt="Icon" class="img-fluid"> Bounced Email</a></li>
            <li><a href="#"><img src="{{asset('assets/images/e-campaign/alibaba-icon.png')}}" alt="Icon" class="img-fluid"> Bounced Email</a></li>
            <li><a href="#"><img src="{{asset('assets/images/e-campaign/batch-icon.png')}}" alt="Icon" class="img-fluid"> Bounced Email</a></li>
            <li><a href="#"><img src="{{asset('assets/images/e-campaign/alibaba-icon.png')}}" alt="Icon" class="img-fluid"> Bounced Email</a></li>
            <li><a href="#"><img src="{{asset('assets/images/e-campaign/batch-icon.png')}}" alt="Icon" class="img-fluid"> Bounced Email</a></li>
            <li><a href="#"><img src="{{asset('assets/images/e-campaign/alibaba-icon.png')}}" alt="Icon" class="img-fluid"> Bounced Email</a></li>
            <li><a href="#"><img src="{{asset('assets/images/e-campaign/batch-icon.png')}}" alt="Icon" class="img-fluid"> Bounced Email</a></li>
            <li><a href="#"><img src="{{asset('assets/images/e-campaign/alibaba-icon.png')}}" alt="Icon" class="img-fluid"> Bounced Email</a></li>
        </ul>
    </div>
    {{-- matrics list box @E --}}


</main>
@endsection

@section('script')

@endsection