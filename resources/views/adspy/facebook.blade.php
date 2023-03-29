@extends('layouts.master')
@section('title','Discover every ads on Facebook')

@section('style') 
<link href="{{ asset('assets/css/adspy.css') }}" rel="stylesheet" type="text/css" />  
<link href="{{ asset('assets/css/email-camping.css') }}" rel="stylesheet" type="text/css" /> 

@endsection

@section('content') 
    <main class="addspy-dahboard-page">
        <div class="container-fluid">
            <form id="search-form">
                <div class="row">
                    <div class="col-12">
                        <div class="addspy-dash-head add-head">
                            <h1>Discover every ads on Facebook <img src="{{ asset('assets/images/personalized-icon.svg') }}" alt="" class="img-fluid"> </h1>
                            <p>Tell me how does it works?</p>
                        </div>
                        <!-- page search area @S -->
                        
                            <div class="interrest-search-wrap email-camp-search mb-0">
                                <div class="interrest-search-box">
                                    <select name="" id="">
                                        <option value="">SEARCH TEXT BY KEYWORDS</option>
                                        <option value="">SEARCH TEXT BY NAME</option>
                                        <option value="">SEARCH TEXT BY VALUE</option>
                                    </select>
                                    <!-- <img src="{{ asset('assets/images/search-icon.svg') }}" alt="Search icon" class="img-fluid"> -->
                                    <input type="text" name="search_terms" id="search_terms" class="form-control" placeholder="Search">
                                </div>
                                <div class="interrest-bttn-box">
                                    <button type="submit" href="javascript:void(0)" class="no-border" >Search</button>
                                    <a href="javascript:void(0)"  class="no-border">Filters</a>
                                </div>
                            </div>
                        
                        <!-- page search area @E -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="addspy-first-list">
                            <div class="d-flex">
                                <h6>My first list</h6>
                                <a href="#">Clear all <img src="{{ asset('assets/images/trash-icon.svg') }}" alt="" class="img-fluid"></a>
                            </div>
                            <div class="adspy-filter-box">
                                <h6>Seen date:</h6>
                                <p><img src="{{ asset('assets/images/calendar-icon.svg') }}" alt="" class="img-fluid"> <input type="date">&nbsp; - &nbsp; <input type="date"></p>
                                <select name="" id="">
                                    <option value="">Countries</option>
                                    <option value="">Bangladesh</option>
                                    <option value="">India</option>
                                    <option value="">Nepal</option>
                                </select>
                                <select name="" id="">
                                    <option value="">Ecom Type</option>
                                    <option value="">Bangladesh</option>
                                    <option value="">India</option>
                                    <option value="">Nepal</option>
                                </select>
                                <select name="" id="">
                                    <option value="">Pins</option>
                                    <option value="">Bangladesh</option>
                                    <option value="">India</option>
                                    <option value="">Nepal</option>
                                </select>
                                <select name="" id="">
                                    <option value="">Comments</option>
                                    <option value="">Bangladesh</option>
                                    <option value="">India</option>
                                    <option value="">Nepal</option>
                                </select>
                                <select name="" id="">
                                    <option value="">Advacnced</option>
                                    <option value="">Bangladesh</option>
                                    <option value="">India</option>
                                    <option value="">Nepal</option>
                                </select>
                            </div>

                            <div class="adspy-filter-box">
                                <h6>First seen:</h6>
                                <p><img src="{{ asset('assets/images/calendar-icon.svg') }}" alt="" class="img-fluid"> <input type="date">&nbsp; - &nbsp; <input type="date"></p>
                                <select name="media" id="media">
                                    <option value="">Media Type</option>
                                    <option value="">Bangladesh</option>
                                    <option value="">India</option>
                                    <option value="">Nepal</option>
                                </select>
                                <select name="" id="">
                                    <option value="">Sex</option>
                                    <option value="">Male</option>
                                    <option value="">Female</option>
                                </select>
                                <select name="language" id="language">
                                    <option value="">Language</option>
                                    <option value="">Bangladesh</option>
                                    <option value="">India</option>
                                    <option value="">Nepal</option>
                                </select>
                            </div>

                            <div class="adspy-filter-box">
                                <h6>Last seen:</h6>
                                <p><img src="{{ asset('assets/images/calendar-icon.svg') }}" alt="" class="img-fluid"> <input type="date">&nbsp; - &nbsp; <input type="date"></p>
                            </div>
                            <div class="adspy-filter-box">
                                <h6>Creation date:</h6>
                                <p><img src="{{ asset('assets/images/calendar-icon.svg') }}" alt="" class="img-fluid"> <input type="date">&nbsp; - &nbsp; <input type="date"></p>
                            </div>

                        </div>
                    </div>

                </div>
            </form>
            <div class="row">
                <div class="col-12">
                    <div class="quick-query">
                        <h6>Quick query:</h6>
                        <a href="#">Dropshipping</a>
                        <a href="#">Ecommerce</a>
                        <a href="#"><img src="{{ asset('assets/images/save-icon.svg') }}" alt="" class="img-fluid"> Save current query</a>
                    </div>
                    <div class="addspy-multi-select">
                        <div class="d-flex">
                            <h6>Multi select:</h6>
                            <p>⌘+A</p>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked> 
                            </div>
                        </div>
                        <div>
                            <a href="#"><img src="{{ asset('assets/images/sort-icon.svg') }}" alt="" class="img-fluid"> Sort By <i class="fas fa-angle-down"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="ad-container" class="d-flex justify-content-center">
                    <!-- Data will be loaded here -->
                        
                </div>
                <div class="d-flex align-items-center justify-content-center img-fluid d-none" id="ad-container-preloader">
                    <img src="{{ asset('assets/images/preloader3.gif') }}" alt=""  style="width:25%">
                </div>
            </div>
        </div>
    </main>
@endsection

@section('script')
<script src="{{ asset('assets/js/facebook.js') }}"></script>
@endsection
