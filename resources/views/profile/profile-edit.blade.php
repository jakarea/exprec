@extends('layouts.admin')
@section('title') User - Profile Edit @endsection
@section('style') 
<link href="{{ asset('assets/css/product-researchs.css') }}" rel="stylesheet" type="text/css" />  
<link href="{{ asset('assets/css/profile.css') }}" rel="stylesheet" type="text/css" />  
@endsection
@section('content') 

<!-- === user edit page @S === -->
<main class="product-research-form"> 
 <div class="product-research-create-wrap">
   <div class="row">
     <div class="col-lg-12">
       <div class="create-form-wrap">
        <div class="create-form-head">
          <h6>Edit your profile</h6>
          <a href="{{ url('change-password') }}">
            <i class="fa-solid fa-key"></i> Change Password </a>
          </a>
        </div>
        <!-- user edit form @S -->
        
        <!-- error message @S -->
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <!-- error message @E -->

        {!! Form::model($user, ['method' => 'POST', 'enctype' => 'multipart/form-data', 'class' => 'create-form-box','route' => ['updateMyProfile', $user->id]]) !!}  

          <div class="row">
             <div class="col-12 col-sm-12 col-md-12 col-lg-12">
               <div class="row"> 
               <div class="col-md-12">
                   <div class="form-group">
                     <label for="name">Name <sup class="text-danger">*</sup></label>
                     {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                   </div>
                 </div> 
                 <div class="col-md-12">
                   <div class="form-group">
                     <label for="email">Email <sup class="text-danger">*</sup></label>
                     {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
                   </div>
                 </div>   
                 <div class="col-md-6">
                   <div class="form-group">
                     <label for="password">Password <sup class="text-danger">*</sup></label>
                     {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
                   </div>
                 </div>   
                 <div class="col-md-6">
                   <div class="form-group">
                     <label for="password">Confirm Password <sup class="text-danger">*</sup></label>
                     {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
                   </div>
                 </div>     
                 
               </div> <!-- row end -->
             </div>
           </div> 
           <div class="row align-items-center"> 
           <div class="col-lg-4">
                <div class="set-profile-picture mb-3">
                  <div class="media">
                    {{-- <img src="{{asset('assets/images/post-01.png')}}" alt="Profile" class="img-fluid"> --}}
                    <div class="media-body">
                      <input type="file" id="upload" style="opacity: 1" name="thumbnail">
                      <label for="upload">  
                          <span class="btn btn-upload-pic">Change Photo</span> 
                      </label> 
                    </div>
                  </div>
                </div>
                </div>
             <div class="col-lg-8">
               <div class="submit-bttns">
                 <button type="reset" class="btn btn-reset">Clear</button>
                 <button type="submit" class="btn btn-submit">Submit</button>
               </div>
             </div>
           </div>
           {!! Form::close() !!}
        <!-- user edit form @E -->
       </div>
     </div>
   </div>
 </div> 
</main>
<!-- === user edit page @E === -->

@endsection