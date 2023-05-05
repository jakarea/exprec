@extends('layouts.admin')
@section('title') Admin - Customer Details @endsection

@section('style')
<link href="{{ asset('assets/css/profile.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<main class="course-page-wrap">
    <!-- user header area @S -->
    <div class="product-filter-wrapper my-0">
        <div class="product-filter-box mt-0">
            <div class="password-change-txt">
                <h1 class="mb-1">Subscriptions Details</h1>
                <p>This is <span class="text-danger"> <a href="{{ route('customers.show', $subscription->user->id) }}" class="text-danger">{{ $subscription->customer->name }}</a></span>   subscriptions page.</p>
            </div>
            <div class="form-grp-btn mt-0 ms-auto">
                <a href="{{ url('subscriptions') }}" class="btn me-3">All Subscriptions</a>
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
        <div class="col-3">
            <div class="change-password-form w-100 customer-profile-info">
                <div class="set-profile-picture">
                    <div class="media justify-content-center">
                        <span>{!! strtoupper($subscription->customer->name[0]) !!}</span> 
                    </div>
                    <div class="role-label">
                        @if($subscription->user)
                            @if(!empty($subscription->user->getRoleNames()))
                                @foreach($subscription->user->getRoleNames() as $v)
                                <span class="badge rounded-pill bg-dark">{{ $v }}</span>
                                @endforeach
                            @endif
                        @else
                            <span class="badge rounded-pill bg-dark">No Role</span>
                        @endif
                    </div>
                    <div class="text-center">
                        <h3>{{ $subscription->customer->name }} </h3>
                        <!-- details box @S -->
                        <div class="form-group mt-3 mb-1 ">
                            <label for=""><i class="fa-brands fa-cc-stripe"></i> Stripe ID: </label>
                            <code>{{ $subscription->customer->id }}</code>
                        </div>
                        <!-- details box @E -->
                        <div class="form-group mb-0 ">
                            <label for=""><i class="fa-solid fa-envelope"></i> Email: </label>
                            <p>{{ $subscription->customer->email }}</p>
                        </div>
                        <!-- Current period -->
                        <div class="form-group mb-0 ">
                            <label for=""><i class="fa-solid fa-calender"></i> Current Period: </label>
                            <p>{{ date('M d, Y h:m a', $subscription->current_period_start) }} - {{ date('M d, Y h:m a', $subscription->current_period_end) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-9">
            <div class="productss-list-box mt-5">
                <h6>Subscription Details</h6>
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
                    <tr>
                        <td>{{ $subscription->id }}</td>
                        <td>{{ $subscription->customer->email }}</td>
                        <td>{{ $subscription->status }}</td>
                        <td>
                            @if($subscription->collection_method == 'charge_automatically')
                            <span class="badge bg-success">Auto</span>
                            @else
                            <span class="badge bg-danger">Manual</span>
                            @endif
                        </td>
                        <td>{{ $subscription->product->name }}</td>
                        <td>$ {{ $subscription->plan->amount / 100 }}</td>
                        <td>
                            {{ date('M d, Y h:m a', $subscription->created) }}
                        </td>
                        <td>
                            @if ( $subscription->refund )
                            @foreach($subscription->refund as $refund)
                                @if($refund->status == 'succeeded')
                                <a href="#" class="btn btn-sm btn-danger">Refunded</a>
                                @else
                                <a href="{{ route('subscriptions.refunds', $subscription->invoice->charge) }}" class="btn btn-primary btn-sm">Refund</a>
                                @endif
                            @endforeach
                            @else
                            <a href="{{ route('subscriptions.refunds', $subscription->invoice->charge) }}" class="btn btn-primary btn-sm">Refund</a>
                            @endif
                        </td>

                    </tr>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection