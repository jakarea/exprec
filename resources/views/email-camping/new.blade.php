@extends('layouts.master')

@section('title') Email Camping Four @endsection

@section('style') 
<link href="{{ asset('assets/css/email-camping.css') }}" rel="stylesheet" type="text/css" />  
@endsection

@section('content') 
<main class="email-camping-page-wrap"> 
   <!-- book marks @S -->
  <div class="bookmark-box-wrap">
    <ul>
        <li><span>Campaigns</span></li>
        <li><i class="fas fa-angle-right"></i></li>
        <li><a href="#">Edit Name</a></li>
    </ul>
  </div>
  <!-- book marks @E -->

  <!-- edit name head @S -->
  <div class="edit-name-head">
    <ul class="nav nav-pills" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><img src="{{asset('assets/images/users-main-icon.svg')}}" alt="" class="img-fluid"> RECIPIENTS</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><img src="{{asset('assets/images/list-book-icon.svg')}}" alt="" class="img-fluid">CONTENT</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false"><img src="{{asset('assets/images/eye-icon.svg')}}" alt="" class="img-fluid">Review</button>
        </li> 
    </ul>
  </div>
  <!-- edit name head @E -->

  <!-- edit name main tab @S -->
  <div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="camping-information-from-wrap">
                    <h5>Campaign Information</h5>
                    <form action="">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" placeholder="Name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Tags</label>
                            <select name="" id="" class="form-control">
                                <option value="">Select Tag</option>
                                <option value="">Tag 01</option>
                                <option value="">Tag 02</option>
                                <option value="">Tag 03</option>
                                <option value="">Tag 04</option>
                                <option value="">Tag 05</option>
                            </select>
                            <i class="fas fa-angle-down"></i>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="camping-information-from-wrap">
                    <h5 class="ms-md-5">Recipients</h5>
                    <form action="">
                        <div class="form-group">
                            <label for="">Send To</label>
                            <select name="" id="" class="form-control">
                                <option value="">Choose a list or segment</option>
                                <option value="">List 01</option>
                                <option value="">List 02</option>
                                <option value="">List 03</option>
                                <option value="">List 04</option>
                                <option value="">List 05</option>
                            </select>
                            <i class="fas fa-angle-down"></i>
                        </div>
                        <div class="form-group">
                            <label for="">Don't send to <span class="text-secondary">(Optional)</span></label>
                            <select name="" id="" class="form-control">
                                <option value="">Choose a list or segment</option>
                                <option value="">List 01</option>
                                <option value="">List 02</option>
                                <option value="">List 03</option>
                                <option value="">List 04</option>
                                <option value="">List 05</option>
                            </select>
                            <i class="fas fa-angle-down"></i>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="skip-txt-box-wrap">
                    <h4>Skip recently emailed profiles</h4>

                    <h6>Skip recently emailed profiles</h6>
                    <div class="row">
                        <div class="col-md-8 col-lg-10">
                            <p>This campaign wil skip profiles who received an email in the past 16 hours. Also called <br>Smart Sending, you can update this timeframe in <a href="#">Account Settings</a>.</p>
                        </div>
                        <div class="col-md-4 col-lg-2">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked> 
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="col-12">
                <div class="skip-txt-box-wrap">
                    <h4>Tracking</h4>

                    <h6>Include tracking parameters</h6>
                    <div class="row">
                        <div class="col-md-8 col-lg-10">
                            <p>Links in this campaign will include additional tracking information, called UTM <br> parameters. This allows source tracking within third-party reporting tools such as <br> Google Analytics. <a href="#">Learn more about UTM Tracking.</a></p>
                        </div>
                        <div class="col-md-4 col-lg-2">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked> 
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="camping-information-from-wrap">
                    <h5>Campaign Information</h5>
                    <form action="">
                       <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Subject Line</label>
                                    <input type="text" placeholder="" class="form-control">
                                    <img src="{{asset('assets/images/email-camping/face-emoji.svg')}}" alt="Emoji" class="img-fluid two">
                                    <img src="{{asset('assets/images/email-camping/light-icon.svg')}}" alt="light" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-6">  
                                <div class="form-group">
                                    <label for="">Preview Text</label>
                                    <input type="text" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">  
                                <div class="form-group">
                                    <label for="">Sender name</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">Go Next Level Marketing Agency</option>
                                        <option value="">Level 01</option>
                                        <option value="">Level 02</option>
                                        <option value="">Level 03</option>
                                        <option value="">Level 04</option>
                                        <option value="">Level 05</option>
                                    </select>
                                    <i class="fas fa-angle-down"></i>
                                </div>
                            </div>
                            <div class="col-lg-6">  
                                <div class="form-group">
                                    <label for="">Sender email address</label>
                                    <input type="text" placeholder="info@gonextlevelagency.nl" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 mt-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                    Use this as your reply to address.
                                </label>
                                </div>
                            </div>
                       </div>
                    </form>
                </div>
            </div> 
        </div>
        <div class="row">
            <div class="col-12">
                <div class="design-format-wrap">
                    <h5>How would you like to design your email?</h5>
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4">
                            <a href="{{url('email-marketing/content/templates/build?id=7d87fer4krner8fue3evfvdf')}}">
                            <div class="design-patten-box">
                                <span class="badge rounded-pill text-bg-custom">Popular</span>
                                <div class="thumbnail-box">
                                    <img src="{{asset('assets/images/email-camping/drag-drop-icon.svg')}}" alt="drag-drop" class="img-fluid">
                                </div>
                                <h6>Drag And Drop</h6>
                                <p>Create an email using our drag-and-drop editor.</p>
                            </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="design-patten-box html-bg">
                                <div class="thumbnail-box">
                                    <img src="{{asset('assets/images/email-camping/html.png')}}" alt="drag-drop" class="img-fluid">
                                </div> 
                                <h6>HTML</h6>
                                <p>Custom-code your email for complete control.</p>
                            </div>
                        </div> 
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="design-patten-box text-only-bg">
                                <div class="thumbnail-box">
                                    <img src="{{asset('assets/images/email-camping/text-only-icon.svg')}}" alt="drag-drop" class="img-fluid">
                                </div>  
                                <h6>Text Only</h6>
                                <p>Send a plain text email for a more personalfeel.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
        <h5>No Review</h5>
        <h6><i> UI is missing, if there review exist</i></h6>
    </div> 
    </div>
  <!-- edit name main tab @E -->

</main>
@endsection