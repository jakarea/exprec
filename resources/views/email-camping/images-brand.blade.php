@extends('layouts.master')

@section('title') Email Camping Images Brand @endsection

@section('style') 
<link href="{{ asset('assets/css/email-camping.css') }}" rel="stylesheet" type="text/css" />  
@endsection

@section('content') 
<main class="email-camping-page-wrap"> 
    <div class="editing-panel-header">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home2-tab" data-bs-toggle="pill" data-bs-target="#pills-home2" type="button" role="tab" aria-controls="pills-home2" aria-selected="true">Images</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile2-tab" data-bs-toggle="pill" data-bs-target="#pills-profile2" type="button" role="tab" aria-controls="pills-profile2" aria-selected="false">Brand</button>
            </li> 
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-socail2-tab" data-bs-toggle="pill" data-bs-target="#pills-socail2" type="button" role="tab" aria-controls="pills-socail2" aria-selected="false">Fonts</button>
            </li> 
        </ul>
    </div>
    <!-- editingpanel body @S -->
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home2" role="tabpanel" aria-labelledby="pills-home2-tab" tabindex="0">
        <div class="email-camping-drag-drop-page">
        <!-- drag and drop tools @S --> 
        <div class="drag-drop-tools-box">
            <div class="drag-drop-head drag-drop-head-2">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Styles</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Header Links</button>
                    </li> 
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-socail-tab" data-bs-toggle="pill" data-bs-target="#pills-socail" type="button" role="tab" aria-controls="pills-socail" aria-selected="false">Social Icons</button>
                    </li> 
                </ul>
            </div>
            <div class="drag-drop-tools-body">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                        <!-- logo maker @S -->
                        <div class="logo-maker-box">
                            <h6>LOGO</h6>
                            <div class="text-center">
                                <h5>Upload an image</h5>
                                <p>Maximum file size is 5 MB</p>
                            </div>
                            <label for="file" class="file-upload-box"> 
                                    <img src="{{ asset('assets/images/email-camping/upload-plus-icon.svg') }}" alt="list-plus" class="img-fluid">
                                    <h4>Attach or drop your image here.</h4>
                                    <p>Accepts .jpg, -jpeg, •png and .gif fille types.</p>
                                    <a href="#"><img src="{{ asset('assets/images/email-camping/Folder.svg') }}" alt="list-plus" class="img-fluid">Browse Image Library</a>
                                    <input type="file" id="file">
                            </label> 
                        </div>
                        <!-- logo maker @E -->

                        <!-- colors box @S -->
                        <div class="colors-box">
                            <h6>COLORS</h6>
                            <div class="d-grid">
                                <div class="color-pick">
                                    <p>Accent</p>
                                    <div class="d-flex">
                                        <span></span>
                                        <input type="text" value="#444444">
                                    </div>
                                </div>
                                <div class="color-pick">
                                    <p>Accent</p>
                                    <div class="d-flex">
                                        <span class="orange"></span>
                                        <input type="text" value="#222222">
                                    </div>
                                </div>
                            </div>
                            <div class="d-grid mt-3">
                                <div class="color-pick">
                                    <p>Accent</p>
                                    <div class="d-flex">
                                        <span class="blu"></span>
                                        <input type="text" value="#444444">
                                    </div>
                                </div>
                                <div class="color-pick">
                                    <p>Accent</p>
                                    <div class="d-flex">
                                        <span class="grn"></span>
                                        <input type="text" value="#222222">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- colors box @E -->

                        <!-- font box @S -->
                        <div class="font-box-wrap">
                            <h6>FONT</h6>
                            <form action="">
                                <div class="form-group">
                                    <select name="" id="" class="form-control">
                                        <option value="">Helvetica Neue</option>
                                        <option value="">San Serif</option>
                                        <option value="">Helvetica 01</option>
                                        <option value="">Helvetica 02</option>
                                        <option value="">Helvetica 03</option>
                                        <option value="">Helvetica 04</option>
                                    </select>
                                    <i class="fa-solid fa-caret-down"></i>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <select name="" id="" class="form-control">
                                                <option value="">Medium</option> 
                                                <option value="">Regular</option> 
                                                <option value="">Light</option> 
                                                <option value="">Bold</option> 
                                            </select>
                                            <i class="fa-solid fa-caret-down"></i>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <select name="" id="" class="form-control">
                                                <option value="">1px</option> 
                                                <option value="">2px</option> 
                                                <option value="">3px</option> 
                                                <option value="">4px</option> 
                                                <option value="">5px</option> 
                                                <option value="">6px</option> 
                                                <option value="">7px</option> 
                                                <option value="">8px</option> 
                                                <option value="">12px</option> 
                                                <option value="">16px</option> 
                                                <option value="">20px</option> 
                                                <option value="">24px</option> 
                                                <option value="">28px</option> 
                                                <option value="">32px</option> 
                                                <option value="">36px</option> 
                                                <option value="">40px</option> 
                                                <option value="">44px</option> 
                                                <option value="">48px</option> 
                                                <option value="">50px</option> 
                                                <option value="">56px</option> 
                                                <option value="">62px</option> 
                                                <option value="">78px</option> 
                                                <option value="">82px</option> 
                                                <option value="">90px</option> 
                                                <option value="">100px</option> 
                                            </select>
                                            <i class="fa-solid fa-caret-down"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="">Styling</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <ul>
                                                <li><a href="#"><img src="{{ asset('assets/images/email-camping/s1.svg') }}" alt="a" class="img-fluid"></a></li>
                                                <li><a href="#"><img src="{{ asset('assets/images/email-camping/s2.svg') }}" alt="a" class="img-fluid"></a></li>
                                                <li><a href="#"><img src="{{ asset('assets/images/email-camping/s3.svg') }}" alt="a" class="img-fluid"></a></li>
                                                <li><a href="#"><img src="{{ asset('assets/images/email-camping/s4.svg') }}" alt="a" class="img-fluid"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="">Alignment</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <ul>
                                                <li><a href="#"><img src="{{ asset('assets/images/email-camping/a1.svg') }}" alt="a" class="img-fluid"></a></li>
                                                <li><a href="#"><img src="{{ asset('assets/images/email-camping/a2.svg') }}" alt="a" class="img-fluid"></a></li>
                                                <li><a href="#"><img src="{{ asset('assets/images/email-camping/a3.svg') }}" alt="a" class="img-fluid"></a></li>
                                                <li><a href="#"><img src="{{ asset('assets/images/email-camping/a4.svg') }}" alt="a" class="img-fluid"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- font box @E -->
                    </div> 
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                        
                    </div> 
                    <div class="tab-pane fade" id="pills-social" role="tabpanel" aria-labelledby="pills-social-tab" tabindex="0">
                        
                    </div> 
                </div>
            </div>
        </div>
        <!--  drag and drop tools @E --> 

        <div class="email-template-maker-wrap">
            <div class="row justify-content-center"> 
                <div class="col-lg-10">
                    <div class="drag-drop-txt-box">
                        <form action="">
                            <div class="form-group"> 
                                <label for="file" class="file-upload-box bg-white" style="border-bottom: 1px solid #ccc"> 
                                    <img src="{{ asset('assets/images/email-camping/logo-icon.svg') }}" alt="list-plus" class="img-fluid">
                                    <h6>Your Logo Here</h6>
                                    <input type="file" id="file">
                                </label> 
                            </div>
                            <div class="form-group">
                                <h4>Thanks for stopping by!</h4>
                                <p>Wheher t's an important announcement, new products or services or <br> letting people know about <br>special promotion Maybe you need to link to something, With Experc, <br> you're covered Happy emailing!</p>
                            </div>
                            <div class="form-submit">
                                <button type="submit" class="btn btn-submit">Keep Reading</button>
                            </div>
                        </form>
                    </div>
                </div> 
            </div>
        </div>
    </div>  
        </div> 
        <div class="tab-pane fade" id="pills-profile2" role="tabpanel" aria-labelledby="pills-profile2-tab" tabindex="0">
            <h2>Brand</h2>
        </div> 
        <div class="tab-pane fade" id="pills-social2" role="tabpanel" aria-labelledby="pills-social2-tab" tabindex="0">
            <h2>Fonts</h2>
        </div> 
    </div>
    <!-- editingpanel body @E -->

</main>
@endsection

@section('script')
 
@endsection