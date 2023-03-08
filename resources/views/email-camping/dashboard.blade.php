@extends('layouts.master')

@section('title') Email Camping Dashboard @endsection

@section('style') 
<link href="{{ asset('assets/css/email-camping.css') }}" rel="stylesheet" type="text/css" />  
@endsection

@section('content') 
<main class="email-camping-page-wrap"> 
  <div class="row align-items-center">
    <div class="col-lg-6">
        <!-- book marks @S -->
        <div class="bookmark-box-wrap mb-0">
            <ul>
                <li><span>Analytics</span></li>
                <li><i class="fas fa-angle-right"></i></li>
                <li><a href="#">Dashboards</a></li>
            </ul>
        </div>
        <!-- book marks @E -->
    </div>
    <div class="col-lg-6">
        <!-- add card @S -->
        <div class="addcard-box-wrap">
            <p>Last Update: Jan 16, 2023 at 12:25 pm</p>
            <div>
                <a href="#" class="add-card-bttn">Add Card</a>
                <a href="#"><img src="{{asset('assets/images/union-dark.svg')}}" alt="union-icon" class="img-fluid"></a>
            </div>
        </div>
        <!-- add card @E -->
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
        <div class="date-range-filter">
            <p>Date range:</p>
            <div class="date-filter-select">
                <select name="" id="" class="form-control">
                    <option value="">Last 30 Days</option>
                    <option value="">Last 20 Days</option>
                    <option value="">Last 10 Days</option>
                    <option value="">Last 5 Days</option>
                </select>
                <i class="fas fa-angle-down"></i>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="date-range-filter">
            <p>Conversion mark:</p>
            <div class="date-filter-select">
                <img src="{{asset('assets/images/showcase-icon.svg')}}" alt="Search Icon" class="img-fluid">
                <select name="" id="" class="form-control ps-5">
                    <option value="">Active on Site</option> 
                    <option value="">Active on Site</option> 
                    <option value="">Active on Site</option> 
                    <option value="">Active on Site</option> 
                </select>
                <i class="fas fa-angle-down"></i>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="date-range-filter">
            <p>Comparison:</p> 
            <div class="date-filter-select">
                <select name="" id="" class="form-control">
                    <option value="">Previous period</option> 
                    <option value="">Previous period</option> 
                    <option value="">Previous period</option> 
                    <option value="">Previous period</option> 
                </select>
            <i class="fas fa-angle-down"></i>
            </div>
        </div>
    </div>
  </div>

  <!-- conversational summary @S -->
  <div class="row">
    <!-- Item @S -->
    <div class="col-12 col-md-6 col-lg-6">
        <div class="conversational-summary-box-wrap">
            <div class="conv-sammary-head">
                <h5>Conrversation Summary</h5>
                <a href="#">
                <img src="{{asset('assets/images/union-dark.svg')}}" alt="union-icon" class="img-fluid">
                </a>
            </div>
            <div class="conv-summary-txt">
                <img src="{{ asset('assets/images/email-camping/spider-icon.svg') }}" alt="spider-icon" class="img-fluid">
                <h4>No data available</h4>
                <p>Make sure you've intergrated your site so that we can track communication  for you</p>
                <a href="{{ url('integrations')}}">Intergrate Site</a>
            </div>
        </div>
    </div>
    <!-- Item @E -->
    <!-- Item @S -->
    <div class="col-12 col-md-6 col-lg-6">
        <div class="conversational-summary-box-wrap">
            <div class="conv-sammary-head">
                <h5>Conrversation Summary</h5>
                <a href="#">
                <img src="{{asset('assets/images/union-dark.svg')}}" alt="union-icon" class="img-fluid">
                </a>
            </div>
            <div class="conv-summary-txt">
                <img src="{{ asset('assets/images/email-camping/spider-icon.svg') }}" alt="spider-icon" class="img-fluid">
                <h4>No data available</h4>
                <p>Make sure you've intergrated your site so that we can track communication  for you</p>
                <a href="{{ url('integrations')}}">Intergrate Site</a>
            </div>
        </div>
    </div>
    <!-- Item @E -->
    <!-- Item @S -->
    <div class="col-12 col-md-6 col-lg-6">
        <div class="conversational-summary-box-wrap">
            <div class="conv-sammary-head">
                <h5>Conrversation Summary</h5>
                <a href="#">
                <img src="{{asset('assets/images/union-dark.svg')}}" alt="union-icon" class="img-fluid">
                </a>
            </div>
            <div class="conv-summary-txt">
                <img src="{{ asset('assets/images/email-camping/spider-icon.svg') }}" alt="spider-icon" class="img-fluid">
                <h4>No data available</h4>
                <p>Make sure you've intergrated your site so that we can track communication  for you</p>
                <a href="{{ url('integrations')}}">Intergrate Site</a>
            </div>
        </div>
    </div>
    <!-- Item @E -->
    <!-- Item @S -->
    <div class="col-12 col-md-6 col-lg-6">
        <div class="conversational-summary-box-wrap">
            <div class="conv-sammary-head">
                <h5>Conrversation Summary</h5>
                <a href="#">
                <img src="{{asset('assets/images/union-dark.svg')}}" alt="union-icon" class="img-fluid">
                </a>
            </div>
            <div class="conv-summary-txt">
                <img src="{{ asset('assets/images/email-camping/spider-icon.svg') }}" alt="spider-icon" class="img-fluid">
                <h4>No data available</h4>
                <p>Make sure you've intergrated your site so that we can track communication  for you</p>
                <a href="{{ url('integrations')}}">Intergrate Site</a>
            </div>
        </div>
    </div>
    <!-- Item @E -->
  </div>
  <!-- conversational summary @E -->
 
</main>
@endsection