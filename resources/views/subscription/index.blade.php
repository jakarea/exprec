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
                    <a href="{{ url('/') }}" class="btn me-3">Dashboard</a>
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
                        <td>
                            {{ date('M d, Y h:m a', $subscription->created) }}
                        </td>
                        <td>
                            <a href="{{ url('subscription/'.$subscription->id.'/edit') }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ url('subscription/'.$subscription->id) }}" method="POST" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this subscription?');">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
                @else
                <p class="p-4 text-center">No Potential Customers Found!</p>
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