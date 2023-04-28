@extends('layouts.auth')
@section('title','user password chnage')
@section('style') 
<link href="{{ asset('assets/css/profile.css') }}" rel="stylesheet" type="text/css" />  
@endsection
@section('content')  
<!-- === user password chnage page @S === -->
<main class="user-password-chnage"> 
  <div class="container">
  <div class="row align-items-center">
    <div class="col-lg-6">
      <div class="password-change-txt">
        <h1>We're thrilled to have you on board!</h1>
        <p>we've generated an initial password for you. To ensure the safety of your account Please change it to be more secure. If you need assistance, our support team is always available to help.</p>

        <img src="{{asset('assets/images/desk-vector.jpg')}}" alt="desk-vector" class="img-fluid">
      </div>
    </div>
    <div class="col-lg-6">
        <div class="change-password-form">
          <h3> <span>{{ $user->name}}</span>, You are almost done!</h3>
          <p>Once you've entered your new password and confirmed it, click the "Save Changes" button to update your password.</p>
          <!-- change pass form @S -->
          <form action="">
           <!-- input @S -->
           <div class="form-group">
              <label for="">Email</label>
              <input type="text" placeholder="Email" class="form-control" value="{{ $user->email}}" disabled>
            </div>
           <!-- input @E -->
           <!-- input @S -->
           <div class="form-group">
              <label for="">Password</label>
              <input type="password" placeholder="*********" class="form-control">
            </div>
           <!-- input @E -->
           <!-- input @S -->
           <div class="form-group">
              <label for="">Confirm Password</label>
              <input type="password" placeholder="*********" class="form-control">
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
  </div>
  </div>
</main>
<!-- === user password chnage page @E === -->
@endsection