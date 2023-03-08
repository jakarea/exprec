@extends('layouts.master')

@section('title') Email Camping Integrations @endsection

@section('style') 
<link href="{{ asset('assets/css/email-camping.css') }}" rel="stylesheet" type="text/css" />  
@endsection

@section('content') 
<main class="email-camping-page-wrap email-camp-integration-page"> 
    
  <!-- integration head @S -->
  <div class="integration-head-wrap">
    <ul class="nav nav-pills" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">All Integrations</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Enabled Integrations</button>
        </li> 
    </ul>
  </div>
  <!-- integration head @E -->

  <div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
<!-- integration filter wrap @S -->
<div class="row integration-top-margin">
    <div class="col-md-4 col-lg-3">
        <div class="integration-filter-box">
            <h6>Category</h6>
            <div class="integrate-filter-select">
                <select name="" id="" class="form-control">
                    <option value="">All</option>
                    <option value="">Category 01</option>
                    <option value="">Category 02</option>
                    <option value="">Category 03</option>
                    <option value="">Category 04</option>
                    <option value="">Category 05</option>
                    <option value="">Category 06</option>
                    <option value="">Category 07</option>
                </select>
                <i class="fas fa-angle-down"></i>
            </div>
        </div>
    </div>
    <div class="col-md-5 col-lg-4">
        <div class="integration-filter-box">
            <h6>Name includes</h6>
            <div class="integrate-filter-select">
                <select name="" id="" class="form-control">
                    <option value="">Filter by integration name</option>
                    <option value="">Name 01</option> 
                    <option value="">Name 02</option> 
                    <option value="">Name 03</option> 
                    <option value="">Name 04</option> 
                    <option value="">Name 05</option> 
                    <option value="">Name 06</option> 
                </select>
                <img src="{{asset('assets/images/email-camping/filter-icon.svg')}}" alt="" class="img-fluid">
            </div>
        </div>
    </div>
  </div>
  <!-- integration filter wrap @E -->

  <!-- integration area @S -->
  <div class="row">
    <!-- item @S -->
    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
        <div class="integration-box-wrap">
            <div class="media">
                <img src="{{ asset('assets/images/email-camping/integration-01.png') }}" alt="" class="img-fluid">
                <div class="media-body">
                    <h5>LoveClip</h5>
                    <h6>Fundraising</h6>
                </div>
            </div>
            <a href="#">Add <i class="fas fa-plus"></i></a>
        </div>
    </div>
    <!-- item @E -->
    <!-- item @S -->
    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
        <div class="integration-box-wrap">
            <div class="media">
                <img src="{{ asset('assets/images/email-camping/integration-02.png') }}" alt="" class="img-fluid">
                <div class="media-body">
                    <h5>LoveClip</h5>
                    <h6>Fundraising</h6>
                </div>
            </div>
            <a href="#">Add <i class="fas fa-plus"></i></a>
        </div>
    </div>
    <!-- item @E -->
    <!-- item @S -->
    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
        <div class="integration-box-wrap">
            <div class="media">
                <img src="{{ asset('assets/images/email-camping/integration-03.png') }}" alt="" class="img-fluid">
                <div class="media-body">
                    <h5>LoveClip</h5>
                    <h6>Fundraising</h6>
                </div>
            </div>
            <a href="#">Add <i class="fas fa-plus"></i></a>
        </div>
    </div>
    <!-- item @E -->
    <!-- item @S -->
    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
        <div class="integration-box-wrap">
            <div class="media">
                <img src="{{ asset('assets/images/email-camping/integration-04.png') }}" alt="" class="img-fluid">
                <div class="media-body">
                    <h5>LoveClip</h5>
                    <h6>Fundraising</h6>
                </div>
            </div>
            <a href="#">Add <i class="fas fa-plus"></i></a>
        </div>
    </div>
    <!-- item @E -->
    <!-- item @S -->
    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
        <div class="integration-box-wrap">
            <div class="media">
                <img src="{{ asset('assets/images/email-camping/integration-05.png') }}" alt="" class="img-fluid">
                <div class="media-body">
                    <h5>LoveClip</h5>
                    <h6>Fundraising</h6>
                </div>
            </div>
            <a href="#">Add <i class="fas fa-plus"></i></a>
        </div>
    </div>
    <!-- item @E -->
    <!-- item @S -->
    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
        <div class="integration-box-wrap">
            <div class="media">
                <img src="{{ asset('assets/images/email-camping/integration-01.png') }}" alt="" class="img-fluid">
                <div class="media-body">
                    <h5>LoveClip</h5>
                    <h6>Fundraising</h6>
                </div>
            </div>
            <a href="#">Add <i class="fas fa-plus"></i></a>
        </div>
    </div>
    <!-- item @E -->
    <!-- item @S -->
    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
        <div class="integration-box-wrap">
            <div class="media">
                <img src="{{ asset('assets/images/email-camping/integration-02.png') }}" alt="" class="img-fluid">
                <div class="media-body">
                    <h5>LoveClip</h5>
                    <h6>Fundraising</h6>
                </div>
            </div>
            <a href="#">Add <i class="fas fa-plus"></i></a>
        </div>
    </div>
    <!-- item @E -->
    <!-- item @S -->
    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
        <div class="integration-box-wrap">
            <div class="media">
                <img src="{{ asset('assets/images/email-camping/integration-03.png') }}" alt="" class="img-fluid">
                <div class="media-body">
                    <h5>LoveClip</h5>
                    <h6>Fundraising</h6>
                </div>
            </div>
            <a href="#">Add <i class="fas fa-plus"></i></a>
        </div>
    </div>
    <!-- item @E -->
    <!-- item @S -->
    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
        <div class="integration-box-wrap">
            <div class="media">
                <img src="{{ asset('assets/images/email-camping/integration-04.png') }}" alt="" class="img-fluid">
                <div class="media-body">
                    <h5>LoveClip</h5>
                    <h6>Fundraising</h6>
                </div>
            </div>
            <a href="#">Add <i class="fas fa-plus"></i></a>
        </div>
    </div>
    <!-- item @E -->
    <!-- item @S -->
    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
        <div class="integration-box-wrap">
            <div class="media">
                <img src="{{ asset('assets/images/email-camping/integration-05.png') }}" alt="" class="img-fluid">
                <div class="media-body">
                    <h5>LoveClip</h5>
                    <h6>Fundraising</h6>
                </div>
            </div>
            <a href="#">Add <i class="fas fa-plus"></i></a>
        </div>
    </div>
    <!-- item @E -->
  </div>
  <!-- integration area @E -->
  </div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
