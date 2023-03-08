@extends('layouts.master')

@section('title') Email Camping Nine @endsection

@section('style') 
<link href="{{ asset('assets/css/email-camping.css') }}" rel="stylesheet" type="text/css" />  
@endsection

@section('content') 
<main class="email-camping-page-wrap"> 
  <!-- book marks @S -->
  <div class="bookmark-box-wrap">
    <ul>
        <li><span>Campaigns</span></li>
        <li><i class="fas fa-angle-right"></i></li>
        <li><a href="#">Edit Name</a></li>
    </ul>
  </div>
  <!-- book marks @E -->

   <!-- list segment filter @S -->
   <div class="list-segment-search-filter-wrap">
    <div class="list-segment-search">
        <input type="text" placeholder="Search lists & segments" class="form-control">
        <img src="{{asset('assets/images/search-icon.svg')}}" alt="Search Icon" class="img-fluid">
    </div>
    <div class="list-segment-filter">
        <select name="" id="" class="form-control">
            <option value="">Select Tag</option>
            <option value="">Tag One</option>
            <option value="">Tag Two</option>
            <option value="">Tag Three</option>
            <option value="">Tag Four</option>
        </select>
        <i class="fas fa-angle-down"></i>
    </div>
    <div class="list-segment-filter">
        <select name="" id="" class="form-control">
            <option value="">All Types</option>
            <option value="">Types One</option>
            <option value="">Types Two</option>
            <option value="">Types Three</option>
            <option value="">Types Four</option>
        </select>
        <i class="fas fa-angle-down"></i>
    </div>
   </div>
   <!-- list segment filter @E -->

   <!-- list and segment boxs wrap @S -->
   <div class="row">
    <div class="col-12">
        <div class="segment-all-check">
            <label for="selectAll">
                <input type="checkbox" id="selectAll">
                <p>Select All</p>
            </label>
        </div>
    </div>
    <!-- item @S -->
    <div class="col-12 col-md-6 col-lg-4">
        <div class="segment-list-box">
            <div class="d-flex">
                <h4><input type="checkbox"> SMS Subscribers</h4>
                <i class="fas fa-star"></i>
            </div>
            <h6>This is optional definition if. Grow your email and SMS lists without hurting conversion</h6>
            <div class="segment-author-info">
                <p><img src="{{asset('assets/images/users-icon.svg')}}" alt="users" class="img-fluid"> 22</p>
                <p><img src="{{asset('assets/images/calendar-icon-orange.svg')}}" alt="users" class="img-fluid"> Jan 16, 2023, 12:25 pm</p>
            </div>
            <div class="segment-box-ftr">
                <a href="#">List <img src="{{asset('assets/images/list-icon.svg')}}" alt="users" class="img-fluid"></a>
                <a href="#"><img src="{{asset('assets/images/union-icon.svg')}}" alt="users" class="img-fluid"></a>
            </div>
        </div>
    </div>
    <!-- item @E -->
    <!-- item @S -->
    <div class="col-12 col-md-6 col-lg-4">
        <div class="segment-list-box">
            <div class="d-flex">
                <h4><input type="checkbox"> SMS Subscribers</h4>
                <i class="fas fa-star"></i>
            </div>
            <h6>This is optional definition if. Grow your email and SMS lists without hurting conversion</h6>
            <div class="segment-author-info">
                <p><img src="{{asset('assets/images/users-icon.svg')}}" alt="users" class="img-fluid"> 22</p>
                <p><img src="{{asset('assets/images/calendar-icon-orange.svg')}}" alt="users" class="img-fluid"> Jan 16, 2023, 12:25 pm</p>
            </div>
            <div class="segment-box-ftr">
                <a href="#">List <img src="{{asset('assets/images/list-icon.svg')}}" alt="users" class="img-fluid"></a>
                <a href="#"><img src="{{asset('assets/images/union-icon.svg')}}" alt="users" class="img-fluid"></a>
            </div>
        </div>
    </div>
    <!-- item @E -->
    <!-- item @S -->
    <div class="col-12 col-md-6 col-lg-4">
        <div class="segment-list-box">
            <div class="d-flex">
                <h4><input type="checkbox"> SMS Subscribers</h4>
                <i class="fas fa-star"></i>
            </div>
            <h6>This is optional definition if. Grow your email and SMS lists without hurting conversion</h6>
            <div class="segment-author-info">
                <p><img src="{{asset('assets/images/users-icon.svg')}}" alt="users" class="img-fluid"> 22</p>
                <p><img src="{{asset('assets/images/calendar-icon-orange.svg')}}" alt="users" class="img-fluid"> Jan 16, 2023, 12:25 pm</p>
            </div>
            <div class="segment-box-ftr">
                <a href="#">List <img src="{{asset('assets/images/list-icon.svg')}}" alt="users" class="img-fluid"></a>
                <a href="#"><img src="{{asset('assets/images/union-icon.svg')}}" alt="users" class="img-fluid"></a>
            </div>
        </div>
    </div>
    <!-- item @E -->
    <!-- item @S -->
    <div class="col-12 col-md-6 col-lg-4">
        <div class="segment-list-box">
            <div class="d-flex">
                <h4><input type="checkbox"> SMS Subscribers</h4>
                <i class="fas fa-star"></i>
            </div>
            <h6>This is optional definition if. Grow your email and SMS lists without hurting conversion</h6>
            <div class="segment-author-info">
                <p><img src="{{asset('assets/images/users-icon.svg')}}" alt="users" class="img-fluid"> 22</p>
                <p><img src="{{asset('assets/images/calendar-icon-orange.svg')}}" alt="users" class="img-fluid"> Jan 16, 2023, 12:25 pm</p>
            </div>
            <div class="segment-box-ftr">
                <a href="#">List <img src="{{asset('assets/images/list-icon.svg')}}" alt="users" class="img-fluid"></a>
                <a href="#"><img src="{{asset('assets/images/union-icon.svg')}}" alt="users" class="img-fluid"></a>
            </div>
        </div>
    </div>
    <!-- item @E -->
    <!-- item @S -->
    <div class="col-12 col-md-6 col-lg-4">
        <div class="segment-list-box">
            <div class="d-flex">
                <h4><input type="checkbox"> SMS Subscribers</h4>
                <i class="fas fa-star text-secondary"></i>
            </div>
            <h6>This is optional definition if. Grow your email and SMS lists without hurting conversion</h6>
            <div class="segment-author-info">
                <p><img src="{{asset('assets/images/users-icon.svg')}}" alt="users" class="img-fluid"> 22</p>
                <p><img src="{{asset('assets/images/calendar-icon-orange.svg')}}" alt="users" class="img-fluid"> Jan 16, 2023, 12:25 pm</p>
            </div>
            <div class="segment-box-ftr">
                <a href="#">List <img src="{{asset('assets/images/list-icon.svg')}}" alt="users" class="img-fluid"></a>
                <a href="#"><img src="{{asset('assets/images/union-icon.svg')}}" alt="users" class="img-fluid"></a>
            </div>
        </div>
    </div>
    <!-- item @E -->
    <!-- item @S -->
    <div class="col-12 col-md-6 col-lg-4">
        <div class="segment-list-box">
            <div class="d-flex">
                <h4><input type="checkbox"> SMS Subscribers</h4>
                <i class="fas fa-star"></i>
            </div>
            <h6>This is optional definition if. Grow your email and SMS lists without hurting conversion</h6>
            <div class="segment-author-info">
                <p><img src="{{asset('assets/images/users-icon.svg')}}" alt="users" class="img-fluid"> 22</p>
                <p><img src="{{asset('assets/images/calendar-icon-orange.svg')}}" alt="users" class="img-fluid"> Jan 16, 2023, 12:25 pm</p>
            </div>
            <div class="segment-box-ftr">
                <a href="#">List <img src="{{asset('assets/images/list-icon.svg')}}" alt="users" class="img-fluid"></a>
                <a href="#"><img src="{{asset('assets/images/union-icon.svg')}}" alt="users" class="img-fluid"></a>
            </div>
        </div>
    </div>
    <!-- item @E -->
    <!-- item @S -->
    <div class="col-12 col-md-6 col-lg-4">
        <div class="segment-list-box">
            <div class="d-flex">
                <h4><input type="checkbox"> SMS Subscribers</h4>
                <i class="fas fa-star"></i>
            </div>
            <h6>This is optional definition if. Grow your email and SMS lists without hurting conversion</h6>
            <div class="segment-author-info">
                <p><img src="{{asset('assets/images/users-icon.svg')}}" alt="users" class="img-fluid"> 22</p>
                <p><img src="{{asset('assets/images/calendar-icon-orange.svg')}}" alt="users" class="img-fluid"> Jan 16, 2023, 12:25 pm</p>
            </div>
            <div class="segment-box-ftr">
                <a href="#">List <img src="{{asset('assets/images/list-icon.svg')}}" alt="users" class="img-fluid"></a>
                <a href="#"><img src="{{asset('assets/images/union-icon.svg')}}" alt="users" class="img-fluid"></a>
            </div>
        </div>
    </div>
    <!-- item @E -->
   </div>
   <!-- list and segment boxs wrap @E -->

</main>
@endsection