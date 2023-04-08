@extends('layouts.master')
@section('title') My Learning @endsection
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
</style>
@endsection
@section('content') 

<main class="course-page-wrap">
   <!-- suggested page @S -->

    <!-- suggested banner @S -->
    <div class="learning-banners-wrap">
          <div class="media">
            <div class="media-body">
              <h1 class="addspy-main-title">Dropship Academy</h1>
              <p>Toppers! Start in deze module met alle nieuwe video's over Product &amp; Nic <br> he Research in 2021.</p>

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
                <!-- Vimeo Player -->

                <div class="vimeo-player w-100" data-vimeo-url="https://vimeo.com/815578316" data-vimeo-width="1000" data-vimeo-height="360"></div>
            </div>
            <div class="content-txt-box">
                <div class="d-flex">
                    <h3>Dropship Academy </h3>
                    <a href="#">Continue Learning</a>
                </div>

                <p>In this course, you will learn about the Drop shipping, application, and interview process in the unites states, while comparing and contrasting the same process in your home country. this course will also give you the opportunity to explore your global career path, while building your vocabulary and improving your language skills to achive your professional goals.</p>
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
<script src="https://player.vimeo.com/api/player.js"></script>
<script>
    var options = {
        id: '{{ 815578316 }}',
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
</script>

@endsection
@section('script')
<script src="https://player.vimeo.com/api/player.js"></script>
<script>
    var options = {
        id: '{{ 815578316 }}',
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
</script>
@endsection