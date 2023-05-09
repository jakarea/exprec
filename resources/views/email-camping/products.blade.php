@extends('layouts.master')

@section('title') Products Email Campaign @endsection

@section('style')
<link href="{{ asset('assets/css/email-camping.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/e-campaign.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<main class="email-camping-page-wrap">
    <div class="editing-panel-header">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-segment-jakarea-tab" data-bs-toggle="pill" data-bs-target="#pills-segment-jakarea"
                    type="button" role="tab" aria-controls="pills-segment-jakarea" aria-selected="true">List &amp; Segments Test
                    by JAKAREA</button>
            </li>
        </ul>
    </div>
    {{-- product body @S --}}
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-segment-jakarea" role="tabpanel" aria-labelledby="pills-segment-jakarea-tab" tabindex="0">
             {{-- product head @S --}}
             <div class="product-list-head">
                <h1>1,412 Members - Settings - Signup Forms - Subscribe & Prefereces - Quick Add - Reports <i class="fas fa-angle-down"></i></h1>
             </div>
             {{-- product head @E --}}

             {{-- product list table @S --}}
             <div class="product-list-table">
                <table>
                    <tr>
                        <th width="20%">Profile</th>
                        <th>Email</th>
                        <th>Phone no</th>
                        <th>Location</th>
                        <th>Date added <img src="{{asset('assets/images/e-campaign/up-down-angle.svg')}}" alt="Icon" class="img-fluid"></th>
                    </tr>
                    <tr>
                        <td>
                            <h5>jessica.hanson@example.com</h5>
                        </td>
                        <td>
                            <h6>jackson.graham@example.com</h6>
                        </td>
                        <td>
                            <p>--</p>
                        </td>
                        <td>
                            <p>--</p>
                        </td>
                        <td>
                            <div class="d-flex">
                                <p>Mar 6, 06:50 AM</p>
                                <a href="#"><i class="fa-solid fa-ellipsis-vertical"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>jessica.hanson@example.com</h5>
                        </td>
                        <td>
                            <h6>jackson.graham@example.com</h6>
                        </td>
                        <td>
                            <p>--</p>
                        </td>
                        <td>
                            <p>--</p>
                        </td>
                        <td>
                            <div class="d-flex">
                                <p>Mar 6, 06:50 AM</p>
                                <a href="#"><i class="fa-solid fa-ellipsis-vertical"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>jessica.hanson@example.com</h5>
                        </td>
                        <td>
                            <h6>jackson.graham@example.com</h6>
                        </td>
                        <td>
                            <p>--</p>
                        </td>
                        <td>
                            <p>--</p>
                        </td>
                        <td>
                            <div class="d-flex">
                                <p>Mar 6, 06:50 AM</p>
                                <a href="#"><i class="fa-solid fa-ellipsis-vertical"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>jessica.hanson@example.com</h5>
                        </td>
                        <td>
                            <h6>jackson.graham@example.com</h6>
                        </td>
                        <td>
                            <p>--</p>
                        </td>
                        <td>
                            <p>--</p>
                        </td>
                        <td>
                            <div class="d-flex">
                                <p>Mar 6, 06:50 AM</p>
                                <a href="#"><i class="fa-solid fa-ellipsis-vertical"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>jessica.hanson@example.com</h5>
                        </td>
                        <td>
                            <h6>jackson.graham@example.com</h6>
                        </td>
                        <td>
                            <p>--</p>
                        </td>
                        <td>
                            <p>--</p>
                        </td>
                        <td>
                            <div class="d-flex">
                                <p>Mar 6, 06:50 AM</p>
                                <a href="#"><i class="fa-solid fa-ellipsis-vertical"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>jessica.hanson@example.com</h5>
                        </td>
                        <td>
                            <h6>jackson.graham@example.com</h6>
                        </td>
                        <td>
                            <p>--</p>
                        </td>
                        <td>
                            <p>--</p>
                        </td>
                        <td>
                            <div class="d-flex">
                                <p>Mar 6, 06:50 AM</p>
                                <a href="#"><i class="fa-solid fa-ellipsis-vertical"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>jessica.hanson@example.com</h5>
                        </td>
                        <td>
                            <h6>jackson.graham@example.com</h6>
                        </td>
                        <td>
                            <p>--</p>
                        </td>
                        <td>
                            <p>--</p>
                        </td>
                        <td>
                            <div class="d-flex">
                                <p>Mar 6, 06:50 AM</p>
                                <a href="#"><i class="fa-solid fa-ellipsis-vertical"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>jessica.hanson@example.com</h5>
                        </td>
                        <td>
                            <h6>jackson.graham@example.com</h6>
                        </td>
                        <td>
                            <p>--</p>
                        </td>
                        <td>
                            <p>--</p>
                        </td>
                        <td>
                            <div class="d-flex">
                                <p>Mar 6, 06:50 AM</p>
                                <a href="#"><i class="fa-solid fa-ellipsis-vertical"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>jessica.hanson@example.com</h5>
                        </td>
                        <td>
                            <h6>jackson.graham@example.com</h6>
                        </td>
                        <td>
                            <p>--</p>
                        </td>
                        <td>
                            <p>--</p>
                        </td>
                        <td>
                            <div class="d-flex">
                                <p>Mar 6, 06:50 AM</p>
                                <a href="#"><i class="fa-solid fa-ellipsis-vertical"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>jessica.hanson@example.com</h5>
                        </td>
                        <td>
                            <h6>jackson.graham@example.com</h6>
                        </td>
                        <td>
                            <p>--</p>
                        </td>
                        <td>
                            <p>--</p>
                        </td>
                        <td>
                            <div class="d-flex">
                                <p>Mar 6, 06:50 AM</p>
                                <a href="#"><i class="fa-solid fa-ellipsis-vertical"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>jessica.hanson@example.com</h5>
                        </td>
                        <td>
                            <h6>jackson.graham@example.com</h6>
                        </td>
                        <td>
                            <p>--</p>
                        </td>
                        <td>
                            <p>--</p>
                        </td>
                        <td>
                            <div class="d-flex">
                                <p>Mar 6, 06:50 AM</p>
                                <a href="#"><i class="fa-solid fa-ellipsis-vertical"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>jessica.hanson@example.com</h5>
                        </td>
                        <td>
                            <h6>jackson.graham@example.com</h6>
                        </td>
                        <td>
                            <p>--</p>
                        </td>
                        <td>
                            <p>--</p>
                        </td>
                        <td>
                            <div class="d-flex">
                                <p>Mar 6, 06:50 AM</p>
                                <a href="#"><i class="fa-solid fa-ellipsis-vertical"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>jessica.hanson@example.com</h5>
                        </td>
                        <td>
                            <h6>jackson.graham@example.com</h6>
                        </td>
                        <td>
                            <p>--</p>
                        </td>
                        <td>
                            <p>--</p>
                        </td>
                        <td>
                            <div class="d-flex">
                                <p>Mar 6, 06:50 AM</p>
                                <a href="#"><i class="fa-solid fa-ellipsis-vertical"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>jessica.hanson@example.com</h5>
                        </td>
                        <td>
                            <h6>jackson.graham@example.com</h6>
                        </td>
                        <td>
                            <p>--</p>
                        </td>
                        <td>
                            <p>--</p>
                        </td>
                        <td>
                            <div class="d-flex">
                                <p>Mar 6, 06:50 AM</p>
                                <a href="#"><i class="fa-solid fa-ellipsis-vertical"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>jessica.hanson@example.com</h5>
                        </td>
                        <td>
                            <h6>jackson.graham@example.com</h6>
                        </td>
                        <td>
                            <p>--</p>
                        </td>
                        <td>
                            <p>--</p>
                        </td>
                        <td>
                            <div class="d-flex">
                                <p>Mar 6, 06:50 AM</p>
                                <a href="#"><i class="fa-solid fa-ellipsis-vertical"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>jessica.hanson@example.com</h5>
                        </td>
                        <td>
                            <h6>jackson.graham@example.com</h6>
                        </td>
                        <td>
                            <p>--</p>
                        </td>
                        <td>
                            <p>--</p>
                        </td>
                        <td>
                            <div class="d-flex">
                                <p>Mar 6, 06:50 AM</p>
                                <a href="#"><i class="fa-solid fa-ellipsis-vertical"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>jessica.hanson@example.com</h5>
                        </td>
                        <td>
                            <h6>jackson.graham@example.com</h6>
                        </td>
                        <td>
                            <p>--</p>
                        </td>
                        <td>
                            <p>--</p>
                        </td>
                        <td>
                            <div class="d-flex">
                                <p>Mar 6, 06:50 AM</p>
                                <a href="#"><i class="fa-solid fa-ellipsis-vertical"></i></a>
                            </div>
                        </td>
                    </tr>
                </table>
             </div>
             {{-- product list table @E --}}
        </div> 
    </div>
    {{-- product body @E --}}

</main>
@endsection

@section('script')

@endsection