@extends('layouts.master')

@section('title') Email Camping @endsection

@section('style') 
<link href="{{ asset('assets/css/email-camping.css') }}" rel="stylesheet" type="text/css" />  
@endsection

@section('content') 
<main class="email-camping-page-wrap"> 
  <div class="email-camping-head">
    <h1><span>Email marketing</span></h1>
    <h5>Here is how to make most of the platform</h5>
  </div>

  <!-- E camping video player @S -->
  <div class="e-camping-video-wrap">
    <div class="e-video-box">
      <div class="main-thumb">
      <img src="{{ asset('assets/images/email-camping/video-thumb.png') }}" alt="video" class="img-fluid">
      </div>
      <div class="player-icon">
        <a href="#"><img src="{{ asset('assets/images/email-camping/play-icon.svg') }}" alt="player" class="img-fluid"></a>
      </div>
    </div>
  </div>
  <!-- E camping video player @E -->
</main>
@endsection