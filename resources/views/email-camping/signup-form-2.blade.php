@extends('layouts.master')
@section('title') Sign Up Form Two @endsection

@section('style')
<link href="{{ asset('assets/css/e-campaign.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<main class="email-camping-page-wrap">
    {{-- header @S --}}
    <div class="email-camping-head">
        <h1>Sign up forms</h1>
    </div>
    {{-- header @E --}}

    {{-- schedule form @S --}}
    <div class="schedule-form-box">
        <div class="media">
            <img src="{{asset('assets/images/e-campaign/schedule-form-icon.svg')}}" alt="Icon" class="img-fluid icon">
            <div class="media-body">
                <h6>New: Save time with scheduled forms</h6>
                <p>Create a schedule to set your forms to live or <br> draft automatically.</p>
                <a href="#">Find out more</a>
            </div>
        </div>
        <div class="close-icons" onclick="this.parentNode.style.display='none'">
            <a href="javascript:void(0)"><i class="fa-solid fa-circle-xmark"></i></a>
        </div>
    </div>
    {{-- schedule form @E --}}

    {{-- filter @S --}}
    <form action="">
        <div class="row">
            <div class="col-lg-6 col-md-8 col-12">
                <div class="flow-search-filter">
                    <input type="text" placeholder="Search Flows" class="form-control">
                    <i class="fas fa-search"></i>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-7">
                <div class="flow-dropdown-filter">
                    <select name="" id="" class="form-control">
                        <option value="">All</option>
                        <option value="">All 01</option>
                        <option value="">All 02</option>
                        <option value="">All 03</option>
                        <option value="">All 04</option>
                    </select>
                    <i class="fas fa-angle-down"></i>
                </div>
            </div>  
            <div class="col-lg-1 col-5 col-sm-3 col-md-3 form-clear">
                <a href="#">Clear</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                {{-- flow filter table @S --}}
                <div class="flow-filter-table">
                    <table>
                        <tr> 
                            <th>Form name</th>
                            <th>Form Type</th>
                            <th>List</th>
                            <th>Submitted form</th>
                            <th>Form submit rate</th> 
                        </tr>
                        <tr>
                            <td>
                                <i class="fas fa-circle"></i>
                                <span>Futuristic tap-to-text</span>
                            </td>
                            <td>
                                <h6>Full screen</h6>
                            </td>
                            <td></td>
                            <td>
                                <p>--</p>
                            </td>
                            <td>
                                <p>--</p>
                            </td>
                        </tr> 
                        <tr>
                            <td>
                                <i class="fas fa-circle"></i>
                                <span>Futuristic tap-to-text</span>
                            </td>
                            <td>
                                <h6>Full screen</h6>
                            </td>
                            <td>
                                <p class="text-dark">Newsletter,  test <br> by JAKAREA</p>
                            </td>
                            <td>
                                <p>--</p>
                            </td>
                            <td>
                                <p>--</p>
                            </td>
                        </tr> 
                        <tr>
                            <td>
                                <i class="fas fa-circle"></i>
                                <span>Futuristic tap-to-text</span>
                            </td>
                            <td>
                                <h6>Full screen</h6>
                            </td>
                            <td>
                                <p class="text-dark">Newsletter</p>
                            </td>
                            <td>
                                <p>--</p>
                            </td>
                            <td>
                                <p>--</p>
                            </td>
                        </tr> 
                        <tr>
                            <td colspan="7" class="table-swipe pt-4">
                                <a href="#"><i class="fas fa-angle-left"></i></a>
                                <span>01</span>
                                <a href="#"><i class="fas fa-angle-right"></i></a>
                            </td>
                        </tr>
                    </table>
                </div>
                {{-- flow filter table @E --}}
            </div>
        </div>
    </form>
    {{-- filter @E --}}

     

</main>
@endsection