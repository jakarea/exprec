@extends('layouts.master')
@section('title') Course @endsection
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
            @if( getCourseCategory())
                @foreach(getCourseCategory() as $category)
                    <li><a href="{{ route('course.category', \Str::slug($category)) }}">{{$category}}</a></li>
                @endforeach
            @endif
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
                    <!-- course->enrollments->user_id is equal to logged in user id then show bought this course else buy now -->
                    @if($course->enrollments->where('user_id', Auth::user()->id)->where('course_id', $course->id)->count() > 0)
                        <!-- <a href="{{url('elearning/courses/'.$course->slug )}}" class="btn btn-primary">Already Purchased</a> -->
                        <h5><i class="fas fa-play"></i> Overview </h5>
                
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: {{ \App\Models\Course::getProgress(Auth::user()->id, $course->id) }}%">
                            </div>
                        </div>
                    @else
                        <a href="javascript:void(0)" class="btn btn-exprec enroll__btn" data-course="{{ $course->id }}"  data-user="{{ Auth::user()->id }}">Enroll Now</a>
                    @endif
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