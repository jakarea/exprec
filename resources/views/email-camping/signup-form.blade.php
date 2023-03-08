@extends('layouts.master')

@section('title') Email Campaigns Signup Form @endsection

@section('style') 
<link href="{{ asset('assets/css/email-camping.css') }}" rel="stylesheet" type="text/css" />  
@endsection

@section('content') 
<main class="email-camping-page-wrap"> 
  <!-- book marks @S -->
  <div class="bookmark-box-wrap">
    <ul>
        <li><span>Campaigns</span></li>
        <li><i class="fas fa-angle-right"></i></li>
        <li><a href="#">Edit Name</a></li>
    </ul>
  </div>
  <!-- book marks @E -->

  <!-- multi step email sms wrap @S -->
  <div class="row">
    <!-- Item @S -->
    <div class="col-12 col-md-6 col-lg-4">
        <div class="multi-email-sms-box">
            <div class="sms-img-thumbnail">
                <img src="{{ asset('assets/images/multi-sms-01.png') }}" alt="multi-sms" class="img-fluid">
            </div>
            <div class="sms-txt-box">
                <h4>Multi-step email &amp; SMS</h4>
                <p>Grow your email and SMS lists without hurting conversion</p>
                <div class="sms-buttons">
                    <button class="btn btn-device">
                        <img src="{{ asset('assets/images/device-icon.svg') }}" alt="" class="img-fluid">
                    </button>
                    <button class="btn btn-popup">Pop Up</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Item @E -->
    <!-- Item @S -->
    <div class="col-12 col-md-6 col-lg-4">
        <div class="multi-email-sms-box">
            <div class="sms-img-thumbnail">
                <img src="{{ asset('assets/images/multi-sms-02.png') }}" alt="multi-sms" class="img-fluid">
            </div>
            <div class="sms-txt-box">
                <h4>Multi-step email &amp; SMS</h4>
                <p>Grow your email and SMS lists without hurting conversion</p>
                <div class="sms-buttons">
                    <button class="btn btn-device">
                        <img src="{{ asset('assets/images/device-icon.svg') }}" alt="" class="img-fluid">
                    </button>
                    <button class="btn btn-popup">Pop Up</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Item @E -->
    <!-- Item @S -->
    <div class="col-12 col-md-6 col-lg-4">
        <div class="multi-email-sms-box">
            <div class="sms-img-thumbnail">
                <img src="{{ asset('assets/images/multi-sms-03.png') }}" alt="multi-sms" class="img-fluid">
            </div>
            <div class="sms-txt-box">
                <h4>Multi-step email &amp; SMS</h4>
                <p>Grow your email and SMS lists without hurting conversion</p>
                <div class="sms-buttons">
                    <button class="btn btn-device">
                        <img src="{{ asset('assets/images/device-icon.svg') }}" alt="" class="img-fluid">
                    </button>
                    <button class="btn btn-popup">Pop Up</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Item @E -->
    <!-- Item @S -->
    <div class="col-12 col-md-6 col-lg-4">
        <div class="multi-email-sms-box">
            <div class="sms-img-thumbnail">
                <img src="{{ asset('assets/images/multi-sms-04.png') }}" alt="multi-sms" class="img-fluid">
            </div>
            <div class="sms-txt-box">
                <h4>Multi-step email &amp; SMS</h4>
                <p>Grow your email and SMS lists without hurting conversion</p>
                <div class="sms-buttons">
                    <button class="btn btn-device">
                        <img src="{{ asset('assets/images/device-icon.svg') }}" alt="" class="img-fluid">
                    </button>
                    <button class="btn btn-popup">Pop Up</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Item @E -->
    <!-- Item @S -->
    <div class="col-12 col-md-6 col-lg-4">
        <div class="multi-email-sms-box">
            <div class="sms-img-thumbnail">
                <img src="{{ asset('assets/images/multi-sms-05.png') }}" alt="multi-sms" class="img-fluid">
            </div>
            <div class="sms-txt-box">
                <h4>Multi-step email &amp; SMS</h4>
                <p>Grow your email and SMS lists without hurting conversion</p>
                <div class="sms-buttons">
                    <button class="btn btn-device">
                        <img src="{{ asset('assets/images/device-icon.svg') }}" alt="" class="img-fluid">
                    </button>
                    <button class="btn btn-popup">Pop Up</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Item @E -->
    <!-- Item @S -->
    <div class="col-12 col-md-6 col-lg-4">
        <div class="multi-email-sms-box">
            <div class="sms-img-thumbnail">
                <img src="{{ asset('assets/images/multi-sms-06.png') }}" alt="multi-sms" class="img-fluid">
            </div>
            <div class="sms-txt-box">
                <h4>Multi-step email &amp; SMS</h4>
                <p>Grow your email and SMS lists without hurting conversion</p>
                <div class="sms-buttons">
                    <button class="btn btn-device">
                        <img src="{{ asset('assets/images/device-icon.svg') }}" alt="" class="img-fluid">
                    </button>
                    <button class="btn btn-popup">Pop Up</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Item @E -->
  </div>
  <!-- multi step email sms wrap @E -->

</main>
@endsection