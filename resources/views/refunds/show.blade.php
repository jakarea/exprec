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
                    @if($refund->user->thumbnail)
                    <img src="{{ asset('assets/images/user/'.$refund->user->thumbnail) }}" alt="{{$refund->user->name}}"
                        class="img-fluid">
                    @else
                    <span>{!! strtoupper($refund->user->name[0]) !!}</span>
                    @endif
                    </div>
                    <div class="role-label"> 
                    @if($refund->user)
                        @if(!empty($refund->user->getRoleNames()))
                            @foreach($refund->user->getRoleNames() as $v)
                            <span class="badge rounded-pill bg-dark">{{ $v }}</span>
                            @endforeach
                        @endif
                    @else
                        <span class="badge rounded-pill bg-dark">No Role</span>
                    @endif
                    </div>
                </div>
                <div class="text-center">
                    <h3>{{ $refund->user->name }}</h3>
                    <!-- details box @S -->
                    <div class="form-group mt-3 mb-1 ">
                        <label for=""><i class="fa-brands fa-cc-stripe"></i> Stripe ID: </label>
                        <code>{{ $refund->user->stripe_id }}</code>
                    </div>
                    <!-- details box @E -->
                    <div class="form-group mb-0 ">
                        <label for=""><i class="fa-solid fa-envelope"></i> Email: </label>
                        <p>{{ $refund->user->email }}</p>
                    </div> 
                </div>  
            </div>
        </div>

        <div class="col-lg-8">
            <div class="productss-list-box subscription-table mb-3">
                <h5 class="p-3 pb-0">Refund Reason</h5>
                <div class="refund-reason p-3">
                    <p>{{ __($refund->reason) }}</p>
                </div>
                <div class="refund-action text-end">
                @if($refund->status == 'pending')
                    @if($refund->type == 'refund')
                    <a href="{{ route('refund.approve',  $refund->charge_id) }}" class="btn btn-success">Approve Refund</a>
                    <a href="{{ route('refund.reject',  $refund->charge_id) }}" class="btn btn-danger">Reject Refund</a>
                    @else
                    <a href="{{ route('refund.CancelSubscription',  $refund->charge_id) }}" class="btn btn-success">Approve Cancel Subscription</a>
                    <a href="{{ route('refund.reject',  $refund->charge_id) }}" class="btn btn-danger">Reject Subscription</a>
                    @endif
                @elseif($refund->status == 'approved')
                    <a href="#" class="btn btn-success">Already Approved</a>
                @elseif($refund->status == 'declined')
                    <a href="#" class="btn btn-danger">Already Rejected</a>
                @endif
                </div>
            </div>
            @if( count ($subscription->refunds) > 0)
            <div class="productss-list-box subscription-table">
                <h5 class="p-3 pb-0">Refund History</h5>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Refund ID</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($subscription->refunds as $refund)
                            <tr>
                                <td>{{ $refund->id }}</td>
                                <td>$ {{ $refund->amount / 100 }}</td>
                                <td>{{ $refund->status }}</td>
                                <td>{{ date('M d, Y', $refund->created) }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            @endif
        </div>
    </div>
</main>
@endsection