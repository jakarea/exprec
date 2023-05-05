@extends('layouts.admin')
@section('title') Admin - Refund Details @endsection

@section('style')
<link href="{{ asset('assets/css/profile.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<main class="course-page-wrap">
    <!-- user header area @S -->
    <div class="product-filter-wrapper my-0">
        <div class="product-filter-box mt-0">
            <div class="password-change-txt">
                <h1 class="mb-1">Refund Details</h1>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="form-grp-btn mt-0 ms-auto">
                <a href="{{ url('refund') }}" class="btn"><i class="fas fa-list me-2"></i> All Refund</a>
            </div>
        </div>
    </div>
    <!-- user header area @E -->
    <div class="row">
        @if(session('success'))
        <div class="col-12">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
        @endif  
        <div class="col-lg-4">
            <div class="change-password-form w-100 customer-profile-info">
                <div class="set-profile-picture">
                    <div class="media justify-content-center"> 
                        <img src="{{ asset('assets/images/user/akram-hossain.png') }}" alt="a" class="img-fluid"> 
                    </div>
                    <div class="role-label"> 
                        <span class="badge rounded-pill bg-dark">Admin</span>
                    </div>
                </div>
                <div class="text-center">
                    <h3>Jhon Doe</h3>
                    <!-- details box @S -->
                    <div class="form-group mt-3 mb-1 ">
                        <label for=""><i class="fa-brands fa-cc-stripe"></i> Stripe ID: </label>
                        <code>1234567</code>
                    </div>
                    <!-- details box @E -->
                    <div class="form-group mb-0 ">
                        <label for=""><i class="fa-solid fa-envelope"></i> Email: </label>
                        <p>jhondoe@mail.com</p>
                    </div> 
                </div>  
            </div>
        </div>

        <div class="col-lg-8">
            <div class="productss-list-box subscription-table">
                <h5 class="p-3 pb-0">Refund Details</h5>
                <table>
                    <tr>
                        <th width="5%" class="text-start">No</th>
                        <th>Customer</th>
                        <th>Status</th> 
                        <th>Actions</th> 
                    </tr> 
                </table>
            </div>
        </div>
    </div>
</main>
@endsection