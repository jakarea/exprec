@extends('layouts.master')
@section('title') Addspy @endsection

@section('style') 
<link href="{{ asset('assets/css/adspy.css') }}" rel="stylesheet" type="text/css" />  
@endsection

@section('content') 
<main class="addspy-dahboard-page">
    
   <div class="container-fluid">
     <div class="row">
       <div class="col-12">
         <div class="addspy-dash-head">
           <h1>Good morning <span>Jone</span>
           </h1>
           <p>Find important messages, tips, and links to helpful resources here:</p>
         </div>
       </div>
     </div>
     <div class="row">
      <div class="col-12">
        <div class="potential-list-wrap">
          <!-- item @S -->
          <div class="potential-item-box">
            <div class="media">
              <img src="{{ asset('assets/images/send-icon.png') }}" alt="Send" class="img-fluid">
              <div class="media-body">
                <h6>1 - Verify your mail</h6>
                <p>Verify your mail to continue your usage of Minea</p>
              </div>
            </div>

            <h6><img src="{{ asset('assets/images/coin-icon.png') }}" alt="Coin" class="img-fluid"> <span>+300</span> credit free</h6>

            <div class="media">
              <div class="media-body">
                <h6>Skip</h6>
                <p>~30s</p>
              </div>
              <i class="fas fa-angle-right"></i>
            </div>
          </div>
          <!-- item @E --> 
        </div>
      </div>
     </div>
     
     <div class="row">
      <div class="col-12">
        <!-- wining product @S -->
        <div class="wining-product-wrapper">
          <h4><img src="{{ asset('assets/images/fire.png') }}" alt="Fire Image" class="img-fluid"> Top 10 winning products of the day</h4>

          <div class="wining-product-head">
            <ul>
              <li><a href="#" class="active">Facebook Ads</a></li>
              <li><a href="#">Tiktok Ads</a></li>
              <li><a href="#">Pinterest Ads</a></li>
            </ul>
            <div class="banner-arrow-box">
              <a href="#"><i class="fas fa-angle-left"></i></a>
              <a href="#"><i class="fas fa-angle-right"></i></a>
            </div>
          </div>
          <div class="wining-products-box">
            <!-- Item @S -->
            <div class="wining-product-item">
              <div class="wining-product-thumbnail">
                <img src="{{ asset('assets/images/post-01.png') }}" alt="Product" class="img-fluid">
                <img src="{{ asset('assets/images/play-icon.png') }}" alt="Line" class="img-fluid player-img">
              </div>
              <div class="wining-product-txt">
                <h5>Buy 1 Get 1 FREE</h5>

                <ul>
                  <li><a href="#"><i class="fa-regular fa-heart"></i> 23K</a></li>
                  <li><a href="#"><img src="{{ asset('assets/images/comment-icon.svg') }}" alt="Comment" class="img-fluid"> 12K</a></li>
                  <li><a href="#"><img src="{{ asset('assets/images/submit-icon.svg') }}" alt="Comment" class="img-fluid"> 15K</a></li>
                </ul>
              </div>
            </div>
            <!-- Item @E -->
            <!-- Item @S -->
            <div class="wining-product-item">
              <div class="wining-product-thumbnail">
                <img src="{{ asset('assets/images/post-02.png') }}" alt="Product" class="img-fluid">
                <img src="{{ asset('assets/images/play-icon.png') }}" alt="Line" class="img-fluid player-img">
              </div>
              <div class="wining-product-txt">
                <h5>Buy 1 Get 1 FREE</h5>

                <ul>
                  <li><a href="#"><i class="fa-regular fa-heart"></i> 23K</a></li>
                  <li><a href="#"><img src="{{ asset('assets/images/comment-icon.svg') }}" alt="Comment" class="img-fluid"> 12K</a></li>
                  <li><a href="#"><img src="{{ asset('assets/images/submit-icon.svg') }}" alt="Comment" class="img-fluid"> 15K</a></li>
                </ul>
              </div>
            </div>
            <!-- Item @E -->
            <!-- Item @S -->
            <div class="wining-product-item">
              <div class="wining-product-thumbnail">
                <img src="{{ asset('assets/images/post-03.png') }}" alt="Product" class="img-fluid">
                <img src="{{ asset('assets/images/play-icon.png') }}" alt="Line" class="img-fluid player-img">
              </div>
              <div class="wining-product-txt">
                <h5>Buy 1 Get 1 FREE</h5>

                <ul>
                  <li><a href="#"><i class="fa-regular fa-heart"></i> 23K</a></li>
                  <li><a href="#"><img src="{{ asset('assets/images/comment-icon.svg') }}" alt="Comment" class="img-fluid"> 12K</a></li>
                  <li><a href="#"><img src="{{ asset('assets/images/submit-icon.svg') }}" alt="Comment" class="img-fluid"> 15K</a></li>
                </ul>
              </div>
            </div>
            <!-- Item @E --> 
            <!-- Item @S -->
            <div class="wining-product-item">
              <div class="wining-product-thumbnail">
              <img src="{{ asset('assets/images/post-01.png') }}" alt="Product" class="img-fluid">
                <img src="{{ asset('assets/images/play-icon.png') }}" alt="Line" class="img-fluid player-img">
              </div>
              <div class="wining-product-txt">
                <h5>Buy 1 Get 1 FREE</h5>

                <ul>
                  <li><a href="#"><i class="fa-regular fa-heart"></i> 23K</a></li>
                  <li><a href="#"><img src="{{ asset('assets/images/comment-icon.svg') }}" alt="Comment" class="img-fluid"> 12K</a></li>
                  <li><a href="#"><img src="{{ asset('assets/images/submit-icon.svg') }}" alt="Comment" class="img-fluid"> 15K</a></li>
                </ul>
              </div>
            </div>
            <!-- Item @E --> 
          </div>
        </div>
        <!-- wining product @E -->
      </div>
     </div>
     <div class="row mb-4">
      <div class="col-md-6">
        <div class="discover-personalized-list">
          <div class="media">
            <img src="{{ asset('assets/images/personalized-icon.svg') }}" alt="personalized-icon" class="img-fluid">
            <div class="media-body">
              <h5>Discover your personalized lists</h5>
              <p>Discover our free lists of winning products</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="discover-personalized-list text-md-end">
          <a href="#">Add New List <i class="fas fa-list"></i></a>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="personalized-list-box">
          <div class="d-flex">
            <h5>My first list</h5>
            <a href="#"><i class="fa-solid fa-ellipsis"></i></a>
          </div>
          <div class="row">
            <div class="col-4 col-sm-3 col-lg-2 text-center">
              <img src="{{ asset('assets/images/per-icon-01.svg') }}" alt="" class="img-fluid">
              <p>0</p>
            </div>
            <div class="col-4 col-sm-3 col-lg-2 text-center">
              <img src="{{ asset('assets/images/per-icon-02.svg') }}" alt="" class="img-fluid">
              <p>0</p>
            </div>
            <div class="col-4 col-sm-3 col-lg-2 text-center">
              <img src="{{ asset('assets/images/per-icon-03.svg') }}" alt="" class="img-fluid">
              <p>0</p>
            </div>
            <div class="col-4 col-sm-3 col-lg-2 text-center">
              <img src="{{ asset('assets/images/per-icon-04.svg') }}" alt="" class="img-fluid">
              <p>0</p>
            </div>
            <div class="col-4 col-sm-3 col-lg-2 text-center">
              <img src="{{ asset('assets/images/per-icon-05.svg') }}" alt="" class="img-fluid">
              <p>0</p>
            </div>
            <div class="col-4 col-sm-3 col-lg-2 text-center">
              <img src="{{ asset('assets/images/per-icon-06.svg') }}" alt="" class="img-fluid">
              <p>0</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="personalized-list-box">
          <div class="d-flex">
            <h5>My Second list</h5>
            <a href="#"><i class="fa-solid fa-ellipsis"></i></a>
          </div>
          <div class="row">
            <div class="col-4 col-sm-3 col-lg-2 text-center">
              <img src="{{ asset('assets/images/per-icon-01.svg') }}" alt="" class="img-fluid">
              <p>0</p>
            </div>
            <div class="col-4 col-sm-3 col-lg-2 text-center">
              <img src="{{ asset('assets/images/per-icon-02.svg') }}" alt="" class="img-fluid">
              <p>0</p>
            </div>
            <div class="col-4 col-sm-3 col-lg-2 text-center">
              <img src="{{ asset('assets/images/per-icon-03.svg') }}" alt="" class="img-fluid">
              <p>0</p>
            </div>
            <div class="col-4 col-sm-3 col-lg-2 text-center">
              <img src="{{ asset('assets/images/per-icon-04.svg') }}" alt="" class="img-fluid">
              <p>0</p>
            </div>
            <div class="col-4 col-sm-3 col-lg-2 text-center">
              <img src="{{ asset('assets/images/per-icon-05.svg') }}" alt="" class="img-fluid">
              <p>0</p>
            </div>
            <div class="col-4 col-sm-3 col-lg-2 text-center">
              <img src="{{ asset('assets/images/per-icon-06.svg') }}" alt="" class="img-fluid">
              <p>0</p>
            </div>
          </div>
        </div>
      </div>
     </div>

   </div>
 </main>
@endsection