@extends('layouts.admin')
@section('title') Admin - Subscription Plan List @endsection
@section('content')
@role("Admin")
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
                    <a href="{{ url('/subscriptions') }}" class="btn me-3">Subscriptions</a>
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
                            <a href="{{ route('subscriptions.show', $subscription->id) }}" class="btn btn-primary btn-sm">View</a>
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
@else
<main class="course-page-wrap d-flex justify-content-center align-items-center">
    <h4>You Don't have access to this page!</h4>
</main>
@endrole
@endsection