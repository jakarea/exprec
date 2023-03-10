@extends('layouts.admin')
@section('title') Home @endsection
@section('content') 

<main class="product-research-page-wrap">

  <!-- session message @S -->
  @include('partials/session-message')
  <!-- session message @E -->

  <!-- product filter area @S -->
  <div class="product-filter-wrapper">
    <h5>Products List</h5>
    <form action="" method="GET">
    <div class="product-filter-box">
      <div class="form-grp">
        <label for="">Time</label> 
        <select name="" id="" class="form-custom">
          <option value="">All</option>
          <option value="desc">Newest </option>
          <option value="aesc">Oldest </option>
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
          <option value="{{$category->name}}" {{ $categoriesg == $category->name ? 'selected' : ''}}>{{$category->name}}</option> 
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
          <option value="100" {{ $buy_price == '100' ? 'selected' : ''}}>$100</option>
          <option value="500" {{ $buy_price == '500' ? 'selected' : ''}}>$500</option>
          <option value="1500" {{ $buy_price == '1500' ? 'selected' : ''}}>$1500</option>
          <option value="2000" {{ $buy_price == '2000' ? 'selected' : ''}}>$2000</option>
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
          <option value="100" {{ $sell_price == '100' ? 'selected' : ''}}>$100</option>
          <option value="500" {{ $sell_price == '500' ? 'selected' : ''}}>$500</option>
          <option value="1500" {{ $sell_price == '1500' ? 'selected' : ''}}>$1500</option>
          <option value="2000" {{ $sell_price == '2000' ? 'selected' : ''}}>$2000</option>
        </select>
        <i class="fas fa-angle-down"></i>
      </div>
      <div class="form-grp-btn mt-4">
        <button type="submit" class="btn">Filter</button>
      </div>

      <div class="form-grp-btn mt-4 ms-auto">
        <a href="{{ url('admin/products/create') }}" class="btn">Add Product</a>
      </div>
    </div>
    </form>
   
  </div>
  <!-- product filter area @E -->

  <!-- product listing @S -->
  <div class="row">
    <div class="col-12">
    <div class="productss-list-box">
        <table>
            <tr> 
            <th width="5%">
                No
            </th> 
            <th>
                Title
            </th>
            <th>
                Price
            </th>
            <th>
                Fb Ads
            </th> 
            <th>
                Status
            </th>
            <th>
                Action
            </th>
            </tr>
            <!-- task item start -->
            @foreach($products as $key => $product)
            <tr> 
                <td>
                    {{ $key +1 }}
                </td> 
                <td>{{ substr($product->title,0,40) }}</td>
                <td>{{ $product->sell_price }}</td>

                <td>{{ substr($product->fb_ads,0,40) }}</td> 

                <td>
                @if( $product->status == "Active")
                <span class="badge rounded-pill text-bg-success">Active</span>
                @elseif($product->status == "Inactive")
                <span class="badge rounded-pill text-bg-danger">Inactive</span>
                @endif
                </td>
                <td>
                    <div class="action-bttn">
                        <a href="{{ url('admin/products/'.$product->slug.'/details') }}">
                            <i class="fas fa-eye text-info me-2"></i>
                        </a> 
                        <a href="{{ url('admin/products/'.$product->slug.'/edit') }}">
                            <i class="fas fa-pen text-primary me-2"></i>
                        </a> 
                        <a href="{{ url('admin/products/'.$product->slug.'/destroy') }}">
                            <i class="fas fa-trash text-danger"></i>
                        </a> 
                    </div>
                </td>
            </tr>
            @endforeach
            <!-- task item end -->  
        </table>
        </div>
    </div>
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

@endsection