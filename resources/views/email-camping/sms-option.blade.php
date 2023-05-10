@extends('layouts.master')

@section('title') SMS Option - Email Camping @endsection

@section('style')
<link href="{{ asset('assets/css/email-camping.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/e-campaign.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<main class="email-camping-page-wrap flows-page-wrap">
    <div class="email-camping-drag-drop-page">
        {{-- sidebar @S --}}
        <div class="drag-drop-tools-box">
            <div class="sms-sidebar-box">
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link " id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                            type="button" role="tab" aria-controls="pills-home" aria-selected="true">Overview</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                            aria-selected="false">Create A/B Test</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade " id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
                        tabindex="0">
                        <p class="p-4">OverView</p>
                    </div>
                    <div class="tab-pane fade show active" id="pills-profile" role="tabpanel"
                        aria-labelledby="pills-profile-tab" tabindex="0">
                        {{-- style items @S --}}
                        <div class="styles-items-boxs">
                            <div class="media">
                                <img src="{{asset('assets/images/e-campaign/pen-icon.svg')}}" alt="Pen" class="fluid">
                                <div class="media-body">
                                    <h6>Styles</h6>
                                    <p>Full Page ‧ No side image </p>
                                </div>
                            </div>
                            <div class="media">
                                <img src="{{asset('assets/images/e-campaign/magic-icon.svg')}}" alt="Pen" class="fluid">
                                <div class="media-body">
                                    <h6>Targeting &amp; behavior</h6>
                                    <p>Show immediately ‧ Mobile only </p>
                                </div>
                            </div>
                            <div class="media">
                                <img src="{{asset('assets/images/e-campaign/qube-icon.svg')}}" alt="Pen" class="fluid">
                                <div class="media-body">
                                    <h6>Add Blocks</h6>
                                </div>
                            </div>
                        </div>
                        {{-- style items @E --}}
                    </div>
                </div>
            </div>
        </div>
        {{-- sidebar @E --}}

        {{-- sms main body part @S --}}
        <div class="sms-body-wrap">
            <div class="editing-panel-header">
                <ul class="nav nav-pills" id="pills-tabt" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-segment-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-segment" type="button" role="tab"
                            aria-controls="pills-segment" aria-selected="true">SMS Opt-in</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link " id="pills-setup-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-setup" type="button" role="tab"
                            aria-controls="pills-setup" aria-selected="true">Setup</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link " id="pills-success-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-success" type="button" role="tab"
                            aria-controls="pills-success" aria-selected="true">Success</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link " id="pills-teaser-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-teaser" type="button" role="tab"
                            aria-controls="pills-teaser" aria-selected="true">Teaser</button>
                    </li>
                </ul>
            </div>

            <div class="tab-content" id="pills-tabtContent">
                <div class="tab-pane show active" id="pills-segment" role="tabpanel" aria-labelledby="pills-segment-tab" tabindex="0"> 
                    {{-- top status @S --}}
                    <div class="top-status">
                        <p>Before you can collect SMS Subscribres confirm your sending information. <a href="#">Confirm sending info</a></p>
                    </div>
                    {{-- top status @E --}}

                    {{-- phone img @S --}}
                    <div class="phone-image">
                        <img src="{{asset('assets/images/e-campaign/phone-img.png')}}" alt="phone-image" class="img-fluid">
                    </div>
                    {{-- phone img @E --}}
                </div>
                <div class="tab-pane " id="pills-setup" role="tabpanel" aria-labelledby="pills-setup-tab" tabindex="0">
                    setup
                </div>
                <div class="tab-pane " id="pills-success" role="tabpanel" aria-labelledby="pills-success-tab" tabindex="0">
                    success
                </div>
                <div class="tab-pane " id="pills-teaser" role="tabpanel" aria-labelledby="pills-teaser-tab" tabindex="0">
                    teaser
                </div>
            </div>

        </div>
        {{-- sms main body part @E --}}
    </div>

</main>
@endsection

@section('script')

@endsection