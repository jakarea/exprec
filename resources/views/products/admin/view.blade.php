@extends('layouts.master')
@section('title') Home @endsection
@section('style') 
<link href="{{ asset('assets/css/product-researchs.css') }}" rel="stylesheet" type="text/css" />  
@endsection
@section('content') 

<!-- === product research page @S === -->
<main class="product-research-details-page-wrap">
<div class="back-bttn">
  <a href="{{ url('admin/products') }}">
    <i class="fas fa-arrow-left"></i> Back </a>
</div> 
<!-- product details wrap @S -->
<div class="product-details-wrap">
  <div class="row">
    <div class="col-12">
      <div class="product-details-txt-wrap">
        <div class="d_flex">
          <h1>{{$product->title }}</h1>
          <a href="#" class="big-cart-cion">
            <img src="{{asset('assets/images/cart-icon.svg')}}" alt="Cart" class="img-fluid">
          </a>
        </div>
      </div>
    </div>
    <div class="col-12 col-sm-12 col-md-12 col-lg-8">
      <div class="product-details-txt-wrap">  
        <h3> Posted {{$product->created_at->diffForHumans()}} </h3>
        <div class="product-tags-box">
          @php $cateogires = explode(",",$product->categories)  @endphp
          @foreach($cateogires as $key => $category)
          <span>{{$category}}</span>
          @endforeach
        </div>
        <div class="ali-express-bttn">
          <a href="{{$product->aliexpress_link}}">
            <img src="{{asset('assets/images/ali-express-icon.png')}}" alt="ali-express" class="img-fluid"> See on Aliexpress </a>
        </div>
        <div class="product-description">
            {!! $product->description !!}
          <p>Please Note: {{$product->short_description }}</p> 
          
        </div>
      </div>
    </div>
    <div class="col-12 col-sm-12 col-md-12 col-lg-4">
      <div class="product-img-preview-box mt-4">
      @php $images = json_decode($product->images)  @endphp   
        <div class="main-thumb"> 
        @if($images)
            <img src="{{ asset('assets/images/product/'.$images[0]) }}" alt="{{$product->slug}}" id="main-thumbnail" class="img-fluid" title="{{$product->slug}}">  
            @endif
        </div>
        <div class="products-bttm-small-preiview">
        @foreach(array_slice($images, 0, 4) as $image)
          <a href="javascript:void(0)">
            <img src="{{ asset('assets/images/product/'.$image) }}" alt="{{$image}}" class="img-fluid">
          </a> 
        @endforeach
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="custom-hrs">
        <hr>
      </div>
    </div>
    <div class="col-lg-8">
      <div class="profit-cost-graph-wrap">
        <h5>Your Profits &amp; Costs</h5>
        <div class="d-flex">
          <div>
            <h4>${{$product->sell_price }}</h4>
            <h6>Selling Price</h6>
          </div>
          <div>
            <h4 style="color: #FF6262;">${{$product->buy_price }}</h4>
            <h6>Product Cost</h6>
          </div>
          <div>
            <h4 style="color: #4CDE73;">${{ ((int)$product->sell_price - (int)$product->buy_price) }}</h4>
            <h6>Profit Margin</h6>
          </div>
          <div> 
            <h4 style="color: #727DFF;">{{ ((int)$product->sell_price * (int)$product->buy_price) / 100 }}%</h4>
            <h6>Margin</h6>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="product-onfos">
        <h6 style="font-size: 1.2rem;">Available info</h6>
        <div class="row p_infos-group mt-3 ps-md-0">  
          @if($product->cpa)
          <div class="col-6 col-md-4 mb-2">
            <span>
              <img src="{{ asset('assets/images/infos-icon-02.svg') }}" alt="Icon Infos" class="img-fluid"> Analytics</span>
          </div>
          @endif

          @if($product->reaction)
          <div class="col-6 col-md-4">
            <span>
              <img src="{{ asset('assets/images/infos-icon-03.svg') }}" alt="Icon Infos" class="img-fluid"> Reaction </span>
          </div> 
          @endif
          @if($product->eng_share)
          <div class="col-6 col-md-4">
            <span>
              <img src="{{ asset('assets/images/infos-icon-03.svg') }}" alt="Icon Infos" class="img-fluid"> Share </span>
          </div> 
          @endif

          @if($product->url)
          <div class="col-6 col-md-4 mb-2">
            <span>
              <img src="{{ asset('assets/images/infos-icon-05.svg') }}" alt="Icon Infos" class="img-fluid"> Link </span>
          </div>
          @endif
          @if($product->video_link)
          <div class="col-6 col-md-4 mb-2">
            <span>
              <img src="{{ asset('assets/images/infos-icon-05.svg') }}" alt="Icon Infos" class="img-fluid"> Video Link </span>
          </div>
          @endif
          @if($product->fb_ads_img)
          <div class="col-6 col-md-4 mb-2">
            <span>
              <img src="{{ asset('assets/images/infos-icon-05.svg') }}" alt="Icon Infos" class="img-fluid"> FB ads </span>
          </div>
          @endif

          @if($product->fb_ads)
          <div class="col-6 col-md-4">
            <span>
              <img src="{{ asset('assets/images/infos-icon-06.svg') }}" alt="Icon Infos" class="img-fluid"> FB Ads </span>
          </div>
          @endif
          @if($product->cpa)
          <div class="col-6 col-md-4">
            <span>
              <img src="{{ asset('assets/images/infos-icon-06.svg') }}" alt="Icon Infos" class="img-fluid"> CPA </span>
          </div>
          @endif
          @if($product->net)
          <div class="col-6 col-md-4">
            <span>
              <img src="{{ asset('assets/images/infos-icon-06.svg') }}" alt="Icon Infos" class="img-fluid"> NET </span>
          </div>
          @endif

          @if($product->sell_price)

          <div class="col-6 col-md-4 mb-2">
            <span>
              <img src="{{ asset('assets/images/infos-icon-07.svg') }}" alt="Icon Infos" class="img-fluid"> Retail Price  </span>
          </div>
          @endif
          @if($product->interests)
          <div class="col-6 col-md-4">
            <span>
              <img src="{{ asset('assets/images/infos-icon-01.svg') }}" alt="Icon Infos" class="img-fluid"> Interests </span>
          </div>
          @endif
         
        </div>
      </div>
    </div>
    <div class="col-12">
      <div class="custom-hrs">
        <hr>
      </div>
    </div>
    <div class="col-lg-3">
      <div class="info-details-wrap">
        <h4>
          <img src="{{ asset('assets/images/profit-01.svg') }}" alt="Info" class="img-fluid"> Profits
        </h4>
        <div class="info-list">
          <table>
            <tr>
              <td> Profit Margin: </td>
              <td>${{ ((int)$product->sell_price - (int)$product->buy_price) }} </td>
            </tr>
            <tr>
              <td> CPA: </td>
              <td> ${{ $product->cpa }} </td>
            </tr>
            <tr>
              <td> NET: </td>
              <td>${{ $product->net }}</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <div class="col-lg-3">
      <div class="info-details-wrap">
        <h4>
          <img src="{{ asset('assets/images/profit-01.svg') }}" alt="Info" class="img-fluid"> Analytics
        </h4>
        <div class="info-list">
          <table>
            <tr>
              <td> Sorce </td>
              <td> ALIEXPERSS </td>
            </tr>
            <tr>
              <td>Total Orders </td>
              <td> {{ $product->total_order }} </td>
            </tr> 
            <tr>
              <td>Total Reviews </td>
              <td style="color: #F37F14;">
                <i class="fa fa-star"></i> {{ $product->review }}
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <a href="{{ $product->aliexpress_link }}">Show Byers Reviews</a>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="info-details-wrap">
        <h4>
          <img src="{{ asset('assets/images/profit-01.svg') }}" alt="Info" class="img-fluid"> Engagement
        </h4>
        <div class="row engage-box">
          <div class="col-3">
            <div class="engage-icon">
              <img src="{{ asset('assets/images/engage-icon-01.svg') }}" alt="Engage" class="img-fluid">
              <p>{{$product->eng_heart}}</p>
            </div>
          </div>
          <div class="col-3">
            <div class="engage-icon">
              <img src="{{ asset('assets/images/engage-icon-02.svg') }}" alt="Engage" class="img-fluid">
              <p>{{$product->eng_comment}}</p>
            </div>
          </div>
          <div class="col-3">
            <div class="engage-icon">
              <img src="{{ asset('assets/images/engage-icon-03.svg') }}" alt="Engage" class="img-fluid">
              <p>{{$product->eng_share}}</p>
            </div>
          </div>
          <div class="col-3">
            <div class="engage-icon">
              <img src="{{ asset('assets/images/engage-icon-04.svg') }}" alt="Engage" class="img-fluid">
              <p>{{$product->eng_reaction}}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-2">
    @if($product->url)
      <div class="info-details-wrap">
        <h4>
          <img src="{{ asset('assets/images/link-icon.svg') }}" alt="Link" class="img-fluid"> Links
        </h4>
        <div class="engage-box">
          
         @php $pro_urls = explode(",",$product->url) @endphp
          @foreach($pro_urls as $key => $url)  
          @php $parse = parse_url($url) @endphp
         
          <a href="{{$url}}">{{ str_replace('www.','',$parse['host']) }}</a>
         
          @endforeach 
        </div>
      </div>
      @endif
      
    </div>
    <div class="col-12">
      <div class="custom-hrs">
        <hr>
      </div>
    </div>
    
    <div class="col-lg-4">
      <div class="info-details-wrap">
        <h4>
          <img src="{{ asset('assets/images/f-icon.svg') }}" alt="Info" class="img-fluid"> Facebook Ads:
        </h4>
        @if(is_image_exist($product->fb_ads))
        <a href="{{$product->fb_ads}}">
          <img src="{{ $product->fb_ads_img }}" alt="Facebook Ads Image Not Found" class="img-fluid">
        </a>
        @endif
      </div>
    </div>
   
    
    
    <div class="col-lg-4">
      <div class="info-details-wrap">
        <h4>
          <img src="{{ asset('assets/images/f-icon.svg') }}" alt="Info" class="img-fluid"> Video:
        </h4>
        @if(is_image_exist($product->video_link))
        <a href="{{ $product->video_link }}">
          <img src="{{ $product->video_link_img }}" alt="Video Image Not Found" class="img-fluid">
        </a>
        @endif
      </div>
    </div>
    
    <div class="col-12">
      <div class="custom-hrs">
        <hr>
      </div>
    </div>
    <div class="col-12">
      <div class="country-details-wrap">
        <div>
          <h5>{{ $product->country }}</h5>
          <p>Country</p>
        </div>
        <div>
          <h5>{{ $product->gender }}</h5>
          <p>Gender</p>
        </div>
        <div>
          <h5>{{ $product->age }}+</h5>
          <p>Age Range</p>
        </div>
        <div>
          <h5>{{ $product->audience }}K</h5>
          <p>Audience size</p>
        </div>
        <div class="interest-boxss">
          <p>INTERRESTS</p>
          <h5>
            @php $interests = explode(",",$product->interests)  @endphp
            @foreach($interests as $key => $interest)
            <span>{{$interest}},</span>
            @endforeach
          </h5>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- product details wrap @E -->
</main>
<!-- === product research page @E === -->

@endsection
@section('script') 
<script>
// product view toggle js
 const allProducts = document.querySelectorAll(".products-bttm-small-preiview a");
 const mainImg = document.getElementById("main-thumbnail");
 function showBigImg(e) {
   mainImg.src = e.target.src; 
 }
 allProducts.forEach((product) => {
   product.addEventListener("click", showBigImg);
 });
</script>
@endsection