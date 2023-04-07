@extends('layouts.master')
@section('title') {{$course->title}} @endsection
@section('style') 
<link href="{{ asset('assets/css/course.css') }}" rel="stylesheet" type="text/css" />  
@endsection
@section('content') 

<!-- course details page @S -->
<main class="course-page-wrap">
    <!-- suggested banner @S -->
    <div class="learning-banners-wrap">
        <div class="media">
        <div class="media-body">
            <h1 class="addspy-main-title">{{$course->title}}</h1>
            <p>{{$course->short_description}}</p>
            <a href="#">Continue</a>
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
            <div class="accordion-item">
                <span class="numbering active">1</span>
                <div class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <div class="d-flex">
                            <p>Lorem Amet minim </p>
                            <i class="fas fa-caret-down"></i>
                        </div>
                    </button>
                </div>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <ul>
                        <li><a href="#"><img src="{{asset('assets/images/course/small-book.svg')}}" alt="" class="img-fluid"> veniam consequat sunt nostrud amet.</a></li>
                        <li><a href="#"><img src="{{asset('assets/images/course/small-book.svg')}}" alt="" class="img-fluid"> veniam consequat sunt nostrud amet.</a></li>
                        <li><a href="#"><img src="{{asset('assets/images/course/small-book.svg')}}" alt="" class="img-fluid"> veniam consequat sunt nostrud amet.</a></li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="accordion-item">
            <span class="numbering active">2</span>
                <div class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <div class="d-flex">
                            <p>Lorem Amet minim </p>
                            <i class="fas fa-caret-down"></i>
                        </div>
                </button>
                </div>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <ul>
                        <li><a href="#"><img src="{{asset('assets/images/course/small-book.svg')}}" alt="" class="img-fluid"> veniam consequat sunt nostrud amet.</a></li>
                        <li><a href="#"><img src="{{asset('assets/images/course/small-book.svg')}}" alt="" class="img-fluid"> veniam consequat sunt nostrud amet.</a></li>
                        <li><a href="#"><img src="{{asset('assets/images/course/small-book.svg')}}" alt="" class="img-fluid"> veniam consequat sunt nostrud amet.</a></li>
                    </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <span class="numbering">3</span>
                <div class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <div class="d-flex">
                            <p>Lorem Amet minim </p>
                            <i class="fas fa-caret-down"></i>
                        </div>
                </button>
                </div>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <ul>
                        <li><a href="#"><img src="{{asset('assets/images/course/small-book.svg')}}" alt="" class="img-fluid"> veniam consequat sunt nostrud amet.</a></li>
                        <li><a href="#"><img src="{{asset('assets/images/course/small-book.svg')}}" alt="" class="img-fluid"> veniam consequat sunt nostrud amet.</a></li>
                        <li><a href="#"><img src="{{asset('assets/images/course/small-book.svg')}}" alt="" class="img-fluid"> veniam consequat sunt nostrud amet.</a></li>
                    </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <span class="numbering">4</span>
                <div class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        <div class="d-flex">
                            <p>Lorem Amet minim </p>
                            <i class="fas fa-caret-down"></i>
                        </div>
                </button>
                </div>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <ul>
                        <li><a href="#"><img src="{{asset('assets/images/course/small-book.svg')}}" alt="" class="img-fluid"> veniam consequat sunt nostrud amet.</a></li>
                        <li><a href="#"><img src="{{asset('assets/images/course/small-book.svg')}}" alt="" class="img-fluid"> veniam consequat sunt nostrud amet.</a></li>
                        <li><a href="#"><img src="{{asset('assets/images/course/small-book.svg')}}" alt="" class="img-fluid"> veniam consequat sunt nostrud amet.</a></li>
                    </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <span class="numbering">5</span>
                <div class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        <div class="d-flex">
                            <p>Lorem Amet minim </p>
                            <i class="fas fa-caret-down"></i>
                        </div>
                </button>
                </div>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <ul>
                        <li><a href="#"><img src="{{asset('assets/images/course/small-book.svg')}}" alt="" class="img-fluid"> veniam consequat sunt nostrud amet.</a></li>
                        <li><a href="#"><img src="{{asset('assets/images/course/small-book.svg')}}" alt="" class="img-fluid"> veniam consequat sunt nostrud amet.</a></li>
                        <li><a href="#"><img src="{{asset('assets/images/course/small-book.svg')}}" alt="" class="img-fluid"> veniam consequat sunt nostrud amet.</a></li>
                    </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item accrodin-item-2">
                <span class="numbering">6</span>
                <div class="accordion-header" id="headingSix">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        <div class="d-flex">
                            <p>Lorem Amet minim </p>
                            <i class="fas fa-caret-down"></i>
                        </div>
                </button>
                </div>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <ul>
                        <li><a href="#"><img src="{{asset('assets/images/course/small-book.svg')}}" alt="" class="img-fluid"> veniam consequat sunt nostrud amet.</a></li>
                        <li><a href="#"><img src="{{asset('assets/images/course/small-book.svg')}}" alt="" class="img-fluid"> veniam consequat sunt nostrud amet.</a></li>
                        <li><a href="#"><img src="{{asset('assets/images/course/small-book.svg')}}" alt="" class="img-fluid"> veniam consequat sunt nostrud amet.</a></li>
                    </ul>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-12 col-md-7 col-lg-8">
        <div class="mylearning-video-content-box custom-margin-top">
            <div class="video-iframe-vox">
                <a href="#">
                    <img src="{{asset('assets/courses/images/'. $course->thumbnail)}}" alt="{{ $course->thumbnail }}" class="img-fluid">
                </a>
            </div>
            <div class="content-txt-box">
                <div class="d-flex">
                    <h3>{{$course->title}}</h3>
                    <a href="#">Continue Learning</a>
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
                    <p>Last Updated : 2 hours ago</p>
                </div>
                <div class="row border-right-custom">
                    <div class="col-lg-6">
                        <div class="attached-file-box me-lg-2">
                            <h4><img src="{{asset('assets/images/course/pdf-icon.svg')}}" alt="Place" class="img-fluid me-1" width="40"> Welcome_to_team.doc</h4>
                            <a href="#"><img src="{{asset('assets/images/course/download-icon.svg')}}" alt="Place" class="img-fluid"></a>
                        </div> 
                    </div>
                    <div class="col-lg-6">
                        <div class="attached-file-box ms-lg-2">
                            <h4><img src="{{asset('assets/images/course/roadmap-icon.svg')}}" alt="Place" class="img-fluid me-1" width="40"> Roadmap.doc</h4>
                            <a href="#"><img src="{{asset('assets/images/course/download-icon.svg')}}" alt="Place" class="img-fluid"></a>
                        </div> 
                    </div>
                    <div class="col-lg-6">
                        <div class="attached-file-box me-lg-2">
                            <h4><img src="{{asset('assets/images/course/xcel-icon.svg')}}" alt="Place" class="img-fluid me-1" width="40"> Roadmap.doc</h4>
                            <a href="#"><img src="{{asset('assets/images/course/download-icon.svg')}}" alt="Place" class="img-fluid"></a>
                        </div> 
                    </div>
                    <div class="col-lg-6">
                        <div class="attached-file-box ms-lg-2">
                            <h4><img src="{{asset('assets/images/course/video-icon.svg')}}" alt="Place" class="img-fluid me-1" width="40"> Course’s content</h4>
                            <a href="#"><img src="{{asset('assets/images/course/download-icon.svg')}}" alt="Place" class="img-fluid"></a>
                        </div> 
                    </div>
                    <div class="col-lg-6">
                        <div class="attached-file-box me-lg-2">
                            <h4><img src="{{asset('assets/images/course/pdf-icon.svg')}}" alt="Place" class="img-fluid me-1" width="40"> Welcome_to_team.doc</h4>
                            <a href="#"><img src="{{asset('assets/images/course/download-icon.svg')}}" alt="Place" class="img-fluid"></a>
                        </div> 
                    </div>
                    <div class="col-lg-6">
                        <div class="attached-file-box ms-lg-2">
                            <h4><img src="{{asset('assets/images/course/roadmap-icon.svg')}}" alt="Place" class="img-fluid me-1" width="40"> Roadmap.doc</h4>
                            <a href="#"><img src="{{asset('assets/images/course/download-icon.svg')}}" alt="Place" class="img-fluid"></a>
                        </div> 
                    </div>
                    <div class="col-lg-6">
                        <div class="attached-file-box me-lg-2">
                            <h4><img src="{{asset('assets/images/course/xcel-icon.svg')}}" alt="Place" class="img-fluid me-1" width="40"> Roadmap.doc</h4>
                            <a href="#"><img src="{{asset('assets/images/course/download-icon.svg')}}" alt="Place" class="img-fluid"></a>
                        </div> 
                    </div>
                    <div class="col-lg-6">
                        <div class="attached-file-box ms-lg-2">
                            <h4><img src="{{asset('assets/images/course/video-icon.svg')}}" alt="Place" class="img-fluid me-1" width="40"> Course’s content</h4>
                            <a href="#"><img src="{{asset('assets/images/course/download-icon.svg')}}" alt="Place" class="img-fluid"></a>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
   </div>
   <!-- my learning page @E -->
   
</main>
<!-- course details page @E -->
@endsection