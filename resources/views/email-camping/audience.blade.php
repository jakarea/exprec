@extends('layouts.master')

@section('title') Products - Email Campaign @endsection

@section('style')
<link href="{{ asset('assets/css/email-camping.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/e-campaign.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<main class="email-camping-page-wrap">
    {{-- head @S --}}
    <div class="email-camping-head products-head">
        <h1>Products</h1>
        <h5>Send product emails with confidence</h5>
        <h6>Review or update your products to ensure you send emails with your latest (and greatest) items.</h6>
        <p><img src="{{asset('assets/images/e-campaign/up-arrow.svg')}}" alt="Icon" class="img-fluid"> Experec users
            update over 100 million items per month using products.</p>
        
        <div class="products-head-bttns">
            <a href="#">Set up an integration</a>
            <a href="#">Add Custom Products</a>
        </div>
    </div>
    {{-- head @E --}} 

    {{-- inside products @S --}}
    <div class="inside-products-wrap">
        <h5>Get to know more about Products inside of Experec</h5>
        <h6>Check out a few of our articles to get you up to speed about your products inside of Experec</h6>

        <div class="row">
            {{-- item @S --}}
            <div class="col-lg-4 col-md-6 col-12">
                <div class="inside-product-box">
                    <div class="inside-thumb">
                        <img src="{{asset('assets/images/e-campaign/inside-icon-01.png')}}" alt="e-campaign" class="img-fluid">
                    </div>
                    <div class="inside-txt">
                        <h6>Setting up an Integration <i class="fas fa-angle-right"></i></h6>
                        <p>Set up an integration to use Product Feeds and Product Blocks in emails</p>
                    </div>
                </div>
            </div>
            {{-- item @E --}}
            {{-- item @S --}}
            <div class="col-lg-4 col-md-6 col-12">
                <div class="inside-product-box">
                    <div class="inside-thumb">
                        <img src="{{asset('assets/images/e-campaign/inside-icon-02.png')}}" alt="e-campaign" class="img-fluid">
                    </div>
                    <div class="inside-txt">
                        <h6>Adding Custom Products <i class="fas fa-angle-right"></i></h6>
                        <p>Set up an integration to use Product Feeds and Product Blocks in emails</p>
                    </div>
                </div>
            </div>
            {{-- item @E --}}
            {{-- item @S --}}
            <div class="col-lg-4 col-md-6 col-12">
                <div class="inside-product-box">
                    <div class="inside-thumb">
                        <img src="{{asset('assets/images/e-campaign/inside-icon-03.png')}}" alt="e-campaign" class="img-fluid">
                    </div>
                    <div class="inside-txt">
                        <h6>Updating Your Items <i class="fas fa-angle-right"></i></h6>
                        <p>Set up an integration to use Product Feeds and Product Blocks in emails</p>
                    </div>
                </div>
            </div>
            {{-- item @E --}}
        </div>
    </div>
    {{-- inside products @E --}}
</main>
@endsection

@section('script')

@endsection