@extends('layouts.master')

@section('title') Email Camping Three @endsection

@section('style') 
<link href="{{ asset('assets/css/email-camping.css') }}" rel="stylesheet" type="text/css" />  
@endsection

@section('content') 
<main class="email-camping-page-wrap"> 

   <div class="email-camping-drag-drop-page">
     <!-- drag and drop tools @S --> 
     <div class="drag-drop-tools-box">
        <div class="drag-drop-head">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Styles</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Display Options</button>
                </li> 
            </ul>
        </div>
        <div class="drag-drop-tools-body">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                     <!-- tools item @S -->
                        <div class="single-tool-box">
                            <a class="heading" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
                                aria-controls="collapseExample">
                                Background <i class="fas fa-angle-down"></i>
                            </a>
                            <div class="collapse" id="collapseExample">
                                <div class="tools-option">
                                    <div class="d-flex">
                                        <p>Image</p>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tools item @E -->
                        <!-- tools item @S -->
                            <div class="single-tool-box">
                                <div class="d_flex">
                                    <a class="heading" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false"
                                        aria-controls="collapseExample2">
                                        Content color
                                    </a>
                                    <div class="content-color-box">
                                        <a href="#" class="active">Auto</a>
                                        <a href="#">Custom</a>
                                        <a href="#">None</a>
                                    </div>
                                </div>

                                <div class="collapse" id="collapseExample2">
                                    <div class="tools-option">
                                        <div class="d-flex">
                                            <p>Selection color</p>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- tools item @E -->
                            <!-- tools item @S -->
                            <div class="single-tool-box">
                                <a class="heading" data-bs-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false"
                                    aria-controls="collapseExample3">
                                    Section <i class="fas fa-angle-down"></i>
                                </a>
                                <div class="collapse" id="collapseExample3">
                                    <div class="tools-option">
                                        <div class="d-flex">
                                            <p>Border</p>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- tools item @E -->
                             <!-- tools item @S -->
                            <div class="tools-padding">
                                <div class="d_flex">
                                    <h6>Padding</h6>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked">
                                    </div>
                                </div> 
                            <div class="padding-box">
                                <p>Top / Bottom</p>
                                <div class="d-flex">
                                    <div class="padding-set-box">
                                        <input type="text" value="0">
                                        <span>px</span>
                                        <i class="fa-solid fa-caret-up"></i>
                                        <i class="fa-solid fa-caret-down"></i>
                                    </div>
                                    <div class="padding-lock">
                                        <a href="#"><img src="{{asset('assets/images/email-camping/lock-icon.svg')}}" alt=""
                                                class="img-fluid"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="padding-box">
                                <p>Left / Right</p>
                                <div class="d-flex">
                                    <div class="padding-set-box">
                                        <input type="text" value="0">
                                        <span>px</span>
                                        <i class="fa-solid fa-caret-up"></i>
                                        <i class="fa-solid fa-caret-down"></i>
                                    </div>
                                    <div class="padding-lock">
                                        <a href="#"><img src="{{asset('assets/images/email-camping/lock-icon.svg')}}" alt=""
                                                class="img-fluid"></a>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- tools item @E -->

                     <!-- tools item @S -->
                     <div class="align-padding-item">
                        <h6>Padding</h6>
                        <div class="padding-align-boxs">
                            <div class="left-padding">
                                <img src="{{asset('assets/images/email-camping/Left-to-Right.svg')}}" alt="Left-to-Right" class="img-fluid">
                                <p>Left to Right</p>
                            </div>
                            <div class="left-padding active">
                                <img src="{{asset('assets/images/email-camping/Right-to-Left.svg')}}" alt="Right-to-Left" class="img-fluid">
                                <p>Right to Left</p>
                            </div>
                        </div>
                     </div>
                     <!-- tools item @E -->
                     <!-- tools item @S -->
                     <div class="single-tool-box">
                        <div class="d_flex">
                            <a class="heading" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">
                            Content color 
                            </a>  
                            <div class="content-color-box">
                                <a href="#" class="active">L</a>
                                <a href="#">C</a>
                                <a href="#">R</a> 
                            </div>
                        </div>
                     </div>
                     <!-- tools item @E -->
                    </div> 
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                    <!-- block item @S -->
                    <div class="single-tool-box">
                            <a class="heading" data-bs-toggle="collapse" href="#collapseExample77" role="button" aria-expanded="false"
                                aria-controls="collapseExample77">
                                BLOCKS <i class="fas fa-angle-down"></i>
                            </a>
                            <div class="collapse" id="collapseExample77">
                                <div class="block-tools">
                                    <!-- tool item @S -->
                                    <div class="tool">
                                        <img src="{{asset('assets/images/email-camping/tool-icon/text.svg')}}" alt="text" class="img-fluid">
                                        <p>Text</p>
                                    </div>
                                    <!-- tool item @E -->
                                    <!-- tool item @S -->
                                    <div class="tool">
                                        <img src="{{asset('assets/images/email-camping/tool-icon/image.svg')}}" alt="text" class="img-fluid">
                                        <p>Image</p>
                                    </div>
                                    <!-- tool item @E -->
                                    <!-- tool item @S -->
                                    <div class="tool">
                                        <img src="{{asset('assets/images/email-camping/tool-icon/Split.svg')}}" alt="text" class="img-fluid">
                                        <p>Split</p>
                                    </div>
                                    <!-- tool item @E -->
                                    <!-- tool item @S -->
                                    <div class="tool">
                                        <img src="{{asset('assets/images/email-camping/tool-icon/Button.svg')}}" alt="text" class="img-fluid">
                                        <p>Button</p>
                                    </div>
                                    <!-- tool item @E -->
                                    <!-- tool item @S -->
                                    <div class="tool">
                                        <img src="{{asset('assets/images/email-camping/tool-icon/header.svg')}}" alt="text" class="img-fluid">
                                        <p>Header</p>
                                    </div>
                                    <!-- tool item @E -->
                                    <!-- tool item @S -->
                                    <div class="tool">
                                        <img src="{{asset('assets/images/email-camping/tool-icon/Drrop-shadow.svg')}}" alt="text" class="img-fluid">
                                        <p>Drop Shadow</p>
                                    </div>
                                    <!-- tool item @E -->
                                    <!-- tool item @S -->
                                    <div class="tool">
                                        <img src="{{asset('assets/images/email-camping/tool-icon/Horzontal-rule.svg')}}" alt="text" class="img-fluid">
                                        <p>Horizontal Rule</p>
                                    </div>
                                    <!-- tool item @E -->
                                    <!-- tool item @S -->
                                    <div class="tool">
                                        <img src="{{asset('assets/images/email-camping/tool-icon/Social.svg')}}" alt="text" class="img-fluid">
                                        <p>Social Links</p>
                                    </div>
                                    <!-- tool item @E -->
                                    <!-- tool item @S -->
                                    <div class="tool">
                                        <img src="{{asset('assets/images/email-camping/tool-icon/Spacer.svg')}}" alt="text" class="img-fluid">
                                        <p>Spacer</p>
                                    </div>
                                    <!-- tool item @E -->
                                    <!-- tool item @S -->
                                    <div class="tool">
                                        <img src="{{asset('assets/images/email-camping/tool-icon/Package.svg')}}" alt="text" class="img-fluid">
                                        <p>Product</p>
                                    </div>
                                    <!-- tool item @E -->
                                    <!-- tool item @S -->
                                    <div class="tool">
                                        <img src="{{asset('assets/images/email-camping/tool-icon/Table.svg')}}" alt="text" class="img-fluid">
                                        <p>Table</p>
                                    </div>
                                    <!-- tool item @E -->
                                </div>
                            </div>
                        </div>
                    <!-- block item @E -->
                     <!-- block item @S -->
                    <div class="single-tool-box">
                            <a class="heading" data-bs-toggle="collapse" href="#collapseExample99" role="button" aria-expanded="false"
                                aria-controls="collapseExample99">
                                Layout <i class="fas fa-angle-down"></i>
                            </a>
                            <div class="collapse" id="collapseExample99">
                                <div class="block-tools">
                                    <!-- tool item @S -->
                                    <div class="tool">
                                        <img src="{{asset('assets/images/email-camping/tool-icon/Column.svg')}}" alt="text" class="img-fluid">
                                        <p>Columns</p>
                                    </div>
                                    <!-- tool item @E --> 
                                    <!-- tool item @S -->
                                    <div class="tool">
                                        <img src="{{asset('assets/images/email-camping/tool-icon/Section.svg')}}" alt="text" class="img-fluid">
                                        <p>Section</p>
                                    </div>
                                    <!-- tool item @E --> 
                                </div>
                            </div>
                        </div>
                    <!-- block item @E -->
                </div> 
            </div>
        </div>
    </div>
    <!--  drag and drop tools @E --> 

    <div class="email-template-maker-wrap">
        <div class="row">
            <div class="col-lg-2">
                <div class="drag-and-drop-icon-box">
                    <ul>
                        <li><a href="#"><img src="{{asset('assets/images/email-camping/copy-icon.svg')}}" alt="copy-icon" class="img-fluid"></a></li>
                        <li><a href="#"><img src="{{asset('assets/images/email-camping/star-icon.svg')}}" alt="star-icon" class="img-fluid"></a></li>
                        <li><a href="#"><img src="{{asset('assets/images/email-camping/clipboard-icon.svg')}}" alt="clipboard-icon" class="img-fluid"></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 order_2">
                <div class="drag-drop-txt-box">
                    <form action="">
                        <div class="form-group"> 
                            <label for="file" class="file-upload-box"> 
                                <img src="{{ asset('assets/images/email-camping/upload-icon.svg') }}" alt="list-plus" class="img-fluid">
                                <h6>Configure Image</h6>
                                <input type="file" id="file">
                            </label> 
                        </div>
                        <div class="form-group">
                            <h4>When you have one thing to say, a snack email is <br> great way to do it.</h4>
                            <p>A snack email has four components: a headiine, an image, a short description and a button people can link on to learn more or keep going. This is a great option when you have one announcement to make.</p>

                            <p>Snack emails are easy to read, so your customers and users will appreciate you making it easy for them to decide whetner this email is relevant to them.</p>
                        </div>
                        <div class="form-submit">
                            <button type="submit" class="btn btn-submit">Keep Reading</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-2 order_1">
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
    </div>
   </div>

</main>
@endsection

@section('script')
 
@endsection