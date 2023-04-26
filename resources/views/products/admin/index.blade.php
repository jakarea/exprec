@extends('layouts.admin')
@section('title') Home @endsection

@section('style') 
<link href="{{ asset('assets/css/product-researchs.css') }}" rel="stylesheet" type="text/css" />  
@endsection

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
      <a href="{{ url('admin/products/create') }}" class="btn me-3">Add Product</a>
        <a href="{{ url('admin/products/create/ali-express') }}" class="btn">Add Product From Aliexpress</a>
      </div>

    </div>
    </form>
   
  </div>
  <!-- product filter area @E -->

  <!-- product listing @S -->
  <div class="row">
    <div class="col-12">
    <div class="productss-list-box">
    @if(count($products) > 0)
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
                Sell Price
            </th>
            <th>
                Aliexpress ID
            </th> 
            <th>
                Status
            </th>
           
            </tr>
            <!-- task item start -->
           
            @foreach($products as $key => $product)
            @php 
            $text = $product->title;
            $maxLength = 60;
              if (strlen($text) > $maxLength) {
                  $lastSpace = strpos($text, ' ', $maxLength);
                  $text = $lastSpace !== false ? substr($text, 0, $lastSpace) . '...' : $text;
              }
          @endphp
            <tr> 
                <td>
                    {{ $key +1 }}
                </td> 
                <td>{{ $text }}</td>
                <td>Є {{ $product->buy_price }}</td>
                <td> Є  {{ $product->sell_price }}</td>

                <td><a href="{{ $product->aliexpress_link }}" target="_blank">{{ $product->aliexpress_id }}</a></td> 

               
                <td>
                    <div class="action-bttn">
                        <a href="{{ url('admin/products/'.$product->slug) }}">
                            <i class="fas fa-eye text-info me-2"></i>
                        </a> 
                        <a href="{{ url('admin/products/'.$product->slug.'/edit') }}">
                            <i class="fas fa-pen text-success me-2"></i>
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
        @else 
              <p class="p-4 text-center">No Products Found!</p>
            @endif
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