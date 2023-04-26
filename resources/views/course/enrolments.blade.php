@extends('layouts.master')
@section('title') My Courses @endsection
@section('style') 
<link href="{{ asset('assets/css/course.css') }}" rel="stylesheet" type="text/css" />  
@endsection
@section('content') 
@role("Admin")
<main class="d-flex justify-content-center align-items-center">
    <h4>You Don't have access to this page!</h4>
</main>
@else
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
        @foreach($enrolments as $enrolment)

        @php    
        $desc = $enrolment->course->short_description;
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
                        <img src="{{asset('assets/images/course/'. $enrolment->course->thumbnail)}}" alt="{{ $enrolment->course->slug}}" class="img-fluid">
                    </div>
                    <div class="course-txt-box">
                        <h3> <a href="{{url('elearning/courses/'.$enrolment->course->slug )}}">{{ $enrolment->course->title }} </a></h3>
                        <ul>
                            <li><a href="#">{{ $enrolment->course->number_of_lesson}} LESSONS</a></li>
                            <li><a href="#">{{ $enrolment->course->number_of_module}} MODULES</a></li>
                        </ul>
                        <p>{{ $short_description}}</p>
                    </div> 
                </div>
                <div class="course-ftr">

                    <!-- course->enrollments->user_id is equal to logged in user id then show bought this course else buy now -->
                   
                        <!-- <a href="{{url('elearning/courses/'.$enrolment->course->slug )}}" class="btn btn-primary">Already Purchased</a> -->
                        <h5><i class="fas fa-play"></i> Overview </h5>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: {{$enrolment->progress}};">
                            </div>
                        </div>
                </div>
            </div>
        </div>
        @endforeach
        <!-- item @E --> 
    </div>
    <!-- all courses @E -->
   
</main>
@endrole
@endsection
@section('script')
<script>
    jQuery(document).ready(function(){
        jQuery('.enroll__btn').click(function(){
           // Ask for confirmation
              if(confirm('Are you sure you want to enroll this course?')){
                // Send ajax request
                jQuery.ajax({
                     url: "{{ route('enrollment.store') }}",
                     method: "POST",
                     data: {
                          _token: "{{ csrf_token() }}",
                          course_id: jQuery(this).data('course'),
                          user_id: jQuery(this).data('user')
                     },
                     success: function(response){
                          if(response){
                            // Reload the page
                            location.reload();
                          }
                     }
                });
              }
        });
    });
</script>
@endsection