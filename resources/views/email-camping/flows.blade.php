@extends('layouts.master')

@section('title') Email Camping Flows @endsection

@section('style') 
<link href="{{ asset('assets/css/email-camping.css') }}" rel="stylesheet" type="text/css" />  
@endsection

@section('content') 
<main class="email-camping-page-wrap flows-page-wrap"> 

<div class="email-camping-drag-drop-page">
  <!-- drag and drop tools @S --> 
  <div class="drag-drop-tools-box"> 
      <div class="drag-drop-action-box">
         <h6>ACTIONS</h6>
         <ul>
             <li><a href="#"><img src="{{asset('assets/images/email-camping/action/email-icon.svg')}}" alt="email" class="img-fluid"> Email</a></li>
             <li><a href="#"><img src="{{asset('assets/images/email-camping/action/chat-icon.svg')}}" alt="email" class="img-fluid"> SMS</a></li>

             <li><a href="#"><img src="{{asset('assets/images/email-camping/action/user-icon.svg')}}" alt="email" class="img-fluid"> Update Profile Property</a></li>
             <li><a href="#"><img src="{{asset('assets/images/email-camping/action/Bell.svg')}}" alt="email" class="img-fluid"> Notification</a></li>
             <li><a href="#"><img src="{{asset('assets/images/email-camping/action/link-icon.svg')}}" alt="email" class="img-fluid"> Webhook</a></li>
             <li><a href="#"><img src="{{asset('assets/images/email-camping/action/email-icon.svg')}}" alt="email" class="img-fluid"> Email</a></li>
         </ul>
         <h6>TIMING</h6>
         <ul>
             <li><a href="#" class="active"><img src="{{asset('assets/images/email-camping/action/Clock.svg')}}" alt="email" class="img-fluid"> Time Delay</a></li> 
         </ul>
         <h6>LOGIC</h6>
         <ul>
             <li><a href="#" class="active"><img src="{{asset('assets/images/email-camping/action/split.svg')}}" alt="email" class="img-fluid"> Conditional Split</a></li> 
         </ul>
      </div>
 </div>
 <!--  drag and drop tools @E --> 
 
 <!-- timeline @S -->
 <div class="row">
    <div class="col-lg-11 ordr_2">
        <div class="timeline-main-wrap">
        <h1>Timeline</h1>
            <div class="row">
                <div class="col-lg-6">
                    <div class="ms-md-5">
                    <!-- timeline item @S -->
                    <div class="time-line-box timeline-success">
                        <img src="{{asset('assets/images/email-camping/grameen-succes.svg')}}" alt="Check" class="img-fluid success-image">
                        <h6 class="clr-primary">Trigger</h6>
                        <h5><span>When someone</span> subscribes to SMS Subscribors</h5>
                    </div>
                    <!-- timeline item @E -->
                    <!-- timeline item @S -->
                    <div class="time-line-box time-2 timeline-success">
                        <img src="{{asset('assets/images/email-camping/red-error.svg')}}" alt="Check" class="img-fluid success-image">
                        <h6>Welcome John, Email #1</h6>
                        <div class="d-flex">
                            <h5>Thanks for signing up!</h5>
                            <a href="#"><img src="{{asset('assets/images/union-dark.svg')}}" alt="union" class="img-fluid"></a>
                        </div> 
                        <div class="timeline-ftr">
                            <ul>
                                <li><a href="#"><img src="{{asset('assets/images/email-camping/timeline/timeline-icon-01.svg')}}" alt="union" class="img-fluid"></a></li>
                                <li><a href="#"><img src="{{asset('assets/images/email-camping/timeline/timeline-icon-02.svg')}}" alt="union" class="img-fluid"></a></li>
                                <li><a href="#"><img src="{{asset('assets/images/email-camping/timeline/timeline-icon-03.svg')}}" alt="union" class="img-fluid"></a></li>
                            </ul>

                            <select name="" id="">
                                <option value="">Draft</option>
                                <option value="">Draft 01</option>
                                <option value="">Draft 02</option>
                            </select>
                        </div>
                    </div>
                    <!-- timeline item @E -->
                    <!-- timeline item @S -->
                    <div class="time-line-box timeline-success">  
                    <img src="{{asset('assets/images/email-camping/red-error.svg')}}" alt="Check" class="img-fluid success-image">
                        <div class="d-flex">
                            <h5>Wait 3 days</h5>
                            <a href="#"><span>12:00p</span><img src="{{asset('assets/images/union-dark.svg')}}" alt="union" class="img-fluid"></a>
                        </div> 
                    </div>
                    <!-- timeline item @E -->
                    <!-- timeline item @S -->
                    <div class="time-line-box time-3 timeline-success">
                        <img src="{{asset('assets/images/email-camping/red-error.svg')}}" alt="Check" class="img-fluid success-image">
                        <h6>Welcome John, Email #1</h6>
                        <div class="d-flex">
                            <h5>Follow us on Social Media!!</h5>
                            <a href="#"><img src="{{asset('assets/images/union-dark.svg')}}" alt="union" class="img-fluid"></a>
                        </div> 
                        <div class="timeline-ftr">
                            <ul>
                                <li><a href="#"><img src="{{asset('assets/images/email-camping/timeline/timeline-icon-01.svg')}}" alt="union" class="img-fluid"></a></li>
                                <li><a href="#"><img src="{{asset('assets/images/email-camping/timeline/timeline-icon-02.svg')}}" alt="union" class="img-fluid"></a></li>
                                <li><a href="#"><img src="{{asset('assets/images/email-camping/timeline/timeline-icon-03.svg')}}" alt="union" class="img-fluid"></a></li>
                            </ul>

                            <select name="" id="">
                                <option value="">Draft</option>
                                <option value="">Draft 01</option>
                                <option value="">Draft 02</option>
                            </select>
                        </div>
                    </div>
                    <!-- timeline item @E -->
                    <!-- timeline item @S -->
                    <div class="time-line-box timeline-success">  
                    <img src="{{asset('assets/images/email-camping/red-error.svg')}}" alt="Check" class="img-fluid success-image">
                        <div class="d-flex">
                            <h5>Wait 4 days</h5>
                            <a href="#"><span>12:00p</span><img src="{{asset('assets/images/union-dark.svg')}}" alt="union" class="img-fluid"></a>
                        </div> 
                    </div>
                    <!-- timeline item @E -->
                    <!-- timeline item @S -->
                    <div class="time-line-box time-4 timeline-success">
                    <img src="{{asset('assets/images/email-camping/red-close.svg')}}" alt="Check" class="img-fluid success-image">
                        <h6>Welcome John, Email #1</h6>
                        <div class="d-flex">
                            <h5>Check out our best-sellers.</h5>
                            <a href="#"><img src="{{asset('assets/images/union-dark.svg')}}" alt="union" class="img-fluid"></a>
                        </div> 
                        <div class="timeline-ftr">
                            <ul>
                                <li><a href="#"><img src="{{asset('assets/images/email-camping/timeline/timeline-icon-01.svg')}}" alt="union" class="img-fluid"></a></li>
                                <li><a href="#"><img src="{{asset('assets/images/email-camping/timeline/timeline-icon-02.svg')}}" alt="union" class="img-fluid"></a></li>
                                <li><a href="#"><img src="{{asset('assets/images/email-camping/timeline/timeline-icon-03.svg')}}" alt="union" class="img-fluid"></a></li>
                            </ul>

                            <select name="" id="">
                                <option value="">Draft</option>
                                <option value="">Draft 01</option>
                                <option value="">Draft 02</option>
                            </select>
                        </div>
                    </div>
                    <!-- timeline item @E -->
                    <div class="time-line-bttn">
                        <a href="#">EXIT</a>
                    </div>
                    </div>
                </div>
                <div class="col-lg-6">
                <div class="e-todo-head">
                    <h3>Email# 1 Preview</h3>
                </div>
                <div class="preview-box-placeholder">
                    <div class="image-placeholder"></div>
                    <div class="small-image-placeholder"></div>
                    <div class="text-placeholder"></div>
                    <div class="text-placeholder"></div>
                    <div class="button-placeholder"></div>
                    <div class="placeholder-txt">
                    <p>Your Preview will show here</p>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="col-lg-1 ordr_1">
        <div class="email-template-view-icon">
            <ul>
                <li><a href="#" style="border-radius: 10px 10px 0 0;"><img src="{{asset('assets/images/email-camping/tv-icon.svg')}}" alt="clipboard-icon" class="img-fluid"></a></li>
                <li><a href="#" style="border-radius: 0; height: 1.5rem"><img src="{{asset('assets/images/email-camping/line-icon.svg')}}" alt="clipboard-icon" class="img-fluid"></a></li>
                <li><a href="#" style="border-radius: 0 0 10px 10px;"><img src="{{asset('assets/images/email-camping/mobile-icon.svg')}}" alt="clipboard-icon" class="img-fluid"></a></li>
            </ul>
            <ul> 
                <li><a href="#"><img src="{{asset('assets/images/email-camping/eye-icon.svg')}}" alt="clipboard-icon" class="img-fluid"></a></li>
            </ul>
        </div>
    </div>
 </div>
 <!-- timeline @E -->

</div>
</main>
@endsection

@section('script')
 
@endsection