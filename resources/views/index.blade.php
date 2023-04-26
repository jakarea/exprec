@extends('layouts.master')
@section('title','Home Page ')
@section('style') 
<link href="{{ asset('assets/css/home.css') }}" rel="stylesheet" type="text/css" />  
@endsection
@section('content') 

<!-- === main home page @S === -->
<main class="main-home-page"> 
    <div class="row">
        <!-- col @S -->
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
        <!-- col @E --> 
    </div>
</main>
<!-- === main home page @E === -->

@endsection
@section('script') 
@endsection