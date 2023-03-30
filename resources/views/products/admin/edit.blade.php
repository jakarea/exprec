@extends('layouts.admin')
@section('title','Home')
@section('style') 
<link href="{{ asset('assets/css/product-researchs.css') }}" rel="stylesheet" type="text/css" />  
@endsection
@section('content') 

<!-- === product research page @S === -->
<main class="product-research-form">
 
 <!-- research create page start  -->
 <div class="product-research-create-wrap">
   <div class="row">
     <div class="col-lg-12">
       <div class="create-form-wrap">
         <div class="create-form-head">
           <h6>Edit Product</h6>
           <a href="{{url('admin/products')}}">
             <i class="fa-solid fa-list"></i> All Products </a>
         </div>
         <!-- create client form start -->
         <form action="{{route('product_research_update', $product->slug)}}" method="POST" class="create-form-box" enctype="multipart/form-data">
          @csrf
          <div class="row">
             <div class="col-12 col-sm-12 col-md-12 col-lg-12">
               <div class="row"> 
                 <div class="col-md-9">
                   <div class="form-group form-error">
                     <label for="title">Title <sup class="text-danger">*</sup>
                     </label>
                     <input type="text" placeholder="Enter Product Title" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ $product->title }}" id="title">
                     <span class="invalid-feedback">@error('title'){{ $message }} @enderror</span> 
                   </div>
                 </div> 
                 <div class="col-md-3">
                 <div class="form-group form-error">
                     <label for="title">Aliexpress Product ID <sup class="text-danger">*</sup>
                     </label>
                     <input type="text" placeholder="Aliexpress Product ID" name="aliexpress_id" class="form-control @error('aliexpress_id') is-invalid @enderror" value="{{ $product->aliexpress_id }}" id="aliexpress_id">
                     <span class="invalid-feedback">@error('aliexpress_id'){{ $message }} @enderror</span> 
                   </div>
                 </div>
                 <div class="col-md-12">
                   <div class="form-group">
                    @php 
                      $selectedCategories = explode(",",$product->categories); 
                    @endphp
                     <label for="categories">Categories</label>
                     <modular-behaviour name="Tags" src="https://cdn.jsdelivr.net/npm/bootstrap5-tags@1.4/tags.min.js" lazy>
                      <select class="form-select @error('categories') is-invalid @enderror" id="categories" name="categories[]" multiple data-allow-clear="1" data-allow-new="true" data-separator=" |,|  ">
                        <option selected="selected" disabled hidden value="">Choose a categories...</option>
                        @foreach($selectedCategories as $key => $category)
                       <option value="{{$category}}" {{ in_array($category,$selectedCategories) ? "Selected" : ''}} >{{$category}}</option> 
                       @endforeach
                      </select>
                    </modular-behaviour> 
                     <i class="fa-solid fa-angle-down"></i>
                     <span class="invalid-feedback">@error('categories'){{ $message }} @enderror</span>
                   </div>
                 </div>
                 <div class="col-md-4">
                   <div class="form-group">
                     <label for="buy_price">Buying price <sup class="text-danger">*</sup>
                     </label>
                     <input type="text" placeholder="Enter Buying Price" name="buy_price" class="form-control @error('buy_price') is-invalid @enderror" value="{{ $product->buy_price }}" id="buy_price">
                     <span class="invalid-feedback">@error('buy_price'){{ $message }} @enderror</span>
                   </div>
                 </div>
                 <div class="col-md-4">
                   <div class="form-group">
                     <label for="sell_price">Selling price <sup class="text-danger">*</sup>
                     </label>
                     <input type="text" placeholder="Enter Selling Price" name="sell_price" class="form-control @error('sell_price') is-invalid @enderror" value="{{ $product->sell_price }}" id="sell_price">
                     <span class="invalid-feedback">@error('sell_price'){{ $message }} @enderror</span>
                   </div>
                 </div>  
                 
                 <div class="col-md-4">
                   <div class="form-group">
                     <label for="discount">Discount 
                     </label>
                     <input type="text" placeholder="Enter Discount" name="discount" class="form-control @error('discount') is-invalid @enderror" value="{{ $product->discount }}" id="discount">
                     <span class="invalid-feedback">@error('discount'){{ $message }} @enderror</span>
                   </div>
                 </div> 
                 
                 <div class="col-md-12">
                   <div class="form-group">
                     <label for="files">FIlE</label>
                     <input type="file" name="images[]" id="files" class="form-control  @error('images') is-invalid @enderror" multiple>
                     <span class="invalid-feedback">@error('images'){{ $message }} @enderror</span>
                   </div>
                 </div>
                 <div class="col-12">
                 @php $images = json_decode($product->images)  @endphp
                <div id="imgThumbnailPreview">
                @foreach($images as $key=> $image)
                <div class="imgThumbContainer">
                    <div class="IMGthumbnail">
                      <a href="javascript:void(0)" onclick="this.parentElement.parentElement.style.display = 'none';"><i class="fas fa-close"></i></a> 
                      <img src="{{ asset($image) }}" alt="{{$image}}" class="img-fluid"> 
                    </div>
                  </div> 
                  @endforeach 
                </div>
                </div>
                 <div class="col-md-12">
                  <div class="form-group">
                    <label for="short_description">Short Description</label>
                    <textarea name="short_description" id="short_description" class="form-control @error('short_description') is-invalid @enderror" placeholder="Enter Short Description">{{ $product->short_description }}</textarea>
                    <span class="invalid-feedback">@error('short_description'){{ $message }} @enderror</span>
                  </div>
                </div> 
                 <div class="col-md-12">
                  <div class="form-group">
                    <label for="short_description">Description URL</label>
                    <input type="url" placeholder="Enter Aliexpress link" name="description_url" class="form-control @error('description_url') is-invalid @enderror" value="{{ $product->description_url }}" id="description_url">
                    <span class="invalid-feedback">@error('description_url'){{ $message }} @enderror</span>
                  </div>
                </div> 
                 <div class="col-md-12">
                  <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" placeholder="Enter Short Description">{{ $product->description }}</textarea>
                    <span class="invalid-feedback">@error('description'){{ $message }} @enderror</span>
                  </div>
                </div>
                 <div class="col-12">
                  <div class="custom-hr">
                    <hr>
                    <h5>Analytics &amp; Engagment </h5>
                  </div>
                 </div> 
                 <div class="col-md-4">
                   <div class="form-group">
                     <label for="aliexpress_link">Aliexpress Link 
                     </label>
                     <input type="url" placeholder="Enter Aliexpress link" name="aliexpress_link" class="form-control @error('aliexpress_link') is-invalid @enderror" value="{{ $product->aliexpress_link }}" id="aliexpress_link">
                     <span class="invalid-feedback">@error('aliexpress_link'){{ $message }} @enderror</span>
                   </div>
                 </div> 
                 <div class="col-md-4">
                   <div class="form-group">
                     <label for="fb_ads">Facebook ads Link 
                     </label>
                     <input type="url" placeholder="Enter Facebook Ads Link" name="fb_ads" class="form-control @error('fb_ads') is-invalid @enderror" value="{{ $product->fb_ads }}" id="fb_ads">
                     <span class="invalid-feedback">@error('fb_ads'){{ $message }} @enderror</span>
                   </div>
                 </div> 
                 <div class="col-md-4">
                   <div class="form-group">
                     <label for="video_link">Video Link 
                     </label>
                     <input type="url" placeholder="Enter Video Link" name="video_link" class="form-control @error('video_link') is-invalid @enderror" value="{{ $product->video_link }}" id="video_link">
                     <span class="invalid-feedback">@error('video_link'){{ $message }} @enderror</span>

                   </div>
                 </div> 
                 <div class="col-md-4">
                   <div class="form-group">
                     <label for="video_link">Aliexpress Video Link 
                     </label>
                     <input type="url" placeholder="Enter Aliexpress Video Link" name="ali_video_link" class="form-control @error('ali_video_link') is-invalid @enderror" value="{{ $product->ali_video_link }}" id="ali_video_link">
                     <span class="invalid-feedback">@error('ali_video_link'){{ $message }} @enderror</span>

                   </div>
                 </div> 
                 <div class="col-md-4">
                   <div class="form-group">
                     <label for="fb_ads_img">Facebook ads Image Link 
                     </label>
                     <input type="url" placeholder="Enter Facebook Ads Image Source" name="fb_ads_img" class="form-control @error('fb_ads_img') is-invalid @enderror" value="{{ $product->fb_ads_img }}" id="fb_ads_img">
                     <span class="invalid-feedback">@error('fb_ads_img'){{ $message }} @enderror</span>
                   </div>
                 </div> 
                 <div class="col-md-4">
                   <div class="form-group">
                     <label for="video_link_img">Video Image Link </label>
                     <input type="url" placeholder="Enter Video Image Source" name="video_link_img" class="form-control @error('video_link_img') is-invalid @enderror" value="{{ $product->video_link_img }}" id="video_link_img">
                     <span class="invalid-feedback">@error('video_link_img'){{ $message }} @enderror</span>
                   </div>
                 </div> 
                 <div class="col-md-12">
                   <div class="form-group">
                     <label for="url">Links 
                     </label>
                     @php $urls = explode(",",$product->url)  @endphp
                     <div class="url-extra-field">
                     @foreach($urls as $key => $url) 
                      <input type="url" placeholder="Enter URL" name="url[]" class="form-control @error('url') is-invalid @enderror" id="url" multiple value="{{ $url }}">
                     @endforeach 
                     </div> 
                     <span class="invalid-feedback">@error('url'){{ $message }} @enderror</span>
                     <a href="javascript:void(0)" id="url_increment" style="top: 2.8rem"><i class="fas fa-plus"></i></a>
                   </div>
                 </div> 
                 <div class="col-md-12">
                   <div class="form-group">
                     <label for="">Engagement of the add 
                     </label>
                     <div class="row">
                      <div class="col-md-3">
                          <input type="number" placeholder="Enter Heart" name="eng_heart" class="form-control @error('eng_heart') is-invalid @enderror" value="{{ $product->eng_heart }}">
                        <span class="invalid-feedback">@error('eng_heart'){{ $message }} @enderror</span>
                      </div>
                      <div class="col-md-3">
                          <input type="number" placeholder="Enter Comment" name="eng_comment" class="form-control @error('eng_comment') is-invalid @enderror" value="{{ $product->eng_comment }}">
                        <span class="invalid-feedback">@error('eng_comment'){{ $message }} @enderror</span>
                      </div>
                      <div class="col-md-3">
                          <input type="number" placeholder="Enter Share" name="eng_share" class="form-control @error('eng_share') is-invalid @enderror" value="{{ $product->eng_share }}">
                        <span class="invalid-feedback">@error('eng_share'){{ $message }} @enderror</span>
                      </div>
                      <div class="col-md-3">
                          <input type="number" placeholder="Enter Reactions" name="eng_reaction" class="form-control @error('eng_reaction') is-invalid @enderror" value="{{ $product->eng_reaction }}">
                        <span class="invalid-feedback">@error('eng_reaction'){{ $message }} @enderror</span>
                      </div>
                     </div>
                   </div>
                 </div>  
                 <div class="col-md-4">
                   <div class="form-group">
                     <label for="cpa">CPA 
                     </label>
                     <input type="text" placeholder="Enter CPA" name="cpa" class="form-control @error('cpa') is-invalid @enderror" value="{{ $product->cpa }}" id="cpa">
                     <span class="invalid-feedback">@error('cpa'){{ $message }} @enderror</span>
                   </div>
                 </div>   
                 <div class="col-md-4">
                   <div class="form-group">
                     <label for="net">NET 
                     </label>
                     <input type="text" placeholder="Enter NET" name="net" class="form-control @error('net') is-invalid @enderror" value="{{ $product->net }}" id="net">
                     <span class="invalid-feedback">@error('net'){{ $message }} @enderror</span>
                   </div>
                 </div>  
                 <div class="col-md-4">
                   <div class="form-group">
                     <label for="total_order">Total order on alibaba 
                     </label>
                     <input type="text" placeholder="Total Order" name="total_order" class="form-control @error('total_order') is-invalid @enderror" value="{{ $product->total_order }}" id="total_order">
                     <span class="invalid-feedback">@error('total_order'){{ $message }} @enderror</span>
                   </div>
                 </div>  
                 <div class="col-md-4">
                   <div class="form-group">
                     <label for="review">Review on alibaba 
                     </label>
                     <input type="text" placeholder="Between 1 to 5" name="total_review" class="form-control @error('total_review') is-invalid @enderror" value="{{ $product->total_review }}" id="total_review">
                     <span class="invalid-feedback">@error('total_review'){{ $message }} @enderror</span>
                   </div>
                 </div> 
                 <div class="col-md-4">
                   <div class="form-group">
                     <label for="review">Avrage Rating 
                     </label>
                     <input type="text" placeholder="Between 1 to 5" name="avg_rating" class="form-control @error('avg_rating') is-invalid @enderror" value="{{ $product->avg_rating }}" id="avg_rating">
                     <span class="invalid-feedback">@error('avg_rating'){{ $message }} @enderror</span>
                   </div>
                 </div> 
                 <div class="col-12">
                  <div class="custom-hr">
                    <hr>
                    <h5>Interests</h5>
                  </div>
                 </div>
                 <div class="col-md-6">
                   <div class="form-group">
                     <label for="country">Country 
                     </label>
                     <input type="text" placeholder="Enter Country name" name="country" class="form-control @error('country') is-invalid @enderror" value="{{ $product->country }}" id="country">
                     <span class="invalid-feedback">@error('country'){{ $message }} @enderror</span>
                   </div>
                 </div>  
                 <div class="col-md-6">
                   <div class="form-group">
                     <label for="gender">Gender</label>
                     <select name="gender" id="gender" class="form-control @error('gender') is-invalid @enderror">
                       <option value="" disabled>Select Below</option>
                       <option value="All">All</option>
                       <option value="Male">Male</option>
                       <option value="Female">Female</option>
                       <option value="Others">Others</option>
                     </select>
                     <i class="fa-solid fa-angle-down"></i>
                     <span class="invalid-feedback">@error('gender'){{ $message }} @enderror</span>
                   </div>
                 </div>
                 <div class="col-md-6">
                   <div class="form-group">
                     <label for="age">Age 
                     </label>
                     <input type="text" placeholder="Enter age" name="age" class="form-control @error('age') is-invalid @enderror" value="{{ $product->age }}" id="age">
                     <span class="invalid-feedback">@error('age'){{ $message }} @enderror</span>
                   </div>
                 </div>  
                 <div class="col-md-6">
                   <div class="form-group">
                     <label for="audience">Audience 
                     </label>
                     <input type="text" placeholder="Enter audience" name="audience" class="form-control @error('audience') is-invalid @enderror" value="{{ $product->audience }}" id="audience">
                     <span class="invalid-feedback">@error('audience'){{ $message }} @enderror</span>
                   </div>
                 </div>  
                 <div class="col-md-12">
                   <div class="form-group">
                   @php 
                      $selectedinterests = explode(",",$product->interests); 
                    @endphp
                     <label for="tag-input1">Interests</label> 

                     <modular-behaviour name="Interests" src="https://cdn.jsdelivr.net/npm/bootstrap5-tags@1.4/tags.min.js" lazy>
                      <select class="form-select @error('interests') is-invalid @enderror" id="interests" name="interests[]" multiple data-allow-clear="1" data-allow-new="true" data-separator=" |,|  ">
                        <option selected="selected" disabled hidden value="">Choose a interests...</option>
                        @foreach($selectedinterests as $key => $category)
                       <option value="{{$category}}" {{ in_array($category,$selectedinterests) ? "Selected" : ''}} >{{$category}}</option> 
                       @endforeach
                      </select>
                    </modular-behaviour> 
  
                     <span class="invalid-feedback">@error('interests'){{ $message }} @enderror</span>
                   </div>
                 </div>
                 <div class="col-12">
                  <div class="custom-hr">
                    <hr>
                  </div>
                 </div>  
                <div class="col-md-12">
                   <div class="form-group">
                     <label for="status">Status</label>
                     <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
                       <option value="" disabled>Select Below</option>
                       <option value="Active" {{ $product->status == "Active" ? "selected" : '' }}>Active</option>
                       <option value="Inactive" {{ $product->status == "Inactive" ? "selected" : '' }}>Inactive</option>
                     </select>
                     <i class="fa-solid fa-angle-down"></i>
                     <span class="invalid-feedback">@error('status'){{ $message }} @enderror</span>
                   </div>
                 </div>
               </div> <!-- row end -->
             </div>
           </div>
           <div class="row"> 
             <div class="col-12">
               <div class="submit-bttns">
                 <button type="reset" class="btn btn-reset">Clear</button>
                 <button type="submit" class="btn btn-submit">Submit</button>
               </div>
             </div>
           </div>
         </form>
         <!-- Create User form end -->
       </div>
     </div>
   </div>
 </div>
 <!-- research create page end  -->
