@extends('layouts.master')
@section('title') {{$course->title}} @endsection
@section('style') 
<link href="{{ asset('assets/css/course.css') }}" rel="stylesheet" type="text/css" />   
<style>
.vimeo-player {
    position:relative;
    padding-bottom:56.25%;
    height:0;
    overflow:hidden;
    width:100%;
}
.vimeo-player iframe {
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
}
span.finsihLesson {
    float: right;
    font-size: 12px;
    color: #111;
    margin-top: 12px;
    cursor: pointer;
}
</style>
@endsection
@section('content') 

<!-- course details page @S -->
<main class="course-page-wrap">
    <!-- suggested banner @S -->
    @if ( $course->coverimage != null )
    <div class="learning-banners-wrap" style="background-image:url({{ asset('assets/images/course/'. $course->coverimage) }})">
        <div class="media">
            <div class="media-body">
                <h1 class="addspy-main-title">{{$course->title}}</h1>
                <p>{{$course->short_description}}</p>
                <a href="#">Continue</a>
            </div> 
        </div>
    </div>
    @else
    <div class="learning-banners-wrap" style="background-image:url({{ asset('assets/images/course/suggested-banner.png') }})">
        <div class="media">
            <div class="media-body">
                <h1 class="addspy-main-title">{{$course->title}}</h1>
                <p>{{$course->short_description}}</p>
            </div> 
        </div>
    </div>
    @endif
    <!-- suggested banner @E -->

    <div class="row">
        <div class="col-12 col-sm-12 col-md-5 col-lg-4">
            <div class="mylearning-txt-box mt-4"> 
                <h5>Course's Outline</h5>
            </div>
            <div class="course-outline-box">
                <div class="accordion" id="accordionExample">
                    @php 
                    $attachements = [];
                    $active = 8;
                    $i = 0;
                    $lesson = null;
                    @endphp
                    @foreach($course->modules as $module)
                    @php $i++; @endphp
                    <div class="accordion-item">
                        <span class="numbering {{ $module->id == $active ? 'active' : ''}}"> {{$i}} </span>
                        <div class="accordion-header" id="heading_{{$module->id}}">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_{{$module->id}}" aria-expanded="true" aria-controls="collapseOne">
                                <div class="d-flex">
                                    <p>{{ $module->title }} </p>
                                    <i class="fas fa-caret-down"></i>
                                </div>
                            </button>
                        </div>
                        <div id="collapse_{{$module->id}}" class="accordion-collapse collapse {{ $module->id == $active? 'show' : ''}}" aria-labelledby="heading_{{$module->id}}" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul>
                                    @foreach($module->lessons as $lesson)
                                    <li>
                                        <a href="{{ $lesson->video_url }}" class="video_list_play d-inline-block" data-video-id="{{ $lesson->id }}" data-lesson-id="{{$lesson->id}}" data-course-id="{{$course->id}}" data-modules-id="{{$module->id}}">
                                            <img src="{{asset('assets/images/course/small-book.svg')}}" alt="" class="img-fluid"> {{ $lesson->title }}
                                        </a>
                                    @if($course->enrollments->where('user_id', Auth::user()->id)->where('course_id', $course->id)->count() > 0)
                                        @if($course->courseActivities->where('lesson_id', $lesson->id)->where('user_id', Auth::user()->id)->count() > 0)
                                            <span style="float:right;"><i class="fas fa-check"></i></span>
                                        @else
                                            <span title="Finish" class="finsihLesson" data-lesson-id="{{$lesson->id}}" data-course-id="{{$course->id}}" data-modules-id="{{$module->id}}"><i class="fas fa-paper-plane"></i></span>
                                        @endif
                                    @endif
                                    </li>
                                        @php 
                                            if($lesson->attachment){
                                                $attachements[$lesson->attachment] = $lesson->attachment_name;
                                            }
                                        @endphp
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-7 col-lg-8">
            <div class="mylearning-video-content-box custom-margin-top">
                <div class="video-iframe-vox">
                @if($course->enrollments->where('user_id', Auth::user()->id)->where('course_id', $course->id)->count() > 0)
                <div class="video-iframe-vox">
                    <div class="vimeo-player w-100" data-vimeo-url="https://vimeo.com/305108069" data-vimeo-width="1000" data-vimeo-height="360"></div>
                </div> 
                @else
                <a href="#">
                        <img src="{{asset('assets/images/course/'. $course->thumbnail)}}" alt="{{ $course->thumbnail }}" class="img-fluid">
                    </a>
                @endif
                </div>
                <div class="content-txt-box">
                    <div class="d-flex">
                        <h3>{{$course->title}}</h3>
                        <!-- I want a button and when click go to second lesson if lesson dont have then button disabled -->
                        <a href="#" class="btn btn-primary next-lesson">Next Lesson</a>
                    </div>
                    {!! $course->long_description !!} 
                </div>
                <div class="profile-box">
                    <div class="media">
                    <img src="{{asset('assets/images/course/avatar.png')}}" alt="Place" class="img-fluid">
                        <div class="media-body">
                            <h5>Esther Howard</h5>
                            <p>Professional English Teacher</p>
                        </div>
                    </div>
                </div>
                <div class="course-content-box">
                    <div class="d-flex">
                        <h5>Course’s content</h5>
                        @if ( $lesson )
                        <p>Last Updated : {{ $lesson->updated_at->format('d M, Y') }}</p>
                        @else
                        <p>Last Updated : {{ $course->updated_at->format('d M, Y') }}</p>
                        @endif
                    </div>
                    <div class="row border-right-custom">
                        
                        @if ( $lesson )
                            @foreach ( App\Models\Lesson::getAttachments($lesson->course_id) as $key => $attachment )
                            <div class="col-lg-12">
                                <div class="attached-file-box me-lg-2">
                                    <h4><img src="{{asset('assets/images/course/pdf-icon.svg')}}" alt="Place" class="img-fluid me-1" width="40"> {{ $attachment->attachment_name ?$attachment->attachment_name : $attachment->attachment }}</h4>
                                    <a href="{{asset('assets/images/lesson/'. $attachment->attachment)}}" download>
                                        <img src="{{asset('assets/images/course/download-icon.svg')}}" alt="Place" class="img-fluid">
                                    </a>
                                </div> 
                            </div>
                            @endforeach
                        @else
                        <div class="col-lg-12">
                            <div class="attached-file-box me-lg-2">
                                <p>No Resource Found</p>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
   <!-- my learning page @E -->
