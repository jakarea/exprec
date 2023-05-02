@extends('layouts.admin')
@section('title') Admin - User Profile View @endsection

@section('style')
<link href="{{ asset('assets/css/profile.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<main class="course-page-wrap">

  <!-- user header area @S -->
  <div class="product-filter-wrapper mt-0">
    <form action="" method="GET">
      <div class="product-filter-box mt-0">
        <div class="password-change-txt">
          <h1 class="mb-1">Profile Page</h1>
          <p>Here is <span class="text-danger">{{ $user->name}}</span> profile page.</p>
        </div>
        <div class="form-grp-btn mt-4 ms-auto">
          <a href="{{ route('users.index') }}" class="btn me-3">All Users</a>
        </div>
      </div>
    </form>
  </div>
  <!-- user header area @E -->


  <div class="row align-items-center">
    <div class="col-lg-5">
      <div class="change-password-form w-100">
        <div class="d-flex justify-content-between">
          <h3><span>{{ $user->name}}</span>
            @if(!empty($user->getRoleNames()))
            @foreach($user->getRoleNames() as $v)
            <span class="badge rounded-pill bg-dark ms-5">{{ $v }}</span>
            @endforeach
            @endif
        </div>
        </h3>
        <div class="set-profile-picture">
          <div class="media justify-content-center">
            <img src="{{asset('assets/images/post-01.png')}}" alt="Profile" class="img-fluid">
          </div>
        </div>
        <!-- change pass form @S -->

        <!-- input @S -->
        <div class="form-group">
          <label for="">Name</label>
          <input type="text" placeholder="Name" class="form-control" value="{{ $user->name}}" disabled>
        </div>
        <!-- input @E -->
        <div class="form-group">
          <label for="">Email</label>
          <input type="email" placeholder="Email" class="form-control" value="{{ $user->email}}" disabled>
        </div>
        <!-- input @E -->

        <!-- change pass form @E -->
      </div>
    </div>
    <div class="col-lg-7">
      <div class="profile-imgs">
        <img src="{{asset('assets/images/desk-vector.jpg')}}" alt="desk-vector" class="img-fluid">
      </div>
    </div>
  </div>

</main>
@endsection