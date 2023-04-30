@extends('layouts.profile')
@section('title','User Profile')
@section('style') 
<link href="{{ asset('assets/css/profile.css') }}" rel="stylesheet" type="text/css" />  
@endsection
@section('content')  
<!-- === user password chnage page @S === -->
<main class="user-password-chnage"> 
  <div class="container">
  <div class="row align-items-center"> 
    <div class="col-lg-5">
      <div class="password-change-txt">
          <h1 class="mb-1">My Profile</h1>
          <p>Here is your profile page.</p> 
        </div>
        <div class="change-password-form w-100">
          <h3><span>{{ $user->name}}</span></h3>
          <form action="" method="POST">
          @csrf
          <div class="set-profile-picture">
            <div class="media">
              <img src="{{asset('assets/images/post-01.png')}}" alt="Profile" class="img-fluid">
              <div class="media-body">
                <input type="file" id="upload" style="opacity: 0">
                <label for="upload">  
                    <span class="btn btn-upload-pic">Change Photo</span> 
                </label> 
              </div>
            </div>
          </div>
          <p class="mt-2">Once you've entered your new password and confirmed it, click the "Save Changes" button to update your password.</p>
          <!-- change pass form @S -->
         
           <!-- input @S --> 
           <div class="form-group">
              <label for="">Name</label>
              <input type="text" placeholder="Name" class="form-control" value="{{ $user->name}}">
            </div>
           <!-- input @E -->
           <div class="form-group">
              <label for="">Email</label>
              <input type="email" placeholder="Email" class="form-control" value="{{ $user->email}}">
            </div>
           <!-- input @E --> 
           <!-- input @S -->
           <div class="form-group">
              <label for="">Old Password <sup class="text-danger">*</sup></label>
              <input type="password" name="password" placeholder="*********" class="form-control @error('password') is-invalid @enderror" id="password">
              <span class="invalid-feedback">@error('password'){{ $message }} @enderror</span> 
            </div>
           <!-- input @E -->
           <!-- input @S -->
           <div class="form-group">
              <label for="">New Password<sup class="text-danger">*</sup></label>
              <input type="password" name="password_confirmation" placeholder="*********" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation">
              <span class="invalid-feedback">@error('password_confirmation'){{ $message }} @enderror</span> 
            </div>
           <!-- input @E -->
           <!-- submit @S -->
           <div class="form-submit">
              <button class="btn btn-submit" type="submit">Save Changes</button>
            </div>
           <!-- submit @E -->
          </form>
          <!-- change pass form @E -->
        </div>
    </div>
    <div class="col-lg-7">
      <div class="profile-imgs">
      <img src="{{asset('assets/images/desk-vector.jpg')}}" alt="desk-vector" class="img-fluid">
      </div>
    </div>
  </div>
  </div>
</main>
<!-- === user password chnage page @E === -->
@endsection