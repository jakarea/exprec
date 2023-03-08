@extends('layouts.master')

@section('title') Email Camping Templates @endsection

@section('style') 
<link href="{{ asset('assets/css/email-camping.css') }}" rel="stylesheet" type="text/css" />  
@endsection

@section('content') 
<main class="email-camping-page-wrap"> 
  <div class="email-camping-head-bttn mt-0" style="justify-content: flex-start ">
        <ul>
            <li><a href="#" class="active">My Templates</a></li>
            <li><a href="#">Universal Content</a></li> 
        </ul> 
        <div class="e-camp-sort-bttn ms-md-5">
            <a href="#"><img src="{{ asset('assets/images/sort-icon.svg') }}" alt="" class="img-fluid"> Sort By <i class="fas fa-angle-down"></i></a>
        </div>
    </div> 

   <!-- list segment filter @S -->
   <div class="list-segment-search-filter-wrap">
    <div class="list-segment-search">
        <input type="text" placeholder="Search templates" class="form-control">
        <img src="{{asset('assets/images/search-icon.svg')}}" alt="Search Icon" class="img-fluid">
    </div>
    <div class="search-template-bttn">
         <a href="#" class="showcase-bttn"><img src="{{asset('assets/images/showcase-icon.svg')}}" alt="Search Icon" class="img-fluid">View Showcase</a>
    </div> 
    <div class="search-template-bttn"> 
        <a href="{{ url('email-marketing/content/templates/build')}}" class="template-bttn">Create Template</a>
    </div> 
   </div>
   <!-- list segment filter @E -->

   <!-- list and segment boxs wrap @S -->
   <div class="row"> 
    <!-- item @S -->
    <div class="col-12 col-md-6 col-lg-4">
         <div class="e-camp-template-box">
            <div class="media">
                <div class="media-body">
                    <h6>Name</h6>
                    <h5>Newsletter 37 (Snack)</h5>
                </div>
                <a href="#"><img src="{{asset('assets/images/union-icon.svg')}}" alt="union" class="img-fluid"></a>
            </div>
            <p><img src="{{asset('assets/images/calendar-icon-orange.svg')}}" alt="union" class="img-fluid"> Jan 16, 2023 at 12:25 pm</p>
            <p><img src="{{asset('assets/images/repeat-icon.svg')}}" alt="union" class="img-fluid"> Jan 16, 2023 at 12:25 pm</p>
         </div>
    </div>
    <!-- item @E --> 
    <!-- item @S -->
    <div class="col-12 col-md-6 col-lg-4">
         <div class="e-camp-template-box">
            <div class="media">
                <div class="media-body">
                    <h6>Name</h6>
                    <h5>Newsletter 37 (Snack)</h5>
                </div>
                <a href="#"><img src="{{asset('assets/images/union-icon.svg')}}" alt="union" class="img-fluid"></a>
            </div>
            <p><img src="{{asset('assets/images/calendar-icon-orange.svg')}}" alt="union" class="img-fluid"> Jan 16, 2023 at 12:25 pm</p>
            <p><img src="{{asset('assets/images/repeat-icon.svg')}}" alt="union" class="img-fluid"> Jan 16, 2023 at 12:25 pm</p>
         </div>
    </div>
    <!-- item @E -->  
    <!-- item @S -->
    <div class="col-12 col-md-6 col-lg-4">
         <div class="e-camp-template-box">
            <div class="media">
                <div class="media-body">
                    <h6>Name</h6>
                    <h5>Newsletter 37 (Snack)</h5>
                </div>
                <a href="#"><img src="{{asset('assets/images/union-icon.svg')}}" alt="union" class="img-fluid"></a>
            </div>
            <p><img src="{{asset('assets/images/calendar-icon-orange.svg')}}" alt="union" class="img-fluid"> Jan 16, 2023 at 12:25 pm</p>
            <p><img src="{{asset('assets/images/repeat-icon.svg')}}" alt="union" class="img-fluid"> Jan 16, 2023 at 12:25 pm</p>
         </div>
    </div>
    <!-- item @E -->  
    <!-- item @S -->
    <div class="col-12 col-md-6 col-lg-4">
         <div class="e-camp-template-box">
            <div class="media">
                <div class="media-body">
                    <h6>Name</h6>
                    <h5>Newsletter 37 (Snack)</h5>
                </div>
                <a href="#"><img src="{{asset('assets/images/union-icon.svg')}}" alt="union" class="img-fluid"></a>
            </div>
            <p><img src="{{asset('assets/images/calendar-icon-orange.svg')}}" alt="union" class="img-fluid"> Jan 16, 2023 at 12:25 pm</p>
            <p><img src="{{asset('assets/images/repeat-icon.svg')}}" alt="union" class="img-fluid"> Jan 16, 2023 at 12:25 pm</p>
         </div>
    </div>
    <!-- item @E -->  
    <!-- item @S -->
    <div class="col-12 col-md-6 col-lg-4">
         <div class="e-camp-template-box">
            <div class="media">
                <div class="media-body">
                    <h6>Name</h6>
                    <h5>Newsletter 37 (Snack)</h5>
                </div>
                <a href="#"><img src="{{asset('assets/images/union-icon.svg')}}" alt="union" class="img-fluid"></a>
            </div>
            <p><img src="{{asset('assets/images/calendar-icon-orange.svg')}}" alt="union" class="img-fluid"> Jan 16, 2023 at 12:25 pm</p>
            <p><img src="{{asset('assets/images/repeat-icon.svg')}}" alt="union" class="img-fluid"> Jan 16, 2023 at 12:25 pm</p>
         </div>
    </div>
    <!-- item @E -->  
    <!-- item @S -->
    <div class="col-12 col-md-6 col-lg-4">
         <div class="e-camp-template-box">
            <div class="media">
                <div class="media-body">
                    <h6>Name</h6>
                    <h5>Newsletter 37 (Snack)</h5>
                </div>
                <a href="#"><img src="{{asset('assets/images/union-icon.svg')}}" alt="union" class="img-fluid"></a>
            </div>
            <p><img src="{{asset('assets/images/calendar-icon-orange.svg')}}" alt="union" class="img-fluid"> Jan 16, 2023 at 12:25 pm</p>
            <p><img src="{{asset('assets/images/repeat-icon.svg')}}" alt="union" class="img-fluid"> Jan 16, 2023 at 12:25 pm</p>
         </div>
    </div>
    <!-- item @E -->  
    <!-- item @S -->
    <div class="col-12 col-md-6 col-lg-4">
         <div class="e-camp-template-box">
            <div class="media">
                <div class="media-body">
                    <h6>Name</h6>
                    <h5>Newsletter 37 (Snack)</h5>
                </div>
                <a href="#"><img src="{{asset('assets/images/union-icon.svg')}}" alt="union" class="img-fluid"></a>
            </div>
            <p><img src="{{asset('assets/images/calendar-icon-orange.svg')}}" alt="union" class="img-fluid"> Jan 16, 2023 at 12:25 pm</p>
            <p><img src="{{asset('assets/images/repeat-icon.svg')}}" alt="union" class="img-fluid"> Jan 16, 2023 at 12:25 pm</p>
         </div>
    </div>
    <!-- item @E -->  
    <!-- item @S -->
    <div class="col-12 col-md-6 col-lg-4">
         <div class="e-camp-template-box">
            <div class="media">
                <div class="media-body">
                    <h6>Name</h6>
                    <h5>Newsletter 37 (Snack)</h5>
                </div>
                <a href="#"><img src="{{asset('assets/images/union-icon.svg')}}" alt="union" class="img-fluid"></a>
            </div>
            <p><img src="{{asset('assets/images/calendar-icon-orange.svg')}}" alt="union" class="img-fluid"> Jan 16, 2023 at 12:25 pm</p>
            <p><img src="{{asset('assets/images/repeat-icon.svg')}}" alt="union" class="img-fluid"> Jan 16, 2023 at 12:25 pm</p>
         </div>
    </div>
    <!-- item @E --> 
   </div>
   <!-- list and segment boxs wrap @E -->

</main>
@endsection