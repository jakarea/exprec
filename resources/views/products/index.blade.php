@extends('layouts.master')
@section('title') Product Research @endsection

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
    <h5>Filters</h5>
    <form action="" method="GET">
      <div class="product-filter-box product-filter-box-2">
        <div class="form-grp">
          <label for="">Time</label>
          <select name="" id="" class="form-custom">
            <option value="">All</option>
            <option value="desc">Newest first</option>
            <option value="aesc">Oldest first</option>
          </select>
          <i class="fas fa-angle-down"></i>
        </div>
        <div class="form-grp">
          <label for="">Categories</label>
          @php
          $categoriesg = isset($_GET['categories']) ? $_GET['categories'] : '';
          @endphp
          <select name="categories" class="form-custom">
            <option value="">All</option>
            @foreach($categories as $key => $category)
            <option value="{{$category->name}}" {{ $categoriesg==$category->name ? 'selected' : ''}}>{{$category->name}}
            </option>
            @endforeach
          </select>
          <i class="fas fa-angle-down"></i>
        </div>

        <div class="form-grp">
          <label for="">Buy Price</label>
          @php
          $buy_price = isset($_GET['buy_price']) ? $_GET['buy_price'] : '';
          @endphp
          <select name="buy_price" class="form-custom">
            <option value="">All</option>
            <option value="100" {{ $buy_price=='100' ? 'selected' : '' }}>$100</option>
            <option value="500" {{ $buy_price=='500' ? 'selected' : '' }}>$500</option>
            <option value="1500" {{ $buy_price=='1500' ? 'selected' : '' }}>$1500</option>
            <option value="2000" {{ $buy_price=='2000' ? 'selected' : '' }}>$2000</option>
          </select>
          <i class="fas fa-angle-down"></i>
        </div>
        <div class="form-grp">
          <label for="">Sell Price</label>
          @php
          $sell_price = isset($_GET['sell_price']) ? $_GET['sell_price'] : '';
          @endphp
          <select name="sell_price" class="form-custom">
            <option value="">All</option>
            <option value="100" {{ $sell_price=='100' ? 'selected' : '' }}>$100</option>
            <option value="500" {{ $sell_price=='500' ? 'selected' : '' }}>$500</option>
            <option value="1500" {{ $sell_price=='1500' ? 'selected' : '' }}>$1500</option>
            <option value="2000" {{ $sell_price=='2000' ? 'selected' : '' }}>$2000</option>
          </select>
          <i class="fas fa-angle-down"></i>
        </div>
        <div class="form-grp-btn mt-4">
          <button type="submit" class="btn">Filter</button>
        </div>
      </div>
    </form>
  </div>
  <!-- product filter area @E -->

  <!-- page search area @S -->
  <form action="" method="GET">
    <div class="interrest-search-wrap mb-4">
      <div class="interrest-search-box">
        <input type="text" class="form-control" placeholder="I'm looking for" name="title"
          value="{{ isset($_GET['title']) ? $_GET['title'] : '' }}">
      </div>
      <div class="interrest-bttn-box">
        <button type="submit" class="btn">Search</button>
        <button type="reset" class="btn">Clear</button>
      </div>
    </div>
  </form>
  <!-- page search area @E -->

  <!-- product listing @S -->
  <div class="row">
    @foreach($products as $key => $product)
    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
      <div class="product-item-wrap">
        <div class="media">
          <div class="product-thumb-box">
            @php $images = json_decode($product->images)@endphp
            @if($images)
            <img src="{{ $images[0] }}" alt="{{$product->slug}}" class="img-fluid" title="{{$product->slug}}">
            @endif
          </div>
          <div class="media-body">
            @php
            $maxLength = 35;
            $title = $product->title;
            if (strlen($title) > $maxLength) {
            $title = substr($title, 0, strpos($title, ' ', $maxLength)) . '...';
            }
            @endphp
            <h4>{{$title}}</h4>
            <h5> Posted {{$product->created_at->diffForHumans()}} </h5>
            <div class="product-onfos">
              <h6>Available info</h6>
              <div class="p_infos-group">
                @if($product->cpa)
                <span>
                  <img src="{{ asset('assets/images/infos-icon-02.svg') }}" alt="Icon Infos" class="img-fluid">
                  Analytics</span>
                @endif
                @if($product->eng_heart)
                <span>
                  <img src="{{ asset('assets/images/infos-icon-03.svg') }}" alt="Icon Infos" class="img-fluid">
                  Engagement </span>
                @endif
                @if($product->url)
                <span>
                  <img src="{{ asset('assets/images/infos-icon-05.svg') }}" alt="Icon Infos" class="img-fluid"> Link
                </span>
                @endif
                @if($product->fb_ads)
                <span>
                  <img src="{{ asset('assets/images/infos-icon-06.svg') }}" alt="Icon Infos" class="img-fluid"> FB Ads
                </span>
                @endif
                @if($product->sell_price)
                <span>
                  <img src="{{ asset('assets/images/infos-icon-07.svg') }}" alt="Icon Infos" class="img-fluid"> Retail
                  Price </span>
                @endif
                @if($product->interests)
                <span>
                  <img src="{{ asset('assets/images/infos-icon-01.svg') }}" alt="Icon Infos" class="img-fluid">
                  Interests </span>
                @endif
              </div>
            </div>
          </div>
        </div>
        <div class="product-bttn-box">
          <a href="{{ url('products/'.$product->slug) }}">Show me the details</a>
          <a href="{{ url('products/'.$product->id) .'/add-to-list'}}">
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