<!-- integration filter wrap @S -->
<div class="row integration-top-margin">
    <div class="col-md-4 col-lg-3">
        <div class="integration-filter-box">
            <h6>Category</h6>
            <div class="integrate-filter-select">
                <select name="" id="" class="form-control">
                    <option value="">All</option>
                    <option value="">Category 01</option>
                    <option value="">Category 02</option>
                    <option value="">Category 03</option>
                    <option value="">Category 04</option>
                    <option value="">Category 05</option>
                    <option value="">Category 06</option>
                    <option value="">Category 07</option>
                </select>
                <i class="fas fa-angle-down"></i>
            </div>
        </div>
    </div>
    <div class="col-md-5 col-lg-4">
        <div class="integration-filter-box">
            <h6>Name includes</h6>
            <div class="integrate-filter-select">
                <select name="" id="" class="form-control">
                    <option value="">Filter by integration name</option>
                    <option value="">Name 01</option> 
                    <option value="">Name 02</option> 
                    <option value="">Name 03</option> 
                    <option value="">Name 04</option> 
                    <option value="">Name 05</option> 
                    <option value="">Name 06</option> 
                </select>
                <img src="{{asset('assets/images/email-camping/filter-icon.svg')}}" alt="" class="img-fluid">
            </div>
        </div>
    </div>
  </div>
  <!-- integration filter wrap @E -->

  <!-- integration area @S -->
  <div class="row">
    <!-- item @S -->
    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
        <div class="integration-box-wrap">
            <div class="media">
                <img src="{{ asset('assets/images/email-camping/integration-01.png') }}" alt="" class="img-fluid">
                <div class="media-body">
                    <h5>LoveClip</h5>
                    <h6>Fundraising</h6>
                </div>
            </div>
            <a href="#">Add <i class="fas fa-plus"></i></a>
        </div>
    </div>
    <!-- item @E -->
    <!-- item @S -->
    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
        <div class="integration-box-wrap">
            <div class="media">
                <img src="{{ asset('assets/images/email-camping/integration-02.png') }}" alt="" class="img-fluid">
                <div class="media-body">
                    <h5>LoveClip</h5>
                    <h6>Fundraising</h6>
                </div>
            </div>
            <a href="#">Add <i class="fas fa-plus"></i></a>
        </div>
    </div>
    <!-- item @E -->
    <!-- item @S -->
    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
        <div class="integration-box-wrap">
            <div class="media">
                <img src="{{ asset('assets/images/email-camping/integration-03.png') }}" alt="" class="img-fluid">
                <div class="media-body">
                    <h5>LoveClip</h5>
                    <h6>Fundraising</h6>
                </div>
            </div>
            <a href="#">Add <i class="fas fa-plus"></i></a>
        </div>
    </div>
    <!-- item @E -->
    <!-- item @S -->
    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
        <div class="integration-box-wrap">
            <div class="media">
                <img src="{{ asset('assets/images/email-camping/integration-04.png') }}" alt="" class="img-fluid">
                <div class="media-body">
                    <h5>LoveClip</h5>
                    <h6>Fundraising</h6>
                </div>
            </div>
            <a href="#">Add <i class="fas fa-plus"></i></a>
        </div>
    </div>
    <!-- item @E -->
    <!-- item @S -->
    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
        <div class="integration-box-wrap">
            <div class="media">
                <img src="{{ asset('assets/images/email-camping/integration-05.png') }}" alt="" class="img-fluid">
                <div class="media-body">
                    <h5>LoveClip</h5>
                    <h6>Fundraising</h6>
                </div>
            </div>
            <a href="#">Add <i class="fas fa-plus"></i></a>
        </div>
    </div>
    <!-- item @E -->
    <!-- item @S -->
    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
        <div class="integration-box-wrap">
            <div class="media">
                <img src="{{ asset('assets/images/email-camping/integration-01.png') }}" alt="" class="img-fluid">
                <div class="media-body">
                    <h5>LoveClip</h5>
                    <h6>Fundraising</h6>
                </div>
            </div>
            <a href="#">Add <i class="fas fa-plus"></i></a>
        </div>
    </div>
    <!-- item @E -->
    <!-- item @S -->
    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
        <div class="integration-box-wrap">
            <div class="media">
                <img src="{{ asset('assets/images/email-camping/integration-02.png') }}" alt="" class="img-fluid">
                <div class="media-body">
                    <h5>LoveClip</h5>
                    <h6>Fundraising</h6>
                </div>
            </div>
            <a href="#">Add <i class="fas fa-plus"></i></a>
        </div>
    </div>
    <!-- item @E -->
    <!-- item @S -->
    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
        <div class="integration-box-wrap">
            <div class="media">
                <img src="{{ asset('assets/images/email-camping/integration-03.png') }}" alt="" class="img-fluid">
                <div class="media-body">
                    <h5>LoveClip</h5>
                    <h6>Fundraising</h6>
                </div>
            </div>
            <a href="#">Add <i class="fas fa-plus"></i></a>
        </div>
    </div>
    <!-- item @E -->
    <!-- item @S -->
    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
        <div class="integration-box-wrap">
            <div class="media">
                <img src="{{ asset('assets/images/email-camping/integration-04.png') }}" alt="" class="img-fluid">
                <div class="media-body">
                    <h5>LoveClip</h5>
                    <h6>Fundraising</h6>
                </div>
            </div>
            <a href="#">Add <i class="fas fa-plus"></i></a>
        </div>
    </div>
    <!-- item @E -->
    <!-- item @S -->
    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
        <div class="integration-box-wrap">
            <div class="media">
                <img src="{{ asset('assets/images/email-camping/integration-05.png') }}" alt="" class="img-fluid">
                <div class="media-body">
                    <h5>LoveClip</h5>
                    <h6>Fundraising</h6>
                </div>
            </div>
            <a href="#">Add <i class="fas fa-plus"></i></a>
        </div>
    </div>
    <!-- item @E -->
  </div>
  <!-- integration area @E -->
  </div>
</div>
 
</main>
@endsection