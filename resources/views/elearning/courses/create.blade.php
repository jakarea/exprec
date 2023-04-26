@extends('layouts.admin')
@section('title','Course Creare ')
@section('style') 
<link href="{{ asset('assets/css/product-researchs.css') }}" rel="stylesheet" type="text/css" />  
@endsection
@section('content') 
@role("Admin")
<!-- === course create page @S === -->
<main class="product-research-form"> 
 <div class="product-research-create-wrap">
   <div class="row">
     <div class="col-lg-12">
       <div class="create-form-wrap">
         <div class="create-form-head">
           <h6>Create a new Course</h6>
           <a href="{{url('admin/elearning/courses')}}">
             <i class="fa-solid fa-list"></i> All Courses </a>
         </div>
        <!-- course create form @S -->
        <form action="{{route('course_store')}}" method="POST" class="create-form-box" enctype="multipart/form-data">
          @csrf 
          <div class="row">
             <div class="col-12 col-sm-12 col-md-12 col-lg-12">
               <div class="row"> 
                 <div class="col-md-12">
                   <div class="form-group form-error">
                     <label for="title">Title <sup class="text-danger">*</sup>
                     </label>
                     <input type="text" placeholder="Enter Course Title" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title')}}" id="title">
                     <span class="invalid-feedback">@error('title'){{ $message }} @enderror</span> 
                   </div>
                 </div>  
                 <div class="col-md-12">
                   <div class="form-group">
                     <label for="categories">Categories <sup class="text-danger">*</sup></label>
                     <modular-behaviour name="Tags" src="https://cdn.jsdelivr.net/npm/bootstrap5-tags@1.4/tags.min.js" lazy>
                      <select class="form-select @error('categories') is-invalid @enderror" id="categories" name="categories[]" multiple data-allow-clear="1" data-allow-new="true" data-separator="|,|">
                        <option selected="selected" disabled hidden value="">Create categories...</option>
                      </select>
                    </modular-behaviour> 
                     <i class="fa-solid fa-angle-down"></i>
                     <span class="invalid-feedback">@error('categories'){{ $message }} @enderror</span>
                   </div>
                 </div> 
                 <div class="col-md-12">
                   <div class="form-group">
                     <label for="duration">Duration <sup class="text-danger">*</sup>
                     </label>
                     <input type="text" placeholder="Enter Duration" name="duration" class="form-control @error('duration') is-invalid @enderror" value="{{ old('duration')}}" id="duration">
                     <span class="invalid-feedback">@error('duration'){{ $message }} @enderror</span>
                   </div>
                 </div>   
                 <div class="col-md-12">
                   <div class="form-group">
                     <label for="files">Thumbnail <sup class="text-danger">*</sup></label>
                     <input type="file" name="thumbnail" id="files" class="form-control  @error('thumbnail') is-invalid @enderror">
                     <span class="invalid-feedback">@error('thumbnail'){{ $message }} @enderror</span>
                   </div>
                 </div>
                 <div class="col-12">
                  <div id="imgThumbnailPreview"></div>
                </div>
                 <div class="col-md-12">
                   <div class="form-group">
                     <label for="files">Cover Image <sup class="text-danger">*</sup></label>
                     <input type="file" name="coverimage" id="files" class="form-control  @error('coverimage') is-invalid @enderror">
                     <span class="invalid-feedback">@error('coverimage'){{ $message }} @enderror</span>
                   </div>
                 </div>
                 <div class="col-12">
                  <div id="imgCoverimagePreview"></div>
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
                    <textarea name="long_description" id="description" class="form-control @error('long_description') is-invalid @enderror" placeholder="Enter Long Description">{{ old('long_description')}}</textarea>
                    <span class="invalid-feedback">@error('long_description'){{ $message }} @enderror</span>
                  </div>
                </div>
                 <div class="col-12">
                  <div class="custom-hr">
                    <hr>
                    <h5>Modules </h5>
                  </div>
                 </div>  
                 <div class="col-md-4">
                   <div class="form-group">
                     <label for="number_of_module">Total Module
                     </label>
                     <input type="number" placeholder="Enter total module length" name="number_of_module" class="form-control @error('number_of_module') is-invalid @enderror" value="{{ old('number_of_module')}}" id="number_of_module">
                     <span class="invalid-feedback">@error('number_of_module'){{ $message }} @enderror</span>
                   </div>
                 </div> 
                 <div class="col-md-4">
                   <div class="form-group">
                     <label for="number_of_lesson">Total Lesson
                     </label>
                     <input type="number" placeholder="Enter total lesson length" name="number_of_lesson" class="form-control @error('number_of_lesson') is-invalid @enderror" value="{{ old('number_of_lesson')}}" id="number_of_lesson">
                     <span class="invalid-feedback">@error('number_of_lesson'){{ $message }} @enderror</span>
                   </div>
                 </div> 
                 <div class="col-md-4">
                   <div class="form-group">
                     <label for="number_of_quiz">Total Quiz
                     </label>
                     <input type="number" placeholder="Enter total quiz length" name="number_of_quiz" class="form-control @error('number_of_quiz') is-invalid @enderror" value="{{ old('number_of_quiz')}}" id="number_of_quiz">
                     <span class="invalid-feedback">@error('number_of_quiz'){{ $message }} @enderror</span>
                   </div>
                 </div>  
                 <div class="col-md-4">
                   <div class="form-group">
                     <label for="number_of_attachment">Total Attachment
                     </label>
                     <input type="number" placeholder="Enter total attachment length" name="number_of_attachment" class="form-control @error('number_of_attachment') is-invalid @enderror" value="{{ old('number_of_attachment')}}" id="number_of_attachment">
                     <span class="invalid-feedback">@error('number_of_attachment'){{ $message }} @enderror</span>
                   </div>
                 </div>   
                 <div class="col-md-4">
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
        <!-- course create form @E -->
       </div>
     </div>
   </div>
 </div> 
</main>
<!-- === course create page @E === -->
@else
<main class="course-page-wrap d-flex justify-content-center align-items-center">
    <h4>You Don't have access to this page!</h4>
</main>
@endrole
@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/modular-behaviour.js@3.1/modular-behaviour.js" type="module"></script>
<script src="https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/4/tinymce.min.js" type="text/javascript"></script>
<script src="{{asset('assets/js/tinymce.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/tag-handler.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/file-upload.js')}}" type="text/javascript"></script>

@endsection