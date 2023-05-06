@extends('layouts.admin')
@section('title') Admin - Subscription Plan List @endsection

@section('style')
<link href="{{ asset('assets/css/common.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<main class="product-research-page-wrap">

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

    <!-- Customers listing @S -->
    <div class="row">
        <div class="col-12">
            <div class="productss-list-box">
                @if(count($subscriptions_paginated) > 0)
                <table>
                    <tr>
                        <th width="5%">No</th>
                        <th>Avatar</th>
                        <th>Customer</th>
                        <th>Status</th>
                        <th>Billing</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Created</th>
                        <th>Actions</th>

                    </tr>
                    @foreach($subscriptions_paginated as $key => $subscription)

                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>
                            <div class="table-avatar">
                                @if($subscription->customer->thumbnail)
                                <img src="{{ asset('assets/images/user/'.$subscription->customer->thumbnail) }}" alt="{{$subscription->customer->name}}" class="img-fluid">
                                @else 
                                    <span>{!! strtoupper($subscription->customer->name[0]) !!}</span> 
                                @endif
                            </div>
                        </td>
                        <td>{{ $subscription->customer->email }}</td>
                        <td>{{ $subscription->status }}</td>
                        <td>
                            @if($subscription->collection_method == 'charge_automatically')
                            <span class="badge bg-success">Auto</span>
                            @else
                            <span class="badge bg-danger">Manual</span>
                            @endif
                        </td>
                        <td>{{ $subscription->plan->product->name }}</td>
                        <td>$ {{ $subscription->plan->amount / 100 }}</td>
                        <td>
                            {{ date('M d, Y h:m a', $subscription->created) }}
                        </td>
                        <td>
                            <a href="{{ route('subscriptions.show', $subscription->id) }}" class="btn btn-table">View</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
                @else
                <p class="p-4 text-center">No Subscriptions Found!</p>
                @endif
            </div>
        </div>
    </div>
    <!-- Customers listing @E -->

    <!-- Customers pagginate @S -->
    <div class="row">
        <div class="col-12">
            <div class="pagginate-wrap">
                {{ $subscriptions_paginated->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
    <!-- Customers pagginate @E -->
</main>
@endsection