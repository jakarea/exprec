@extends('layouts.admin')
@section('title') Admin - Lesson List @endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <div class="card mt-5">
                <div class="card-header">Select Plane:</div>
 
                <div class="card-body">
 
                    <div class="row">
                        @foreach($plans as $plan)
                            <div class="col-md-6">
                                <div class="card mb-3">
                                  <div class="card-header"> 
                                        ${{ $plan->price }}/Mo
                                  </div>
                                  <div class="card-body">
                                    <h5 class="card-title">{{ $plan->name }}</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  
                                    <a href="{{ route('plans.show', $plan->slug) }}" class="btn btn-primary pull-right">Choose</a>
  
                                  </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection