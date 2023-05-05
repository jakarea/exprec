@extends('layouts.admin')
@section('title') Admin - Refund List @endsection

@section('style')
<link href="{{ asset('assets/css/common.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
@role("Admin")
<main class="product-research-page-wrap">

    <!-- session message @S -->
    @include('partials/session-message')
    <!-- session message @E -->

    <!-- Customers header area @S -->
    <div class="product-filter-wrapper mt-0">
        <div class="product-filter-box mt-0">
            <h5>Refund Management</h5>
            <div class="form-grp-btn mt-4 ms-auto">
                <a href="{{ url('/') }}" class="btn me-3"><i class="fas fa-list me-2"></i> Dashboard</a>
            </div>
        </div>
    </div>
    <!-- Customers header area @E -->

    <!-- Customers listing @S -->
    <div class="row">
        <div class="col-12">
            <div class="productss-list-box">
                <table>
                    <tr>
                        <th width="5%">No</th>
                        <th>Avatar</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Reason</th>
                        <th>Actions</th>

                    </tr>
                    <tr>
                        <td>1</td>
                        <td>
                            <div class="table-avatar">
                                {{-- if thumbnail/image exist image will show --}}
                                {{-- <img src="{{ asset('assets/images/user/akram-hossain.png') }}" alt="Avatar"
                                    class="img-fluid"> --}}
                                {{-- if thumbnail/image exist --}}
                                <span>{!! strtoupper(Auth()->user()->name[0]) !!}</span> 
                            </div>
                        </td>
                        <td>demo@mail.com</td>
                        <td>N/A</td>
                        <td>Lorem, ipsum dolor.</td>
                        <td>
                            <a href="{{url('refund/1/show')}}" class="btn btn-table">View</a>
                        </td>
                    </tr>
                </table>
                {{-- <p class="p-4 text-center">No Refund Found!</p> --}}
            </div>
        </div>
    </div>
    <!-- Customers listing @E -->
 
</main>
@else
<main class="course-page-wrap d-flex justify-content-center align-items-center">
    <h4>You Don't have access to this page!</h4>
</main>
@endrole
@endsection