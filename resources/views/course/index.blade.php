@extends('layouts.master')
@section('title') Course @endsection
@section('style') 
<link href="{{ asset('assets/css/course.css') }}" rel="stylesheet" type="text/css" />  
@endsection
@section('content') 

<main class="course-page-wrap">

    <!-- course title @S -->
    <div class="course-title">
        <h1>Our Courses</h1>
    </div>
    <!-- course title @E -->

    <!-- course category @S -->
    <div class="course-category-box">
        <ul>
            <li><span>Show by Category</span></li>
            <li><a href="#">Dropshipping</a></li>
            <li><a href="#">Ecommerce</a></li>
        </ul>
    </div>
    <!-- course category @E -->

    <!-- all courses @S -->
    <div class="row me-lg-3"> 
        <!-- item @S -->
        @foreach($courses as $course)

        @php    
        $desc = $course->short_description;
            $max_length = 105;
            if (strlen($desc) > $max_length) {
                $short_description = substr($desc, 0, $max_length);
                $last_space = strrpos($short_description, ' ');
                $short_description = substr($short_description, 0, $last_space) . " ...";
            } else {
                $short_description = $desc;
            }

        @endphp
        <div class="col-12 col-sm-12 col-md-6 col-lg-4">
            <div class="course-box-wrap">
                <div class="course-content-box">
                    <div class="course-thumbnail">
                        <img src="{{asset('assets/images/course/'. $course->thumbnail)}}" alt="{{ $course->slug}}" class="img-fluid">
                    </div>
                    <div class="course-txt-box">
                        <h3> <a href="{{url('elearning/courses/'.$course->slug )}}">{{ $course->title }} </a></h3>
                        <ul>
                            <li><a href="#">{{ $course->number_of_lesson}} LESSONS</a></li>
                            <li><a href="#">{{ $course->number_of_module}} MODULES</a></li>
                        </ul>
                        <p>{{ $short_description}}</p>
                    </div> 
                </div>
                <div class="course-ftr">
                    <h5><i class="fas fa-play"></i> Overview </h5>
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar w-75"></div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <!-- item @E --> 
       
        <!-- item @S -->
        <div class="col-12 col-sm-12 col-md-6 col-lg-4">
            <div class="course-box-wrap">
                <div class="course-content-box">
                    <div class="course-thumbnail">
                        <img src="{{asset('assets/images/course/course-thumbnai-03.png')}}" alt="Course Image Thumbnail" class="img-fluid">
                    </div>
                    <div class="course-txt-box">
                        <h3>sss</h3>
                        <ul>
                            <li><a href="#">56 LESSEN</a></li>
                            <li><a href="#">7 MODULES</a></li>
                        </ul>
                        <p>Toppers! Start in deze module met al le nieuwe video's over Product &amp; Nic he Research in 2021.</p>
                    </div> 
                </div>
                <div class="course-ftr course-more-info">
                     <a href="#"><img src="{{asset('assets/images/course/info-icon.svg')}}" alt="info-icon" class="img-fluid"> More Info</a>
                </div>
            </div>
        </div>
        <!-- item @E --> 
    </div>
    <!-- all courses @E -->
   
</main>

@endsection