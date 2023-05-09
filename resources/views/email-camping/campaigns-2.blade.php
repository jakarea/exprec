@extends('layouts.master')
@section('title') Email Campings Two @endsection

@section('style')
<link href="{{ asset('assets/css/e-campaign.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<main class="email-camping-page-wrap">
    {{-- header @S --}}
    <div class="email-camping-head">
        <h1>Ready to Send?</h1>
    </div>
    {{-- header @E --}}

    {{-- send box @S --}}
    <div class="row">
        {{-- item @S --}}
        <div class="col-lg-5 col-md-6 col-12">
            <div class="send-item-box">
                <div class="media">
                    <img src="{{asset('assets/images/e-campaign/green-check-icon.svg')}}" alt="Icon"
                        class="img-fluid green-icon">
                    <div class="media-body">
                        <h5>Recipients</h5>
                        <h6>This will send to Engaged (30 Days) and Newsletter. excluding anyone found in Preview
                            List</h6>
                        <p>Estimated 0 total recipients.</p>
                    </div>
                    <a href="#" class="edit-bttn">Edit <i class="fa-regular fa-pen-to-square"></i></a>
                </div>
            </div>
        </div>
        {{-- item @E --}}
        {{-- item @S --}}
        <div class="col-lg-5 col-md-6 col-12">
            <div class="send-item-box">
                <div class="media">
                    <img src="{{asset('assets/images/e-campaign/green-check-icon.svg')}}" alt="Icon"
                        class="img-fluid green-icon">
                    <div class="media-body">
                        <h5>Smart Sending</h5>
                        <h6>Smart Sending is enabled for this campaign
                            It will not be sent to people who received a message in the last 16 hours.</h6> 
                    </div>
                    <a href="#" class="edit-bttn">Edit <i class="fa-regular fa-pen-to-square"></i></a>
                </div>
            </div>
        </div>
        {{-- item @E --}}
        {{-- item @S --}}
        <div class="col-lg-5 col-md-6 col-12">
            <div class="send-item-box">
                <div class="media">
                    <img src="{{asset('assets/images/e-campaign/green-check-icon.svg')}}" alt="Icon"
                        class="img-fluid green-icon">
                    <div class="media-body">
                        <h5>Subject Line</h5>
                        <h6>“ss”</h6> 
                    </div>
                    <a href="#" class="edit-bttn mt-3">Edit <i class="fa-regular fa-pen-to-square"></i></a>
                </div>
            </div>
        </div>
        {{-- item @E --}}
        {{-- item @S --}}
        <div class="col-lg-5 col-md-6 col-12">
            <div class="send-item-box">
                <div class="media">
                    <img src="{{asset('assets/images/e-campaign/green-check-icon.svg')}}" alt="Icon"
                        class="img-fluid green-icon">
                    <div class="media-body">
                        <h5>From &amp; Replies</h5>
                        <h6>Your campaign will come from Go Next Level Marketing Agency  <i class="fas fa-angle-left"></i>info@gonextievelagency.nl<i class="fas fa-angle-right"></i>.</h6>
                        <p>All replies will be sent to infoagonextlevelagency.nl.</p>
                    </div>
                    <a href="#" class="edit-bttn">Edit <i class="fa-regular fa-pen-to-square"></i></a>
                </div>
            </div>
        </div>
        {{-- item @E --}}
        {{-- item @S --}}
        <div class="col-lg-5 col-md-6 col-12">
            <div class="send-item-box">
                <div class="media">
                    <img src="{{asset('assets/images/e-campaign/green-check-icon.svg')}}" alt="Icon"
                        class="img-fluid green-icon">
                    <div class="media-body">
                        <h5>Content</h5>
                        <h6>You created this variation with the HTML editor View </h6>
                        <a href="#" class="preview-bttn">Preview</a>
                    </div>
                    <a href="#" class="edit-bttn">Edit <i class="fa-regular fa-pen-to-square"></i></a>
                </div>
            </div>
        </div>
        {{-- item @E --}}
        {{-- item @S --}}
        <div class="col-lg-5 col-md-6 col-12">
            <div class="send-item-box">
                <div class="media">
                    <img src="{{asset('assets/images/e-campaign/error-red-icon.svg')}}" alt="Icon"
                        class="img-fluid green-icon">
                    <div class="media-body">
                        <h5>Possible Email Content Issues</h5>
                        <h6>It doesn't look like there any links in your email. Did you forget to add them to your email?</h6> 
                    </div>
                    <a href="#" class="edit-bttn">Edit <i class="fa-regular fa-pen-to-square"></i></a>
                </div>
            </div>
        </div>
        {{-- item @E --}}
        {{-- item @S --}}
        <div class="col-lg-5 col-md-6 col-12">
            <div class="send-item-box">
                <div class="media">
                    <img src="{{asset('assets/images/e-campaign/error-red-icon.svg')}}" alt="Icon"
                        class="img-fluid green-icon">
                    <div class="media-body">
                        <h5>Unsubscribe Link</h5>
                        <h6>Vle couldnt find an unsubscribe link in your email. Klaviyo Will automatically add an unsubscribe link when sending the email if you dont add one.</h6> 
                    </div>
                    <a href="#" class="edit-bttn">Edit <i class="fa-regular fa-pen-to-square"></i></a>
                </div>
            </div>
        </div>
        {{-- item @E --}}
    </div>
    {{-- send box @E --}}
</main>
@endsection