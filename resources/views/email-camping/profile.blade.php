@extends('layouts.master')

@section('title') Profile - Email Campaign @endsection

@section('style')
<link href="{{ asset('assets/css/email-camping.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/e-campaign.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<main class="email-camping-page-wrap">
    {{-- head @S --}}
    <div class="email-camping-head profile-head">
        <h1>Profiles</h1>
        <a href="#">View Suppresed Profiles</a>
    </div>
    {{-- head @E --}}

    {{-- profile count @S --}}
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-8 col-12">
            <div class="profile-count-box">
                <h5>Profile counts</h5>
                <div class="d-flex">
                    <div class="me-4">
                        <h4>1,413</h4>
                        <p>Active profiles <i class="fa-solid fa-circle-question"></i></p>
                    </div>
                    <div>
                        <h4>0</h4>
                        <p>Suppressed profiles <i class="fa-solid fa-circle-question"></i></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- profile count @E --}}

    {{-- profile filter @S --}}
    <div class="interrest-search-wrap email-camp-search profile-filter-box">
        <div class="interrest-search-box">
            <select name="" id="">
                <option value="">SEARCH TEXT BY Name, Email, or Exact ph..</option>
                <option value="">SEARCH TEXT BY NAME</option>
                <option value="">SEARCH TEXT BY VALUE</option>
            </select>
            <img src="{{ asset('assets/images/search-icon.svg') }}" alt="Search icon" class="img-fluid">
            <input type="text" class="form-control" placeholder="Search">
        </div>
        <div class="profile-bttn-box">
            <button type="button" class="btn btn-search">Search</button>
            <button type="button" class="btn btn-filter">Filters</button> 
            <button type="button" class="btn btn-filter">1</button>  
        </div>
    </div>
    {{-- profile filter @E --}}

    {{-- product list table @S --}}
    <div class="product-list-table">
        <table>
            <tr>
                <th width="20%">Profile</th>
                <th>Email</th>
                <th>Phone </th>
                <th>Profile created <img src="{{asset('assets/images/e-campaign/up-down-angle.svg')}}" alt="Icon" class="img-fluid"></th>
                <th>Profile updated <img src="{{asset('assets/images/e-campaign/up-down-angle.svg')}}" alt="Icon" class="img-fluid"></th>
                <th>Location</th>
            </tr>
            <tr>
                <td>
                    <h5>jessica.hanson@example.com</h5>
                </td>
                <td>
                    <h6>jackson.graham@ex.........</h6>
                </td>
                <td>
                    <p>--</p>
                </td>
                <td>
                    <p>Mar 6, 2023 at 06:50 AM</p>
                </td>
                <td>
                    <p>Mar 6, 2023 at 06:50 AM</p>
                </td>
                <td>
                    <p>--</p>
                </td>
            </tr> 
            <tr>
                <td>
                    <h5>jessica.hanson@example.com</h5>
                </td>
                <td>
                    <h6>jackson.graham@ex.........</h6>
                </td>
                <td>
                    <p>--</p>
                </td>
                <td>
                    <p>Mar 6, 2023 at 06:50 AM</p>
                </td>
                <td>
                    <p>Mar 6, 2023 at 06:50 AM</p>
                </td>
                <td>
                    <p>--</p>
                </td>
            </tr> 
            <tr>
                <td>
                    <h5>jessica.hanson@example.com</h5>
                </td>
                <td>
                    <h6>jackson.graham@ex.........</h6>
                </td>
                <td>
                    <p>--</p>
                </td>
                <td>
                    <p>Mar 6, 2023 at 06:50 AM</p>
                </td>
                <td>
                    <p>Mar 6, 2023 at 06:50 AM</p>
                </td>
                <td>
                    <p>--</p>
                </td>
            </tr> 
            <tr>
                <td>
                    <h5>jessica.hanson@example.com</h5>
                </td>
                <td>
                    <h6>jackson.graham@ex.........</h6>
                </td>
                <td>
                    <p>--</p>
                </td>
                <td>
                    <p>Mar 6, 2023 at 06:50 AM</p>
                </td>
                <td>
                    <p>Mar 6, 2023 at 06:50 AM</p>
                </td>
                <td>
                    <p>--</p>
                </td>
            </tr> 
            <tr>
                <td>
                    <h5>jessica.hanson@example.com</h5>
                </td>
                <td>
                    <h6>jackson.graham@ex.........</h6>
                </td>
                <td>
                    <p>--</p>
                </td>
                <td>
                    <p>Mar 6, 2023 at 06:50 AM</p>
                </td>
                <td>
                    <p>Mar 6, 2023 at 06:50 AM</p>
                </td>
                <td>
                    <p>--</p>
                </td>
            </tr> 
            <tr>
                <td>
                    <h5>jessica.hanson@example.com</h5>
                </td>
                <td>
                    <h6>jackson.graham@ex.........</h6>
                </td>
                <td>
                    <p>--</p>
                </td>
                <td>
                    <p>Mar 6, 2023 at 06:50 AM</p>
                </td>
                <td>
                    <p>Mar 6, 2023 at 06:50 AM</p>
                </td>
                <td>
                    <p>--</p>
                </td>
            </tr> 
            <tr>
                <td>
                    <h5>jessica.hanson@example.com</h5>
                </td>
                <td>
                    <h6>jackson.graham@ex.........</h6>
                </td>
                <td>
                    <p>--</p>
                </td>
                <td>
                    <p>Mar 6, 2023 at 06:50 AM</p>
                </td>
                <td>
                    <p>Mar 6, 2023 at 06:50 AM</p>
                </td>
                <td>
                    <p>--</p>
                </td>
            </tr> 
            <tr>
                <td>
                    <h5>jessica.hanson@example.com</h5>
                </td>
                <td>
                    <h6>jackson.graham@ex.........</h6>
                </td>
                <td>
                    <p>--</p>
                </td>
                <td>
                    <p>Mar 6, 2023 at 06:50 AM</p>
                </td>
                <td>
                    <p>Mar 6, 2023 at 06:50 AM</p>
                </td>
                <td>
                    <p>--</p>
                </td>
            </tr> 
            <tr>
                <td>
                    <h5>jessica.hanson@example.com</h5>
                </td>
                <td>
                    <h6>jackson.graham@ex.........</h6>
                </td>
                <td>
                    <p>--</p>
                </td>
                <td>
                    <p>Mar 6, 2023 at 06:50 AM</p>
                </td>
                <td>
                    <p>Mar 6, 2023 at 06:50 AM</p>
                </td>
                <td>
                    <p>--</p>
                </td>
            </tr> 
            <tr>
                <td>
                    <h5>jessica.hanson@example.com</h5>
                </td>
                <td>
                    <h6>jackson.graham@ex.........</h6>
                </td>
                <td>
                    <p>--</p>
                </td>
                <td>
                    <p>Mar 6, 2023 at 06:50 AM</p>
                </td>
                <td>
                    <p>Mar 6, 2023 at 06:50 AM</p>
                </td>
                <td>
                    <p>--</p>
                </td>
            </tr> 
            <tr>
                <td>
                    <h5>jessica.hanson@example.com</h5>
                </td>
                <td>
                    <h6>jackson.graham@ex.........</h6>
                </td>
                <td>
                    <p>--</p>
                </td>
                <td>
                    <p>Mar 6, 2023 at 06:50 AM</p>
                </td>
                <td>
                    <p>Mar 6, 2023 at 06:50 AM</p>
                </td>
                <td>
                    <p>--</p>
                </td>
            </tr> 
            <tr>
                <td>
                    <h5>jessica.hanson@example.com</h5>
                </td>
                <td>
                    <h6>jackson.graham@ex.........</h6>
                </td>
                <td>
                    <p>--</p>
                </td>
                <td>
                    <p>Mar 6, 2023 at 06:50 AM</p>
                </td>
                <td>
                    <p>Mar 6, 2023 at 06:50 AM</p>
                </td>
                <td>
                    <p>--</p>
                </td>
            </tr> 
            <tr>
                <td>
                    <h5>jessica.hanson@example.com</h5>
                </td>
                <td>
                    <h6>jackson.graham@ex.........</h6>
                </td>
                <td>
                    <p>--</p>
                </td>
                <td>
                    <p>Mar 6, 2023 at 06:50 AM</p>
                </td>
                <td>
                    <p>Mar 6, 2023 at 06:50 AM</p>
                </td>
                <td>
                    <p>--</p>
                </td>
            </tr> 
            <tr>
                <td>
                    <h5>jessica.hanson@example.com</h5>
                </td>
                <td>
                    <h6>jackson.graham@ex.........</h6>
                </td>
                <td>
                    <p>--</p>
                </td>
                <td>
                    <p>Mar 6, 2023 at 06:50 AM</p>
                </td>
                <td>
                    <p>Mar 6, 2023 at 06:50 AM</p>
                </td>
                <td>
                    <p>--</p>
                </td>
            </tr> 
            <tr>
                <td>
                    <h5>jessica.hanson@example.com</h5>
                </td>
                <td>
                    <h6>jackson.graham@ex.........</h6>
                </td>
                <td>
                    <p>--</p>
                </td>
                <td>
                    <p>Mar 6, 2023 at 06:50 AM</p>
                </td>
                <td>
                    <p>Mar 6, 2023 at 06:50 AM</p>
                </td>
                <td>
                    <p>--</p>
                </td>
            </tr> 
            <tr>
                <td>
                    <h5>jessica.hanson@example.com</h5>
                </td>
                <td>
                    <h6>jackson.graham@ex.........</h6>
                </td>
                <td>
                    <p>--</p>
                </td>
                <td>
                    <p>Mar 6, 2023 at 06:50 AM</p>
                </td>
                <td>
                    <p>Mar 6, 2023 at 06:50 AM</p>
                </td>
                <td>
                    <p>--</p>
                </td>
            </tr> 
            <tr>
                <td>
                    <h5>jessica.hanson@example.com</h5>
                </td>
                <td>
                    <h6>jackson.graham@ex.........</h6>
                </td>
                <td>
                    <p>--</p>
                </td>
                <td>
                    <p>Mar 6, 2023 at 06:50 AM</p>
                </td>
                <td>
                    <p>Mar 6, 2023 at 06:50 AM</p>
                </td>
                <td>
                    <p>--</p>
                </td>
            </tr> 
            <tr>
                <td>
                    <h5>jessica.hanson@example.com</h5>
                </td>
                <td>
                    <h6>jackson.graham@ex.........</h6>
                </td>
                <td>
                    <p>--</p>
                </td>
                <td>
                    <p>Mar 6, 2023 at 06:50 AM</p>
                </td>
                <td>
                    <p>Mar 6, 2023 at 06:50 AM</p>
                </td>
                <td>
                    <p>--</p>
                </td>
            </tr> 
            <tr>
                <td>
                    <h5>jessica.hanson@example.com</h5>
                </td>
                <td>
                    <h6>jackson.graham@ex.........</h6>
                </td>
                <td>
                    <p>--</p>
                </td>
                <td>
                    <p>Mar 6, 2023 at 06:50 AM</p>
                </td>
                <td>
                    <p>Mar 6, 2023 at 06:50 AM</p>
                </td>
                <td>
                    <p>--</p>
                </td>
            </tr> 
            <tr>
                <td>
                    <h5>jessica.hanson@example.com</h5>
                </td>
                <td>
                    <h6>jackson.graham@ex.........</h6>
                </td>
                <td>
                    <p>--</p>
                </td>
                <td>
                    <p>Mar 6, 2023 at 06:50 AM</p>
                </td>
                <td>
                    <p>Mar 6, 2023 at 06:50 AM</p>
                </td>
                <td>
                    <p>--</p>
                </td>
            </tr> 
            <tr>
                <td>
                    <h5>jessica.hanson@example.com</h5>
                </td>
                <td>
                    <h6>jackson.graham@ex.........</h6>
                </td>
                <td>
                    <p>--</p>
                </td>
                <td>
                    <p>Mar 6, 2023 at 06:50 AM</p>
                </td>
                <td>
                    <p>Mar 6, 2023 at 06:50 AM</p>
                </td>
                <td>
                    <p>--</p>
                </td>
            </tr> 
        </table>
     </div>
     {{-- product list table @E --}}
</main>
@endsection

@section('script')

@endsection