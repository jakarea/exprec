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
      <div class="change-password-form w-100 customer-profile-info">
        <div class="set-profile-picture">
          <div class="media justify-content-center">
            @if($user->thumbnail)
            <img src="{{ asset('assets/images/user/'.$user->thumbnail) }}" alt="{{$user->name}}"
              class="img-fluid">
            @else
            <span>{!! strtoupper($user->name[0]) !!}</span>
            @endif
          </div>
          <div class="role-label">
            @if(!empty($user->getRoleNames()))
            @foreach($user->getRoleNames() as $v)
            <span class="badge rounded-pill bg-dark">{{ $v }}</span>
            @endforeach
            @endif
          </div>
        </div>
        <div class="text-center">
          <h3>{{ $user->name }} </h3> 
          <div class="form-group mb-0 ">
            <label for=""><i class="fa-solid fa-envelope"></i> Email: </label>
            <p>{{ $user->email }}</p>
          </div>
        </div>
        <!-- details box @E --> 
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