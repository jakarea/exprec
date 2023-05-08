@extends('layouts.admin')
@section('title') Admin - Subscription Details @endsection

@section('style')
<link href="{{ asset('assets/css/profile.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/common.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<main class="course-page-wrap">
    <!-- session message @S -->
    @include('partials/session-message')
    <!-- session message @E -->

    <!-- Customers header area @S -->
    <div class="product-filter-wrapper mt-0">
        <form action="" method="GET">
            <div class="product-filter-box mt-0">
                <h5>Subscription Management</h5>
                <div class="form-grp-btn mt-4 ms-auto">
                    <a href="{{ url('/') }}" class="btn me-3"><i class="fas fa-list me-2"></i> Dashboard</a>
                </div>
            </div>
        </form>
    </div>
    <!-- Customers header area @E -->
    <div class="row">
        <div class="col-12">
            <div class="productss-list-box">
                @if( !empty($subscriptions) && count($subscriptions) > 0)
                    <table>
                        <tr>
                            <th width="5%">No</th>
                            <th>Avatar</th>
                            <th>Customer</th>
                            <th>Status</th>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Created</th>
                            <th>Actions</th>
                        </tr>
                        <tr>
                            <td>{{ '1' }}</td>
                            <td>
                                <div class="table-avatar">
                                    @if($subscriptions->user->thumbnail)
                                    <img src="{{ asset('assets/images/user/'.$subscriptions->user->thumbnail) }}" alt="{{$subscriptions->user->name}}" class="img-fluid">
                                    @else 
                                        <span>{!! strtoupper($subscriptions->user->name[0]) !!}</span> 
                                    @endif
                                </div>
                            </td>
                            <td>{{ $subscriptions->user->email }}</td>
                            <td><span class="badge text-bg-success">{{ $subscriptions->status }}</span></td>
                            <td>{{ $subscriptions->plan->product->name }}</td>
                            <td>$ {{ $subscriptions->plan->amount / 100 }}</td>
                            <td>{{ date('M d, Y', $subscriptions->created) }}</td>
                            <td>
                                <a href="{{ route('subscriptions.show', $subscriptions->id) }}" class="btn btn-table">View</a>
                            </td>
                        </tr>
                    </table>
                @else
                    <div class="alert alert-danger">No subscription found!</div>
                @endif
            </div>
        </div>
    </div>
</main>
@endsection