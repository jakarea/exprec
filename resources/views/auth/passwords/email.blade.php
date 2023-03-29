@extends('layouts.auth')

@section('title')
Reset Password
@endsection

@section('content')
<!-- ====== password reset page content start ====== -->
<section class="login-section">
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6">
        <div class="login-form-wrap">
            <h1>{{ __('Reset Password') }} </h1> 
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form method="POST" action="{{ route('password.email') }}">
                @csrf 
                <div class="form-group">
                    <label for="email">{{ __('Email Address') }}</label>
                    <input type="email" placeholder="Enter Email" class="form-control @error('email') is-invalid @enderror" name="email" autocomplete="email" autofocus id="email" value="{{ old('email') }}">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>  
      
                    <div class="form-bttn">
                        <button type="submit" class="btn btn-submit"> {{ __('Send Password Reset Link') }}</button>
                    </div>
                </form> 
            </div>
        </div>
    </div>
</div>
</section>
<!-- ====== password reset page content end ====== -->
@endsection

@section('script') @endsection