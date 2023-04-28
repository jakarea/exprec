@extends('layouts.auth')

@section('title')
Subscription
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <h5 class="mt-5">Select Plane:</h5>
            <hr>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="row">
                @foreach($plans as $plan)
                <div class="col-4">
                    <div class="card mt-5 text-center">
                        <div class="card-header"> 
                        {{ $plan->name }}
                        </div>
                        <div class="card-body"> 
                            <h5 class="card-title">${{ $plan->price }}/Mo</h5>
                            <ul>
                                <li>
                                    <i class="fa fa-check"></i> Unlimited Adwords 
                                </li>
                                <li>
                                    <i class="fa fa-check"></i> Unlimited Keywords
                                </li>
                                <li>
                                    <i class="fa fa-check"></i> Unlimited Queries
                                </li>
                                <li>
                                    <i class="fa fa-check"></i> Unlimited Users
                                </li>
                                <li>
                                    <i class="fa fa-check"></i> Unlimited Reports
                                </li>
                                <li>
                                    <i class="fa fa-check"></i> Unlimited Support
                                </li>
                                <li class="text-mute">
                                    <i class="fa fa-times"></i> Unlimited Adwords
                                </li>
                                <li class="text-mute">
                                    <i class="fa fa-times"></i> Unlimited Adwords
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer">
                        <a href="{{ route('plans.checkout', $plan->id) }}" class="btn btn-primary pull-right">Purchase Now</a>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
        </div>
    </div>
</div>
@endsection