@extends('layouts.master')

@section('title') Email Camping Two @endsection

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
                <h3>To Do First</h3>
            </div>
            <div class="growth-main-form">
               <form action="">
                <div class="form-group">
                    <label for="">Form Title</label>
                    <input type="text" placeholder="MUSIC NEWS FOR THE FANS" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Form Subtitle</label>
                    <textarea placeholder="THE MOST INTERESTING STORIES ABOUT THE ARTISTS YOU LOVE." class="form-control" name="" id="" ></textarea> 
                </div>
                <div class="form-group">
                    <label for="">Input Feed Title</label>
                    <input type="text" placeholder="Type Your Email Here" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Button Title</label>
                    <input type="text" placeholder="SUBMIT" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Upload Image</label>

                    <label for="file" class="file-upload-box"> 
                        <img src="{{ asset('assets/images/email-camping/upload-icon.svg') }}" alt="list-plus" class="img-fluid">
                        <input type="file" id="file">
                    </label> 
                </div>
                <div class="submit-bttn">
                    <button type="submit" class="btn btn-submit">Save Changes <img src="{{ asset('assets/images/email-camping/list-plus-icon.svg') }}" alt="list-plus" class="img-fluid"></button>
                </div>
               </form>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="e-todo-head">
                <h3>Live Form Preview</h3>
            </div>
            <div class="preview-main-box">
               <div class="prevview-thumbnail-box">
                <img src="{{ asset('assets/images/email-camping/live-preview-img.png') }}" alt="" class="img-fluid">
               </div>
               <div class="preview-txt-box">
                <h4>MUSIC NEWS FOR THE FANS</h4>
                <h6>THE MOST INTERESTING STORIES ABOUT THE ARTISTS YOU LOVE.</h6>
                <form action="">
                    <div class="form-group">
                       <input type="text" placeholder="Type Your Email Here" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-submit">Submit</button>
                </form>
               </div>
            </div>
        </div>
    </div>
</main>
@endsection