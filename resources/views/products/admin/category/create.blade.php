@extends('layouts.admin')
@section('title') Home @endsection
@section('style') 
<link href="{{ asset('assets/css/product-researchs.css') }}" rel="stylesheet" type="text/css" />  
@endsection
@section('content') 

<!-- === product research page @S === -->
<main class="product-research-form">
  <!-- inner submenu @S -->
  @include('products/admin/partials/sub-sidebar')
 <!-- inner submenu @E -->
 
 <!-- research create page start  -->
 <div class="product-research-create-wrap">
   <div class="row">
     <div class="col-lg-12">
       <div class="create-form-wrap">
         <div class="create-form-head">
           <h6>Create a new Category</h6>
           <a href="{{url('admin/categories')}}">
             <i class="fa-solid fa-list"></i> All Categories </a>
         </div>
         <!-- create client form start -->
         <form action="{{route('category_store')}}" method="POST" class="create-form-box">
          @csrf 
          <div class="row">
             <div class="col-12 col-sm-12 col-md-12 col-lg-12">
               <div class="row">
                 <div class="col-md-12">
                   <div class="form-group form-error">
                     <label for="">Name <sup class="text-white">*</sup>
                     </label>
                     <input type="text" placeholder="Enter name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name')}}">
                     <span class="invalid-feedback">@error('name'){{ $message }} @enderror</span>
                   </div>
                 </div> 
                 <div class="col-md-6">
                   <div class="form-group">
                     <label for="">Status</label>
                     <select name="status" id="" class="form-control @error('status') is-invalid @enderror">
                       <option value="" disabled>Select Below</option>
                       <option value="Active">Active</option>
                       <option value="Inactive">Inactive</option>
                     </select>
                     <i class="fa-solid fa-angle-down"></i>
                     <span class="invalid-feedback">@error('status'){{ $message }} @enderror</span>
                   </div>
                 </div> 
                 <div class="col-md-6 mt-md-4">
                  <div class="submit-bttns mt-1">
                    <button type="reset" class="btn btn-reset">Clear</button>
                    <button type="submit" class="btn btn-submit">Submit</button>
                  </div>
                </div>
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