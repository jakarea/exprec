@extends('layouts.master')
@section('title') Addspy My List @endsection

@section('style') 
<link href="{{ asset('assets/css/adspy.css') }}" rel="stylesheet" type="text/css" />  
<link href="{{ asset('assets/css/video-controller.css') }}" rel="stylesheet" type="text/css" />  
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
        @foreach($ads as $ad)
        @php 
          $ad_id = $ad->ad_id;
          $ad = json_decode($ad->data); 
          
        @endphp
        <div class="wining-product-item">
          <div class="wining-product-thumbnail">
            @if(isset($ad->images) && count($ad->images) > 0)
                <img src="{{ $ad->images[0]->original_image_url}}" alt="post-image" class="img-fluid">
            @endif

            @if(isset($ad->videos) && count($ad->videos) > 0)

            <div class="video-container list-video-wrapper">
                  <video class="video-container__video" controlslist="nodownload" height="100%" poster="{{$ad->videos[0]->video_preview_image_url}}"  width="100%" controls="">
                  <source  src="{{$ad->videos[0]->video_hd_url ? $ad->videos[0]->video_hd_url : $ad->videos[0]->video_sd_url}}" type="video/mp4">
                      Your browser does not support the video tag.
                  </video>
                  <!-- video controller @S -->
                  <div class="video-container__controls"> 
                            <div class="progress">
                                <div class="progress__current"></div>
                            </div>
                            <button class="control control--backward">
                                <i class="fas fa-backward"></i>
                            </button>
                            <button class="control control--play paused">
                                <i class="fas fa-play"></i>
                                <i class="fas fa-pause"></i>
                            </button>
                            <button class="control control--stop">
                                <i class="fas fa-stop"></i>
                            </button>
                            <button class="control control--forward">
                                <i class="fas fa-forward"></i>
                            </button>
                            <button class="control control--replay">
                                <i class="fas fa-sync"></i>
                            </button>
                            <button class="control control--volume">
                                <div class="control--volume__button">
                                    <i class="fas fa-volume-off"></i>
                                    <i class="fas fa-volume-up"></i>
                                </div>
                                <input class="control--volume__slider" value="1" type="range" min="0" max="1" step="0.01" style="width: 76px">
                            </button>
                            <button class="control control--fullscreen">
                                <i class="fas fa-expand"></i>
                                <i class="fas fa-compress"></i>
                            </button>
                        </div>
                        <!-- video controller @E -->
            </div>
            @endif
          </div> 
          <div class="wining-product-txt">
            <h5><a href="">{{ isset($ad->title) ? $ad->title : "" }}</a></h5>
           <ul>
              <li><a href="#"><i class="fa-regular fa-heart"></i>  {{ isset($ad->estimated_audience_size) && $ad->estimated_audience_size->lower_bound ? $ad->estimated_audience_size->lower_bound : ''}}</a></li>
              <li><a href="#"><img src="{{asset('assets/images/comment-icon.svg')}}" alt="Comment" class="img-fluid"> 12K</a></li>
              <li><a href="#"><img src="{{asset('assets/images/submit-icon.svg')}}" alt="Comment" class="img-fluid"> {{ $ad->impressions && $ad->impressions->lower_bound ? $ad->impressions->lower_bound : ''}}</a></li>
            </ul>
            
            <div class="adspy-filter-product-bttns">
                  <a href="facebook/{{$ad_id}}" target="_blank">See Ad details</a> 
              </div>
          </div> 
        </div>

        @endforeach
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


@section('script')
<script src="{{asset('assets/js/videoController.js')}}" type="text/javascript"></script>
@endsection
