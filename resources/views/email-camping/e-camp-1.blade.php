@extends('layouts.master')

@section('title') Email Camping One @endsection

@section('style') 
<link href="{{ asset('assets/css/email-camping.css') }}" rel="stylesheet" type="text/css" />  
@endsection

@section('content') 
<main class="email-camping-page-wrap"> 

    <div class="email-camping-head">
        <h1>Email Campoaigns</h1> 
    </div>
    <div class="email-camping-head-bttn">
        <ul>
            <li><a href="#" class="active">Objectives</a></li>
            <li><a href="#">Performance</a></li>
            <li><a href="#">Lists &amp; segments</a></li>
            <li><a href="#">Activity Feed</a></li>
        </ul> 
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="e-todo-head">
                <h3><img src="{{ asset('assets/images/fire.png') }}" alt="fire" class="img-fluid"> To Do First</h3>
            </div>
            <div class="growth-form-box">
                <h4>Grow your list with a signup form</h4>
                <p>Popup forms on your website are up to 400%
                    more effective than embedded forms.</p> 
                    <a href="#">Make Form <img src="{{ asset('assets/images/email-camping/list-plus-icon.svg') }}" alt="list" class="img-fluid"></a>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="e-todo-head">
                <h3>Live Form Preview</h3>
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
</main>
@endsection