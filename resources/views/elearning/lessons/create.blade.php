@extends('layouts.admin')
@section('title','Lesson Creare ')
@section('style') 
<link href="{{ asset('assets/css/product-researchs.css') }}" rel="stylesheet" type="text/css" />  
@endsection
@section('content') 

<!-- === course create page @S === -->
<main class="product-research-form"> 
 <div class="product-research-create-wrap">
   <div class="row">
     <div class="col-lg-12">
       <div class="create-form-wrap">
         <div class="create-form-head">
           <h6>Create a new Lesson</h6>
           <a href="{{url('admin/elearning/lessons')}}">
             <i class="fa-solid fa-list"></i> All Lessons </a>
         </div>
        <!-- course create form @S -->
        <form action="{{route('lesson_store')}}" method="POST" class="create-form-box" enctype="multipart/form-data">
          @csrf 
          <div class="row">
             <div class="col-12 col-sm-12 col-md-12 col-lg-12">
               <div class="row"> 
                 
                 <div class="col-md-12">
                   <div class="form-group">
                     <label for="course_id">Select Course <sup class="text-danger">*</sup></label>
                      <select name="course_id" id="course_id" class="form-control">
                        <option value="" hidden>Select Course</option>
                        @foreach($courses as $course)
                        <option value="{{$course->id}}">{{$course->title}}</option>
                        @endforeach
                      </select>
                     <i class="fa-solid fa-angle-down"></i>
                     <span class="invalid-feedback">@error('categories'){{ $message }} @enderror</span>
                   </div>
                 </div> 
                 <div class="col-md-12">
                   <div class="form-group">
                     <label for="module_id">Select Module <sup class="text-danger">*</sup></label>
                      <select name="module_id" id="module_id" class="form-control">
                        <option value="" hidden>Select Course</option>
                        @foreach($modules as $module)
                        <option value="{{$module->id}}">{{$module->title}}</option>
                        @endforeach
                      </select>
                     <i class="fa-solid fa-angle-down"></i>
                     <span class="invalid-feedback">@error('categories'){{ $message }} @enderror</span>
                   </div>
                 </div> 
                 <div class="col-md-12">
                   <div class="form-group form-error">
                     <label for="title">Title <sup class="text-danger">*</sup>
                     </label>
                     <input type="text" placeholder="Enter Module Title" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title')}}" id="title">
                     <span class="invalid-feedback">@error('title'){{ $message }} @enderror</span> 
                   </div>
                 </div>  
                 <div class="col-md-6">
                   <div class="form-group">
                     <label for="duration">Duration <sup class="text-danger">*</sup>
                     </label>
                     <input type="text" placeholder="Enter Duration" name="duration" class="form-control @error('duration') is-invalid @enderror" value="{{ old('duration')}}" id="duration">
                     <span class="invalid-feedback">@error('duration'){{ $message }} @enderror</span>
                   </div>
                 </div> 
                 <div class="col-md-6">
                   <div class="form-group">
                     <label for="order">Lesson Order <sup class="text-danger">*</sup>
                     </label>
                     <input type="number" placeholder="Enter Order" name="order" class="form-control @error('order') is-invalid @enderror" value="{{ old('order')}}" id="order">
                     <span class="invalid-feedback">@error('order'){{ $message }} @enderror</span>
                   </div>
                 </div>   
                   
                 <div class="col-md-12">
                   <div class="form-group">
                     <label for="files">Attachment <sup class="text-danger">*</sup></label>
                     <input type="file" name="attachment" id="files" class="form-control  @error('attachment') is-invalid @enderror">
                     <span class="invalid-feedback">@error('attachment'){{ $message }} @enderror</span>
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
                 <div class="col-12">
                  <div class="custom-hr">
                    <hr>
                    <h5>Video </h5>
                  </div>
                 </div>   
                 <div class="col-md-6">
                   <div class="form-group">
                     <label for="video_url">Video URL </label>
                     <input type="url" placeholder="Enter total lesson length" name="video_url" class="form-control @error('video_url') is-invalid @enderror" value="{{ old('video_url')}}" id="video_url">
                     <span class="invalid-feedback">@error('video_url'){{ $message }} @enderror</span>
                   </div>
                 </div> 
                 <div class="col-md-6">
                   <div class="form-group">
                     <label for="attachment_name">Attachment Name
                     </label>
                     <input type="text" placeholder="Enter Attachment Name" name="attachment_name" class="form-control @error('attachment_name') is-invalid @enderror" value="{{ old('attachment_name')}}" id="attachment_name">
                     <span class="invalid-feedback">@error('attachment_name'){{ $message }} @enderror</span>
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
                       <option value="Draft">Draft</option>
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
        <!-- course create form @E -->
       </div>
     </div>
   </div>
 </div> 
</main>
<!-- === course create page @E === -->

@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/modular-behaviour.js@3.1/modular-behaviour.js" type="module"></script>
<script src="https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/4/tinymce.min.js" type="text/javascript"></script>
<script src="{{asset('assets/js/tinymce.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/tag-handler.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/file-upload.js')}}" type="text/javascript"></script>

@endsection