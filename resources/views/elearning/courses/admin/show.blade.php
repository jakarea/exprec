@extends('layouts.master')
@section('title') {{$course->title}} @endsection
@section('style') 
<link href="{{ asset('assets/css/course.css') }}" rel="stylesheet" type="text/css" />  
@endsection
@section('content') 
@php 
    $attachements = [];
    $active = 8;
    $i = 0;
    $key = getenv('ENC_KEY');
    $algo = getenv('ENC_ALGO');
    $course_id =$course->id; 
@endphp
<!-- course details page @S -->
<main class="course-page-wrap">
    <!-- suggested banner @S -->
    <div class="learning-banners-wrap">
        <div class="media">
        <div class="media-body">
            <h1 class="addspy-main-title">{{$course->title}}</h1>
            <p>{{$course->short_description}}</p>
            <!-- <a href="#">Continue</a> -->
        </div> 
        </div>
    </div>
    <!-- suggested banner @E -->

    <div class="row">
        <div class="col-12 col-sm-12 col-md-5 col-lg-4">
            <div class="mylearning-txt-box mt-4"> 
                <h5>Course's Outline</h5>
            </div>
            <div class="course-outline-box">
                <div class="accordion" id="accordionExample">
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
                                    <li><a href="#"><img src="{{asset('assets/images/course/small-book.svg')}}" alt="" class="img-fluid"> {{ $lesson->title }}</a></li>
                                        @php 
                                            if($lesson->attachment){
                                                $attachements[$lesson->attachment] = $lesson->attachment_name;
                                            }
                                        @endphp
                                    @endforeach
                                </ul>
                               <div class="text-center">
                                    <a href="{{ url('admin/elearning/lessons/create?course='. $course_id.'&module='.$module->id) }}" class="add_lesson_bttn">Add Lesson</a> 
                               </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <a href="{{ url('admin/elearning/modules/create?course='. $course_id) }}" class="add_module_bttn">Add Module </a> 
        </div>
        <div class="col-12 col-sm-12 col-md-7 col-lg-8">
            <div class="mylearning-video-content-box custom-margin-top">
                <div class="video-iframe-vox">
                    <a href="#">
                        <img src="{{asset('assets/images/course/'. $course->thumbnail)}}" alt="{{ $course->thumbnail }}" class="img-fluid">
                    </a>
                </div>
                <div class="content-txt-box">
                    <div class="d-flex">
                        <h3>{{$course->title}}</h3>
                        <!-- <a href="#" class="min_width">Continue</a> -->
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
                        <p>Last Updated : {{ $course->updated_at->format('d M Y') }}</p>
                    </div>
                    <div class="row border-right-custom">
                        @foreach($attachements as $key => $attachement)
                        <div class="col-lg-6">
                            <div class="attached-file-box me-lg-2">
                                <h4><img src="{{asset('assets/images/course/pdf-icon.svg')}}" alt="Place" class="img-fluid me-1" width="40"> {{ $attachement ? $attachement : $key }}</h4>
                                <a href="{{asset('assets/images/course/download-icon.svg')}}" download><img src="{{asset('assets/images/course/download-icon.svg')}}" alt="Place" class="img-fluid"></a>
                            </div> 
                        </div>
                        @endforeach
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
   <!-- my learning page @E -->
</main>
<!-- course details page @E -->
@endsection