</main>
<!-- === product research page @E === -->

@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/modular-behaviour.js@3.1/modular-behaviour.js" type="module"></script>
<script src="https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/4/tinymce.min.js" type="text/javascript"></script>
<script src="{{asset('assets/js/tinymce.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/tag-handler.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/file-upload.js')}}" type="text/javascript"></script>

<script>
  const urlBttn = document.querySelector('#url_increment');
  let extraFileds = document.querySelector('.url-extra-field');

  const createFiled = () => { 
    let div = document.createElement("div");
    let node = document.createElement("input"); 
    node.setAttribute("class", "form-control @error('url') is-invalid @enderror");
    node.setAttribute("multiple", ""); 
    node.setAttribute("type", "url"); 
    node.setAttribute("placeholder", "Enter URL"); 
    node.setAttribute("name", "url[]");  
    node.setAttribute("value", "{{ old('aliexpress_link')}}"); 
    let linkk = document.createElement("a");
    linkk.innerHTML = "<i class='fas fa-minus'></i>";
    linkk.setAttribute("onclick", "this.parentElement.style.display = 'none';");
    let divNew = extraFileds.appendChild(div);
    divNew.appendChild(node);
    divNew.appendChild(linkk);
  }

  urlBttn.addEventListener('click',createFiled,true);

</script>

@endsection