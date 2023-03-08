@extends('layouts.master')

@section('title') Email Campings @endsection

@section('style') 
<link href="{{ asset('assets/css/email-camping.css') }}" rel="stylesheet" type="text/css" />  
@endsection

@section('content') 
<main class="email-camping-page-wrap"> 
    <div class="email-camping-head">
        <h1>Campaigns</h1> 
    </div>
    
    <!-- page search area @S -->
    <div class="interrest-search-wrap email-camp-search">
        <div class="interrest-search-box">
            <select name="" id=""> 
                <option value="">SEARCH TEXT BY KEYWORDS</option>
                <option value="">SEARCH TEXT BY NAME</option>
                <option value="">SEARCH TEXT BY VALUE</option>
            </select> 
            <img src="{{ asset('assets/images/search-icon.svg') }}" alt="Search icon" class="img-fluid">
            <input type="text" class="form-control" placeholder="Search">
        </div>
        <div class="interrest-bttn-box">
            <a href="javascript:void(0)">Search</a>
            <a href="javascript:void(0)">Filters</a>
        </div>
    </div> 
    <!-- page search area @E -->

    <div class="email-camping-head-bttn">
        <ul>
            <li><a href="#" class="active">Objectives</a></li>
            <li><a href="#">Performance</a></li>
            <li><a href="#">Lists &amp; segments</a></li>
            <li><a href="#">Activity Feed</a></li>
        </ul> 
        <div class="e-camp-sort-bttn">
            <a href="#"><img src="{{ asset('assets/images/sort-icon.svg') }}" alt="" class="img-fluid"> Sort By <i class="fas fa-angle-down"></i></a>
        </div>
    </div> 

    <!-- caping empty box @S -->
    <div class="camping-empty-box-wrap">
        <div class="camping-empty-txt">
            <img src="{{ asset('assets/images/email-camping/spider-icon.svg') }}" alt="spider-icon" class="img-fluid">
            <h5>No Campaigns yet</h5>
            <p>Change or remove applied filters to find what you're looking for.</p>
            <a href="{{url('email-marketing/campaigns/new')}}">Make New Campaign</a>
        </div>
    </div>
    <!-- caping empty box @E -->
</main>
@endsection