@extends('layouts.master')
@section('title','Discover every ads on Facebook')

@section('style') 
<link href="{{ asset('assets/css/adspy.css') }}" rel="stylesheet" type="text/css" />  
<link href="{{ asset('assets/css/email-camping.css') }}" rel="stylesheet" type="text/css" /> 
@endsection

@section('content') 
<main class="addspy-dahboard-page">

  <div class="container-fluid">
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
                    <img src="{{ asset('assets/images/search-icon.svg') }}" alt="Search icon" class="img-fluid">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <div class="interrest-bttn-box">
                    <a href="javascript:void(0)">Search</a>
                    <a href="javascript:void(0)">Filters</a>
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

                    <select name="" id="">
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
                    <select name="" id="">
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
      <div class="col-lg-4">
         <!-- Item @S -->
         <div class="wining-product-item adspy-filter-product">
              <div class="wining-product-thumbnail">
                <img src="{{ asset('assets/images/post-01.png') }}" alt="Product" class="img-fluid main-img">
                <img src="{{ asset('assets/images/play-icon.png') }}" alt="Line" class="img-fluid player-img">
              </div>
              <div class="wining-product-txt">
                <h5>Buy 1 Get 1 FREE</h5>
                <h3>12 Days</h3>
                <ul>
                  <li><a href="#"><img src="{{ asset('assets/images/tag-icon.svg') }}" alt="Comment" class="img-fluid"> 23K</a></li>
                  <li><a href="#"><img src="{{ asset('assets/images/pin-icon.svg') }}" alt="Comment" class="img-fluid"> 12K</a></li>
                  <li><a href="#"><img src="{{ asset('assets/images/cht-icon.svg') }}" alt="Comment" class="img-fluid"> 15K</a></li>
                </ul>
                <table>
                    <tr>
                        <td><img src="{{ asset('assets/images/calendar-clr-icon.svg') }}" alt="Comment" class="img-fluid"> First Seen</td>
                        <td>Sep 18, 2021</td>
                    </tr>
                    <tr>
                        <td><img src="{{ asset('assets/images/calendar-clr-icon.svg') }}" alt="Comment" class="img-fluid"> Last Seen</td>
                        <td>Sep 18, 2021</td>
                    </tr>
                </table> 
                <div class="adspy-filter-product-bttns">
                    <a href="#">See Pinterest ad</a>
                    <a href="#">Add to a list</a>
                </div>
              </div>
            </div>
            <!-- Item @E -->
      </div>
      <div class="col-lg-4">
         <!-- Item @S -->
         <div class="wining-product-item adspy-filter-product">
              <div class="wining-product-thumbnail">
                <img src="{{ asset('assets/images/post-02.png') }}" alt="Product" class="img-fluid main-img">
                <img src="{{ asset('assets/images/play-icon.png') }}" alt="Line" class="img-fluid player-img">
              </div>
              <div class="wining-product-txt">
                <h5>Buy 1 Get 1 FREE</h5>
                <h3>12 Days</h3>
                <ul>
                  <li><a href="#"><img src="{{ asset('assets/images/tag-icon.svg') }}" alt="Comment" class="img-fluid"> 23K</a></li>
                  <li><a href="#"><img src="{{ asset('assets/images/pin-icon.svg') }}" alt="Comment" class="img-fluid"> 12K</a></li>
                  <li><a href="#"><img src="{{ asset('assets/images/cht-icon.svg') }}" alt="Comment" class="img-fluid"> 15K</a></li>
                </ul>
                <table>
                    <tr>
                        <td><img src="{{ asset('assets/images/calendar-clr-icon.svg') }}" alt="Comment" class="img-fluid"> First Seen</td>
                        <td>Sep 18, 2021</td>
                    </tr>
                    <tr>
                        <td><img src="{{ asset('assets/images/calendar-clr-icon.svg') }}" alt="Comment" class="img-fluid"> Last Seen</td>
                        <td>Sep 18, 2021</td>
                    </tr>
                </table> 
                <div class="adspy-filter-product-bttns">
                    <a href="#">See Pinterest ad</a>
                    <a href="#">Add to a list</a>
                </div>
              </div>
            </div>
            <!-- Item @E -->
      </div>
      <div class="col-lg-4">
         <!-- Item @S -->
         <div class="wining-product-item adspy-filter-product">
              <div class="wining-product-thumbnail">
                <img src="{{ asset('assets/images/post-03.png') }}" alt="Product" class="img-fluid main-img">
                <img src="{{ asset('assets/images/play-icon.png') }}" alt="Line" class="img-fluid player-img">
              </div>
              <div class="wining-product-txt">
                <h5>Buy 1 Get 1 FREE</h5>
                <h3>12 Days</h3>
                <ul>
                  <li><a href="#"><img src="{{ asset('assets/images/tag-icon.svg') }}" alt="Comment" class="img-fluid"> 23K</a></li>
                  <li><a href="#"><img src="{{ asset('assets/images/pin-icon.svg') }}" alt="Comment" class="img-fluid"> 12K</a></li>
                  <li><a href="#"><img src="{{ asset('assets/images/cht-icon.svg') }}" alt="Comment" class="img-fluid"> 15K</a></li>
                </ul>
                <table>
                    <tr>
                        <td><img src="{{ asset('assets/images/calendar-clr-icon.svg') }}" alt="Comment" class="img-fluid"> First Seen</td>
                        <td>Sep 18, 2021</td>
                    </tr>
                    <tr>
                        <td><img src="{{ asset('assets/images/calendar-clr-icon.svg') }}" alt="Comment" class="img-fluid"> Last Seen</td>
                        <td>Sep 18, 2021</td>
                    </tr>
                </table> 
                <div class="adspy-filter-product-bttns">
                    <a href="#">See Pinterest ad</a>
                    <a href="#">Add to a list</a>
                </div>
              </div>
            </div>
            <!-- Item @E -->
      </div>
     </div>
  </div>
 </main>
@endsection