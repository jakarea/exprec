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
                @role("Admin")
                <a href="{{ url('subscriptions') }}" class="btn me-3">All Subscriptions</a>
                @else
                <a href="{{ route('customer.subscriptions.index') }}" class="btn me-3">My Subscriptions</a>
                @endrole
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
                        <th>Status</th>
                        <th>Billing</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Created</th>
                        <th>Actions</th>

                    </tr>
                    <tr>
                        <td>{{ $subscription->id }}</td>
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
                                <!-- <a href="{{ route('subscriptions.refunds', $subscription->invoice->charge) }}" class="btn btn-primary btn-sm">Refund</a> -->
                                <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Refund</a>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#CancelSubscription" class="btn btn-sm btn-danger">Cancel Subscription</a>
                                @endif
                            @endforeach
                            @else
                            <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Refund</a>
                            <a data-bs-toggle="modal" data-bs-target="#CancelSubscription" href="#" class="btn btn-sm btn-danger">Cancel Subscription</a>
                            @endif
                        </td>

                    </tr>
                </table>
                <div>                    
                    <!-- Modal Refunds-->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title" id="staticBackdropLabel">Refunds Supscription</h6>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="{{ route('refund.store') }}" method="POST" id="subscriptionCancelRequest">
                                    @csrf
                                    <div class="modal-body">
                                        <!-- Design form for refunds or cancel subscription -->
                                        
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="reason">What is the reason?</label>
                                                        <textarea name="reason" id="reason" cols="30" rows="5" class="form-control"></textarea>
                                                        <input type="hidden" name="charge_id" value="{{ $subscription->invoice->charge }}">
                                                        <input type="hidden" name="amount" value="{{ $subscription->plan->amount / 100 }}">
                                                        <input type="hidden" name="product_name" value="{{ $subscription->product->name }}">
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Send request</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Cancel-->
                    <div class="modal fade" id="CancelSubscription" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="CancelSubscriptionLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title" id="CancelSubscriptionLabel">Subscription Cancel</h6>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="{{ route('refund.cancel') }}" method="POST">
                                    @csrf
                                    <div class="modal-body">
                                        <!-- Design form for refunds or cancel subscription -->
                                        
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="reason">What is the reason?</label>
                                                        <textarea name="reason" id="reason" cols="30" rows="5" class="form-control"></textarea>
                                                        <input type="hidden" name="charge_id" value="{{ $subscription->invoice->charge }}">
                                                        <input type="hidden" name="amount" value="{{ $subscription->plan->amount / 100 }}">
                                                        <input type="hidden" name="product_name" value="{{ $subscription->product->name }}">
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Send request</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <table>
            <!-- <tr>
                <td>Refund</td>
                <td colspan="7">
                    @if($subscription->refund)
                        @foreach($subscription->refund as $refund)
                            <p>
                                Refund Id: {{ $refund->id }}<br>
                                Amount: ${{ $refund->amount / 100 }}<br>
                                Reason: {{ $refund->reason }}<br>
                                Status: {{ $refund->status }}
                            </p>
                        @endforeach
                    @else
                        <p>No refunds for this subscription.</p>
                    @endif
                </td>
            </tr> -->

            </table>
            @php
                $refunds = App\Models\Refund::where('charge_id', $subscription->invoice->charge)->get();
            @endphp
            @if ( count($refunds) > 0 )
            <div class="productss-list-box mt-5">
                <h6>Refunds / Cancel Details</h6>
                <table>
                    <tr>
                        <th>Customer Name</th>
                        <th>Customer Email</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Refund Status</th>
                        <th>Refund Date</th>
                    </tr>
                    @foreach ($refunds as $refund)
                    <tr>
                        <td>{{ $refund->user->name }}</td>
                        <td>{{ $refund->user->email }}</td>
                        <td>{{ $refund->product_name }}</td>
                        <td>$ {{ $refund->amount }}</td>
                        <td>
                            @if($refund->status == 'approved')
                            <span class="badge bg-success">Refunded</span>
                            @elseif($refund->status == 'declined')
                            <span class="badge bg-danger">Declined</span>
                            @else
                            <span class="badge bg-danger">Pending</span>
                            @endif
                        </td>
                        <td>{{ date('M d, Y h:m a', $refund->created) }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
            @endif
        </div>
    </div>
</main>
@endsection

@section('script')
<script>
    jQuery(document).ready(function($){
        $('#subscriptionCancelRequest').submit(function(e){
            e.preventDefault();
            var form = $(this);
            var url = form.attr('action');
            var type = form.attr('method');
            var data = form.serialize();
            $.ajax({
                url: url,
                type: type,
                data: {data: data, _token: '{{ csrf_token() }}'},
                dataType: 'json',
                // beefore send change button text and disable and add spinner
                beforeSend: function(){
                    $('#subscriptionCancelRequest button[type="submit"]').html('<i class="fa fa-spinner fa-spin"></i> Please wait...').attr('disabled', true);
                },
                success: function(response){
                    if(response.status == 'success'){
                        $('#staticBackdrop').modal('hide');
                        toastr.success(response.message);
                        setTimeout(function(){
                            window.location.reload();
                        }, 1000);
                    }else{
                        toastr.error(response.message);
                    }
                }
            });
        });
    });
</script>
@endsection