</main>
<!-- course details page @E -->
@endsection
@section('script')
<script src="https://player.vimeo.com/api/player.js"></script>
<script>
    var options = {
        id: '{{ 305108069 }}',
        access_token: '{{ "64ac29221733a4e2943345bf6c079948" }}',
        autoplay: true,
        loop: true,
        width:  500,
    };
    var player = new Vimeo.Player(document.querySelector('.vimeo-player'), options);
    // play video on load
    player.on('ended', function() {
        player.setCurrentTime(0); // Set current time to 0 seconds
        player.play();
    });

    $(document).ready(function(){
        $('a.video_list_play').click(function(e){
            e.preventDefault();
            var videoId = $(this).data('video-id');
            var videoUrl = $(this).attr('href');
            videoUrl = videoUrl.replace('/videos/', '');
            player.loadVideo(videoUrl);
            // send ajax request to courselog table
            var lessonId = $(this).data('lesson-id');
            var moduleId = $(this).data('modules-id');
            var courseId = $(this).data('course-id');
            var userId = {{ Auth::user()->id }};
            $.ajax({
                url: "{{ route('ajax_course_log') }}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    lesson_id: lessonId,
                    module_id: moduleId,
                    course_id: courseId,
                    user_id: userId,
                },
                success: function(response){
                    if(response.success){
                        console.log('success');
                    }
                }
            });
        });

        // finish lesson
        $('span.finsihLesson').click(function(e){
            e.preventDefault();
            var lessonId = $(this).data('lesson-id');
            var moduleId = $(this).data('modules-id');
            var courseId = $(this).data('course-id');
            var userId = {{ Auth::user()->id }};
            
            var spinner = $('<i>').addClass('fas fa-spinner fa-spin');
            var checkbox = $('<i>').addClass('fas fa-check');
            
            $(this).html(spinner);
            
            $.ajax({
                url: "{{ route('ajax_finish_lesson') }}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    lesson_id: lessonId,
                    module_id: moduleId,
                    course_id: courseId,
                    user_id: userId,
                },
                success: function(response){
                    if(response.success){
                        $(this).html(checkbox);
                        alert('Lesson finished successfully!');
                    }
                }.bind(this), // bind the current context to the success callback function
                error: function(xhr){
                    console.log(xhr.responseText);
                }
            });
        });

        // When click next-lesson button go to next lesson to run a.video_list_play click event
        $('a.next-lesson').click(function(e){
            e.preventDefault();
            // get current lesson
            var currentLesson = $('a.video_list_play').eq(1);
            var nextLesson = $('a.video_list_play').eq(currentLesson.index() + 1);
            nextLesson.click();
        });

    });
</script>
@endsection