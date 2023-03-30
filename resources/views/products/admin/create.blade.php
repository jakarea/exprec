@extends('layouts.admin')
@section('title','Aliexpress Product ')
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
           <h6>Create a new Product</h6>
           <a href="{{url('admin/products')}}">
             <i class="fa-solid fa-list"></i> All Products </a>
         </div>
         <!-- create client form start -->
         <form action="{{route('product_research_store')}}" method="POST" class="create-form-box" enctype="multipart/form-data">
          @csrf 
          <div class="row">
             <div class="col-12 col-sm-12 col-md-12 col-lg-12">
               <div class="row"> 
                 <div class="col-md-12">
                   <div class="form-group form-error">
                     <label for="title">Title <sup class="text-danger">*</sup>
                     </label>
                     <input type="text" placeholder="Enter Product Title" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title')}}" id="title">
                     <span class="invalid-feedback">@error('title'){{ $message }} @enderror</span> 
                   </div>
                 </div> 

                 <div class="col-md-12">
                   <div class="form-group">
                     <label for="categories">Categories <sup class="text-danger">*</sup></label>
                     <modular-behaviour name="Tags" src="https://cdn.jsdelivr.net/npm/bootstrap5-tags@1.4/tags.min.js" lazy>
                      <select class="form-select @error('categories') is-invalid @enderror" id="categories" name="categories[]" multiple data-allow-clear="1" data-allow-new="true" data-separator=" |,|  ">
                        <option selected="selected" disabled hidden value="">Choose a categories...</option>
                        @foreach($categories as $key => $category)
                       <option value="{{$category->name}}">{{$category->name}}</option> 
                       @endforeach
                      </select>
                    </modular-behaviour> 
                     <i class="fa-solid fa-angle-down"></i>
                     <span class="invalid-feedback">@error('categories'){{ $message }} @enderror</span>
                   </div>
                 </div>
                 <div class="col-md-6">
                   <div class="form-group">
                     <label for="buy_price">Buying price <sup class="text-danger">*</sup>
                     </label>
                     <input type="text" placeholder="Enter Buying Price" name="buy_price" class="form-control @error('buy_price') is-invalid @enderror" value="{{ old('buy_price')}}" id="buy_price">
                     <span class="invalid-feedback">@error('buy_price'){{ $message }} @enderror</span>
                   </div>
                 </div>
                 <div class="col-md-6">
                   <div class="form-group">
                     <label for="sell_price">Selling price <sup class="text-danger">*</sup>
                     </label>
                     <input type="text" placeholder="Enter Selling Price" name="sell_price" class="form-control @error('sell_price') is-invalid @enderror" value="{{ old('sell_price')}}" id="sell_price">
                     <span class="invalid-feedback">@error('sell_price'){{ $message }} @enderror</span>
                   </div>
                 </div>  
                 
                 <div class="col-md-12">
                   <div class="form-group">
                     <label for="files">FIlE <sup class="text-danger">*</sup></label>
                     <input type="file" name="images[]" id="files" class="form-control  @error('images') is-invalid @enderror" multiple>
                     <span class="invalid-feedback">@error('images'){{ $message }} @enderror</span>
                   </div>
                 </div>
                 <div class="col-12">
                <div id="imgThumbnailPreview"></div>
                </div>
                 <div class="col-md-12">
                  <div class="form-group">
                    <label for="short_description">Short Description <sup class="text-danger">*</sup></label>
                    <textarea name="short_description" id="short_description" class="form-control @error('short_description') is-invalid @enderror" placeholder="Enter Short Description">{{ old('short_description')}}</textarea>
                    <span class="invalid-feedback">@error('short_description'){{ $message }} @enderror</span>
                  </div>
                </div> 
                 <div class="col-md-12">
                  <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" placeholder="Enter Short Description">{{ old('description')}}</textarea>
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
                     <input type="hidden" id="aliexpress_product_id" name="aliexpress_product_id" value=""/>
                     <input type="url" placeholder="Enter Aliexpress link" name="aliexpress_link" class="form-control @error('aliexpress_link') is-invalid @enderror" value="{{ old('aliexpress_link')}}" id="aliexpress_link">
                     <span class="invalid-feedback" id="aliexpress_link_error">@error('aliexpress_link'){{ $message }} @enderror</span>
                     <span class="invalid-feedback" >@error('aliexpress_product_id'){{ $message }} @enderror</span>
                   </div>
                 </div> 
                 <div class="col-md-4">
                   <div class="form-group">
                     <label for="fb_ads">Facebook ads Link 
                     </label>
                     <input type="url" placeholder="Enter Facebook Ads Link" name="fb_ads" class="form-control @error('fb_ads') is-invalid @enderror" value="{{ old('fb_ads')}}" id="fb_ads">
                     <span class="invalid-feedback">@error('fb_ads'){{ $message }} @enderror</span>
                   </div>
                 </div> 
                 <div class="col-md-4">
                   <div class="form-group">
                     <label for="video_link">Video Link 
                     </label>
                     <input type="url" placeholder="Enter Video Link" name="video_link" class="form-control @error('video_link') is-invalid @enderror" value="{{ old('video_link')}}" id="video_link">
                     <span class="invalid-feedback">@error('video_link'){{ $message }} @enderror</span>

                   </div>
                 </div> 
                 <div class="col-md-6">
                   <div class="form-group">
                     <label for="fb_ads_img">Facebook ads Image Link 
                     </label>
                     <input type="url" placeholder="Enter Facebook Ads Image Source" name="fb_ads_img" class="form-control @error('fb_ads_img') is-invalid @enderror" value="{{ old('fb_ads_img')}}" id="fb_ads_img">
                     <span class="invalid-feedback">@error('fb_ads_img'){{ $message }} @enderror</span>
                   </div>
                 </div> 
                 <div class="col-md-6">
                   <div class="form-group">
                     <label for="video_link_img">Video Image Link </label>
                     <input type="url" placeholder="Enter Video Image Source" name="video_link_img" class="form-control @error('video_link_img') is-invalid @enderror" value="{{ old('video_link_img')}}" id="video_link_img">
                     <span class="invalid-feedback">@error('video_link_img'){{ $message }} @enderror</span>
                   </div>
                 </div> 
                 <div class="col-md-12">
                   <div class="form-group">
                     <label for="url">Links 
                     </label>
                     <input type="url" placeholder="Enter URL" name="url[]" class="form-control @error('url') is-invalid @enderror"  id="url" multiple>
                     <div class="url-extra-field">
                     </div>
                     <span class="invalid-feedback">@error('url'){{ $message }} @enderror</span>
                     <a href="javascript:void(0)" id="url_increment"><i class="fas fa-plus"></i></a>
                   </div>
                 </div> 
                 <div class="col-md-12">
                   <div class="form-group">
                     <label for="">Engagement of the add 
                     </label>
                     <div class="row">
                      <div class="col-md-3">
                          <input type="number" placeholder="Enter Heart" name="eng_heart" class="form-control @error('eng_heart') is-invalid @enderror" value="{{ old('eng_heart')}}">
                        <span class="invalid-feedback">@error('eng_heart'){{ $message }} @enderror</span>
                      </div>
                      <div class="col-md-3">
                          <input type="number" placeholder="Enter Comment" name="eng_comment" class="form-control @error('eng_comment') is-invalid @enderror" value="{{ old('eng_comment')}}">
                        <span class="invalid-feedback">@error('eng_comment'){{ $message }} @enderror</span>
                      </div>
                      <div class="col-md-3">
                          <input type="number" placeholder="Enter Share" name="eng_share" class="form-control @error('eng_share') is-invalid @enderror" value="{{ old('eng_share')}}">
                        <span class="invalid-feedback">@error('eng_share'){{ $message }} @enderror</span>
                      </div>
                      <div class="col-md-3">
                          <input type="number" placeholder="Enter Reactions" name="eng_reaction" class="form-control @error('eng_reaction') is-invalid @enderror" value="{{ old('eng_reaction')}}">
                        <span class="invalid-feedback">@error('eng_reaction'){{ $message }} @enderror</span>
                      </div>
                     </div>
                   </div>
                 </div>  
                 <div class="col-md-2">
                   <div class="form-group">
                     <label for="cpa">CPA 
                     </label>
                     <input type="text" placeholder="Enter CPA" name="cpa" class="form-control @error('cpa') is-invalid @enderror" value="{{ old('cpa')}}" id="cpa">
                     <span class="invalid-feedback">@error('cpa'){{ $message }} @enderror</span>
                   </div>
                 </div>   
                 <div class="col-md-2">
                   <div class="form-group">
                     <label for="net">NET 
                     </label>
                     <input type="text" placeholder="Enter NET" name="net" class="form-control @error('net') is-invalid @enderror" value="{{ old('net')}}" id="net">
                     <span class="invalid-feedback">@error('net'){{ $message }} @enderror</span>
                   </div>
                 </div>  
                 <div class="col-md-3">
                   <div class="form-group">
                     <label for="total_order">Total order on alibaba 
                     </label>
                     <input type="text" placeholder="Total Order" name="total_order" class="form-control @error('total_order') is-invalid @enderror" value="{{ old('total_order')}}" id="total_order">
                     <span class="invalid-feedback">@error('total_order'){{ $message }} @enderror</span>
                   </div>
                 </div> 
                 <div class="col-md-3">
                   <div class="form-group">
                     <label for="total_review">Number of Review 
                     </label>
                     <input type="text" placeholder="Total review on aliexpress" name="total_review" class="form-control @error('total_review') is-invalid @enderror" value="{{ old('total_review')}}" id="total_review">
                     <span class="invalid-feedback">@error('total_review'){{ $message }} @enderror</span>
                   </div>
                 </div>   
                 <div class="col-md-2">
                   <div class="form-group">
                     <label for="avg_rating">Avarage Rating 
                     </label>
                     <input type="text" placeholder="Between 1 to 5" name="avg_rating" class="form-control @error('cpa') is-invalid @enderror" value="{{ old('avg_rating')}}" id="avg_rating">
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
                     <input type="text" placeholder="Enter Country name" name="country" class="form-control @error('country') is-invalid @enderror" value="{{ old('country')}}" id="country">
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
                     <input type="text" placeholder="Enter age" name="age" class="form-control @error('age') is-invalid @enderror" value="{{ old('age')}}" id="age">
                     <span class="invalid-feedback">@error('age'){{ $message }} @enderror</span>
                   </div>
                 </div>  
                 <div class="col-md-6">
                   <div class="form-group">
                     <label for="audience">Audience 
                     </label>
                     <input type="text" placeholder="Enter audience" name="audience" class="form-control @error('audience') is-invalid @enderror" value="{{ old('audience')}}" id="audience">
                     <span class="invalid-feedback">@error('audience'){{ $message }} @enderror</span>
                   </div>
                 </div>  
                 <div class="col-md-12">
                   <div class="form-group">
                     <label for="tag-input1">Interests</label> 
 

                     <input type="text" placeholder="Enter Interests" name="interests" class="form-control @error('interests') is-invalid @enderror" value="{{ old('interests')}}" id="tag-input1">

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
                       <option value="Active">Active</option>
                       <option value="Inactive">Inactive</option>
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
  const aliexpress_link = document.querySelector('#aliexpress_link');
  const aliexpress_link_error = document.querySelector('#aliexpress_link_error');
  const aliexpress_product_id = document.querySelector('#aliexpress_product_id')

  const createFiled = () => { 
    let div = document.createElement("div");
    let node = document.createElement("input"); 
    node.setAttribute("class", "form-control @error('url') is-invalid @enderror");
    node.setAttribute("multiple", ""); 
    node.setAttribute("type", "url"); 
    node.setAttribute("placeholder", "Enter URL"); 
    node.setAttribute("name", "url[]");  
    // node.setAttribute("value", "{{ old('aliexpress_link')}}"); 
    let linkk = document.createElement("a");
    linkk.innerHTML = "<i class='fas fa-minus'></i>";
    linkk.setAttribute("onclick", "this.parentElement.style.display = 'none';");
    let divNew = extraFileds.appendChild(div);
    divNew.appendChild(node);
    divNew.appendChild(linkk);
  }

  urlBttn.addEventListener('click',createFiled,true);


  aliexpress_link.addEventListener('change',function(){
    inputValue = aliexpress_link.value;
    const regex = /^(?:https?:\/\/)?(?:www\.)?(?:.*\.)?aliexpress\.[a-z]{2,3}\/item\/(\d+)\.html(?:.*)?$/;
    const match = regex.exec(inputValue);
    if(!regex.test(inputValue)){
      aliexpress_link_error.innerText="Please provide a valid Aliexpress product link!"
      aliexpress_product_id.value="invalid"
    }
    if (match) {
      const itemId = match[1];
      aliexpress_link_error.innerText=""
      aliexpress_product_id.value=itemId

    }
  })
</script>

@endsection