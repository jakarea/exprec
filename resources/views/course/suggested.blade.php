@extends('layouts.master')
@section('title') Suggested @endsection
@section('style') 
<link href="{{ asset('assets/css/course.css') }}" rel="stylesheet" type="text/css" />  
@endsection
@section('content') 

<main class="course-page-wrap">
   <!-- suggested page @S -->

   <div class="row">
    <div class="col-12 col-sm-12 col-md-5 col-lg-4">
        <div class="mylearning-txt-box mt-4">
            <h1>Dropship Academy</h1>
            <p>Toppers! Start in deze module met alle nieuwe video's over Product &amp; Nic he Research in 2021.</p>

            <h5>Course's Outline</h5>
        </div>
        <div class="course-outline-box">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <span class="numbering active">01</span>
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
                         <div class="frame-box">
                            <div class="media">
                                <img src="{{asset('assets/images/course/frame.png')}}" alt="" class="img-fluid">
                                <div class="media-body">
                                    <h5>nostrud amet.</h5>
                                    <p>veniam consequat sunt nostrud amet.</p>
                                    <span>3 mins</span>
                                </div>
                            </div>
                            <div class="media">
                                <img src="{{asset('assets/images/course/frame.png')}}" alt="" class="img-fluid">
                                <div class="media-body">
                                    <h5>nostrud amet.</h5>
                                    <p>veniam consequat sunt nostrud amet.</p>
                                    <span>3 mins</span>
                                </div>
                            </div>
                         </div>
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                <span class="numbering active">02</span>
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
                    <span class="numbering">03</span>
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
                    <span class="numbering">04</span>
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
                    <span class="numbering">05</span>
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
                    <span class="numbering">06</span>
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
        <div class="mylearning-video-content-box learning-content-box-2">
            
        <div class="profile-box profile-box-2 mt-0">
                <div class="media">
                <img src="{{asset('assets/images/course/avatar.png')}}" alt="Place" class="img-fluid">
                    <div class="media-body">
                        <h5>De Kracht van Doelen Stellen</h5>
                        <p>Module 2 Mindset en Big Picture</p>
                    </div>
                </div>
                <a href="#">
                    <img src="{{asset('assets/images/course/fullscreen.svg')}}" alt="Place" class="img-fluid">
                </a>
            </div>
            <div class="muted-content-box">
                <h5>Bijlagen (1)</h5>
                <p class="my-4">De kracht van doelen stellen (PDF).pdf</p>
                <h5>De kracht van doelen stellen</h5>
                <p>In deze video ga ik het hebben over de kracht van doelen stellen. Hoe stel je goede doelen
voor jezelf? Hoe kunnen deze doelen je helpen om uiteindelijk je doel te behalen?</p>
            </div>
            <div class="video-iframe-vox my-4">
                <a href="#">
                    <img src="{{asset('assets/images/course/video-placeholder.png')}}" alt="Place" class="img-fluid">
                </a>
            </div>
            <div class="muted-content-box">
                <h5>De kracht van doelen stellen</h5>
                <p>In deze video ga ik het hebben over de kracht van doelen stellen. Hoe stel je goede doelen
voor jezelf? Hoe kunnen deze doelen je helpen om uiteindelijk je doel te behalen?</p>
                
                <ul>
                    <li><a href="#">○ De kracht van Doelen stellen (PDF)</a></li>
                </ul>
            </div>

        </div>
    </div>
   </div>
   <!-- my learning page @E -->
   
</main>

@endsection