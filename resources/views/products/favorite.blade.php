@extends('layouts.master')
@section('title') My Products @endsection

@section('style') 
<link href="{{ asset('assets/css/product-researchs.css') }}" rel="stylesheet" type="text/css" />  
@endsection

@section('content') 
@role("Admin")
<main class="d-flex justify-content-center align-items-center">
    <h4>You Don't have access to this page!</h4>
</main>
@else 
<main class="product-research-page-wrap  ">

  <!-- session message @S -->
  @include('partials/session-message')
  <!-- session message @E -->
 
  <!-- product filter area @S -->
  <div class="product-filter-wrapper mt-0">
    <h5>My Products</h5>
    
  </div>
  <!-- product filter area @E --> 

  <!-- product listing @S -->
  <div class="row">
    @foreach($products as $f_product) 
    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
      <div class="product-item-wrap">
        <div class="media">
          <div class="product-thumb-box">
            @php $images = json_decode($f_product->product->images)@endphp   
            @if($images)
            <img src="{{ $images[0] }}" alt="{{$f_product->product->slug}}" class="img-fluid" title="{{$f_product->product->slug}}"> 
            @endif
          </div> 
          <div class="media-body">
          @php 
            $maxLength = 35;
            $title = $f_product->product->title;
            if (strlen($title) > $maxLength) {
              $title = substr($title, 0, strpos($title, ' ', $maxLength)) . '...';
            }
          @endphp
            <h4>{{$title}}</h4> 
              <h5> Posted {{$f_product->product->created_at->diffForHumans()}} </h5> 
            <div class="product-onfos">
              <h6>Available info</h6>
              <div class="p_infos-group">
                @if($f_product->product->cpa)
                  <span>
                    <img src="{{ asset('assets/images/infos-icon-02.svg') }}" alt="Icon Infos" class="img-fluid"> Analytics</span> 
                @endif 
                @if($f_product->product->eng_heart)
                <span>
                  <img src="{{ asset('assets/images/infos-icon-03.svg') }}" alt="Icon Infos" class="img-fluid"> Engagement </span>
                @endif
              @if($f_product->product->url)
                <span>
                  <img src="{{ asset('assets/images/infos-icon-05.svg') }}" alt="Icon Infos" class="img-fluid"> Link </span>
              @endif
              @if($f_product->product->fb_ads)
                <span>
                  <img src="{{ asset('assets/images/infos-icon-06.svg') }}" alt="Icon Infos" class="img-fluid"> FB Ads </span> 
              @endif
              @if($f_product->product->sell_price)
                <span>
                  <img src="{{ asset('assets/images/infos-icon-07.svg') }}" alt="Icon Infos" class="img-fluid"> Retail Price  </span> 
              @endif
              @if($f_product->product->interests)
                <span>
                  <img src="{{ asset('assets/images/infos-icon-01.svg') }}" alt="Icon Infos" class="img-fluid"> Interests </span> 
              @endif
              </div>
            </div>
          </div>
        </div>
        <div class="product-bttn-box">
          <a href="{{ url('products/'.$f_product->product->slug) }}">Show me the details</a>
          <a href="{{ url('products/'.$f_product->product->id) .'/remove-from-list'}}" title="Remove from list" > 
            <img src="{{ asset('assets/images/cart-icon.svg') }}" alt="Cart" class="img-fluid">
          </a>
        </div>
      </div>
    </div> 
    @endforeach
  </div>
  <!-- product listing @E -->

  <!-- product pagginate @S -->
  <div class="row">
    <div class="col-12">
      <div class="pagginate-wrap">
        {{ $products->links('pagination::bootstrap-5') }}
      </div>
    </div>
  </div>
  <!-- product pagginate @E -->
</main>
@endrole
@endsection