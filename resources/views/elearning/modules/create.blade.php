@extends('layouts.admin')
@section('title','Module Creare ')
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
           <h6>Create a new Module</h6>
           <a href="{{url('admin/elearning/modules')}}">
             <i class="fa-solid fa-list"></i> All Modules </a>
         </div>
        <!-- course create form @S -->
        <form action="{{route('module_store')}}" method="POST" class="create-form-box">
          @csrf 
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
                 
             <div class="col-12 col-sm-12 col-md-12 col-lg-12">
               <div class="row"> 
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
                     <label for="order">Module Order <sup class="text-danger">*</sup>
                     </label>
                     <input type="number" placeholder="Enter Order" name="order" class="form-control @error('order') is-invalid @enderror" value="{{ old('order')}}" id="order">
                     <span class="invalid-feedback">@error('order'){{ $message }} @enderror</span>
                   </div>
                 </div>   
                 <div class="col-12">
                  <div class="custom-hr">
                    <hr>
                    <h5>Lesson </h5>
                  </div>
                 </div>   
                 <div class="col-md-3">
                   <div class="form-group">
                     <label for="number_of_lesson">Total Lesson
                     </label>
                     <input type="number" placeholder="Enter total lesson length" name="number_of_lesson" class="form-control @error('number_of_lesson') is-invalid @enderror" value="{{ old('number_of_lesson')}}" id="number_of_lesson">
                     <span class="invalid-feedback">@error('number_of_lesson'){{ $message }} @enderror</span>
                   </div>
                 </div> 
                 <div class="col-md-3">
                   <div class="form-group">
                     <label for="number_of_quiz">Total Quiz
                     </label>
                     <input type="number" placeholder="Enter total quiz length" name="number_of_quiz" class="form-control @error('number_of_quiz') is-invalid @enderror" value="{{ old('number_of_quiz')}}" id="number_of_quiz">
                     <span class="invalid-feedback">@error('number_of_quiz'){{ $message }} @enderror</span>
                   </div>
                 </div>  
                 <div class="col-md-3">
                   <div class="form-group">
                     <label for="number_of_attachment">Total Attachment
                     </label>
                     <input type="number" placeholder="Enter total attachment length" name="number_of_attachment" class="form-control @error('number_of_attachment') is-invalid @enderror" value="{{ old('number_of_attachment')}}" id="number_of_attachment">
                     <span class="invalid-feedback">@error('number_of_attachment'){{ $message }} @enderror</span>
                   </div>
                 </div>   
                 <div class="col-md-3">
                   <div class="form-group">
                     <label for="number_of_video">Total Video
                     </label>
                     <input type="number" placeholder="Enter total video length" name="number_of_video" class="form-control @error('number_of_video') is-invalid @enderror" value="{{ old('number_of_video')}}" id="number_of_video">
                     <span class="invalid-feedback">@error('number_of_video'){{ $message }} @enderror</span>
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