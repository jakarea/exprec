@extends('layouts.master')
@section('title') Addspy My List @endsection

@section('style') 
<link href="{{ asset('assets/css/adspy.css') }}" rel="stylesheet" type="text/css" />  
@endsection

@section('content') 
  <main class="interrest-tool-page-wrap adspy-page-wrap">

    <div class="popular-interest-wrap mt-0">
      <div class="popular-imterest-box">
        <ul>
          <li><a href="#" class="active">Dashboard</a></li>
          <li><a href="#">Facebook Ads</a></li>
          <li><a href="#">Pinterest Ads</a></li>
          <li><a href="#">Tiktok Ads</a></li>
          <li><a href="#">Shops Ads</a></li>
          <li><a href="#">Influence Marketing</a></li>
        </ul>
      </div>
    </div>

    <!-- add spy banner @S -->
    <div class="addspy-banner-wrap">
      <div class="media">
        <div class="media-body">
          <h1 class="addspy-main-title">Unlock your <span>SUPERPOWERS</span></h1>
          <p>Preorders are OPEN for the Business Plan!! <br>
          After a year of R&D, Minea is proud to present the perfect tool to find winning products 🤩.</p>

          <p>This plan is in limited access, there are only 45 spots lefts, save your spot now.</p>

          <a href="#">Save my spot</a>
        </div>
        <img src="{{asset('assets/images/rocket.png')}}" alt="Rocket Images" class="img-fluid">
      </div>
    </div>
    <!-- add spy banner @E -->

    <!-- wining product @S -->
    <div class="wining-product-wrapper">
      <h4><img src="{{asset('assets/images/fire.png')}}" alt="Fire Image" class="img-fluid"> Top 10 winning products of the day</h4>

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
            <img src="{{asset('assets/images/post-01.png')}}" alt="Product" class="img-fluid">
            <img src="{{asset('assets/images/play-icon.png')}}" alt="Line" class="img-fluid player-img">
          </div>
          <div class="wining-product-txt">
            <h5>Buy 1 Get 1 FREE</h5>

            <ul>
              <li><a href="#"><i class="fa-regular fa-heart"></i> 23K</a></li>
              <li><a href="#"><img src="{{asset('assets/images/comment-icon.svg')}}" alt="Comment" class="img-fluid"> 12K</a></li>
              <li><a href="#"><img src="{{asset('assets/images/submit-icon.svg')}}" alt="Comment" class="img-fluid"> 15K</a></li>
            </ul>
          </div>
        </div>
        <!-- Item @E -->
        <!-- Item @S -->
        <div class="wining-product-item">
          <div class="wining-product-thumbnail">
            <img src="{{asset('assets/images/post-01.png')}}" alt="Product" class="img-fluid">
            <img src="{{asset('assets/images/play-icon.png')}}" alt="Line" class="img-fluid player-img">
          </div>
          <div class="wining-product-txt">
            <h5>Buy 1 Get 1 FREE</h5>

            <ul>
              <li><a href="#"><i class="fa-regular fa-heart"></i> 23K</a></li>
              <li><a href="#"><img src="{{asset('assets/images/comment-icon.svg')}}" alt="Comment" class="img-fluid"> 12K</a></li>
              <li><a href="#"><img src="{{asset('assets/images/submit-icon.svg')}}" alt="Comment" class="img-fluid"> 15K</a></li>
            </ul>
          </div>
        </div>
        <!-- Item @E -->
        <!-- Item @S -->
        <div class="wining-product-item">
          <div class="wining-product-thumbnail">
          <img src="{{asset('assets/images/post-01.png')}}" alt="Product" class="img-fluid">
            <img src="{{asset('assets/images/play-icon.png')}}" alt="Line" class="img-fluid player-img">
          </div>
          <div class="wining-product-txt">
            <h5>Buy 1 Get 1 FREE</h5>

            <ul>
              <li><a href="#"><i class="fa-regular fa-heart"></i> 23K</a></li>
              <li><a href="#"><img src="{{asset('assets/images/comment-icon.svg')}}" alt="Comment" class="img-fluid"> 12K</a></li>
              <li><a href="#"><img src="{{asset('assets/images/submit-icon.svg')}}" alt="Comment" class="img-fluid"> 15K</a></li>
            </ul>
          </div>
        </div>
        <!-- Item @E -->
        <!-- Item @S -->
        <div class="wining-product-item">
          <div class="wining-product-thumbnail">
          <img src="{{asset('assets/images/post-01.png')}}" alt="Product" class="img-fluid">
            <img src="{{asset('assets/images/play-icon.png')}}" alt="Line" class="img-fluid player-img">
          </div>
          <div class="wining-product-txt">
            <h5>Buy 1 Get 1 FREE</h5>

            <ul>
              <li><a href="#"><i class="fa-regular fa-heart"></i> 23K</a></li>
              <li><a href="#"><img src="{{asset('assets/images/comment-icon.svg')}}" alt="Comment" class="img-fluid"> 12K</a></li>
              <li><a href="#"><img src="{{asset('assets/images/submit-icon.svg')}}" alt="Comment" class="img-fluid"> 15K</a></li>
            </ul>
          </div>
        </div>
        <!-- Item @E -->
      </div>
    </div>
    <!-- wining product @E -->

    <!-- discover potential @S -->
    <div class="discover-potential-wrap">
      <h4><img src="{{asset('assets/images/fire.png')}}" alt="Fire" class="img-fluid"> Discover the full potential</h4>

      <div class="potential-list-wrap">
        <!-- item @S -->
        <div class="potential-item-box">
          <div class="media">
            <img src="{{asset('assets/images/send-icon.png')}}" alt="Send" class="img-fluid">
            <div class="media-body">
              <h6>1 - Verify your mail</h6>
              <p>Verify your mail to continue your usage of Minea</p>
            </div>
          </div>

          <h6><img src="{{asset('assets/images/coin-icon.png')}}" alt="Coin" class="img-fluid"> <span>+300</span> credit free</h6>

          <div class="media">
            <div class="media-body">
              <h6>Skip</h6>
              <p>~30s</p>
            </div>
            <i class="fas fa-angle-right"></i>
          </div>
        </div>
        <!-- item @E -->
        <!-- item @S -->
        <div class="potential-item-box verify-email-item">
          <div class="verify-email-boxs"> 
            <h6><img src="{{asset('assets/images/send-icon.png')}}" alt="Send" class="img-fluid"> Verify your mail</h6>
          </div>
          <div class="media">
          <img src="{{asset('assets/images/send-icon.png')}}" alt="Send" class="img-fluid">
            <div class="media-body">
              <h6>1 - Verify your mail</h6>
              <p>Verify your mail to continue your usage of Minea</p>
            </div>
          </div>

          <h6><img src="{{asset('assets/images/coin-icon.png')}}" alt="Coin" class="img-fluid"> <span>+300</span> credit free</h6>

          <div class="media">
            <div class="media-body">
              <h6>Skip</h6>
              <p>~30s</p>
            </div>
            <i class="fas fa-angle-right"></i>
          </div>
        </div>
        <!-- item @E -->
        <!-- item @S -->
        <div class="potential-item-box verify-email-item">
          <div class="verify-email-boxs"> 
            <h6><img src="{{asset('assets/images/send-icon.png')}}" alt="Send" class="img-fluid"> Verify your mail</h6>
          </div>
          <div class="media">
          <img src="{{asset('assets/images/send-icon.png')}}" alt="Send" class="img-fluid">
            <div class="media-body">
              <h6>1 - Verify your mail</h6>
              <p>Verify your mail to continue your usage of Minea</p>
            </div>
          </div>

          <h6><img src="{{asset('assets/images/coin-icon.png')}}" alt="Coin" class="img-fluid"> <span>+300</span> credit free</h6>

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
    <!-- discover potential @E -->

    <!-- add spy banner @S -->
    <div class="addspy-banner-wrap addspy-banner-two">
      <div class="media">
        <div class="media-body">
          <h1 class="addspy-main-title">Unique partnership with <span>Shopify</span></h1>
          <p>Create a new shopify store and benefit of 90 days for 1$ <br>
            This unique offer is only available for now. Our team fought hard to get this deal. Use it <br> multiple times to iterate on new shops at low cost.
            </p>

          <a href="#">Create a new store on shopify</a>
        </div>
        <img src="{{asset('assets/images/shopify-image.png')}}" alt="Rocket Images" class="img-fluid">
      </div>
    </div>
    <!-- add spy banner @E -->
  </main>
@endsection