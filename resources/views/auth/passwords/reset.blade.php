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
            <form method="POST" action="{{ route('password.update') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="form-group">
                    <label for="email">{{ __('Email Address') }}</label>
                    <input type="email" placeholder="Enter Email" class="form-control @error('email') is-invalid @enderror" name="email" autocomplete="email" autofocus id="email" value="{{ $email ?? old('email') }}">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password-field">{{ __('Password') }}</label> 

                    <input id="password-field" placeholder="*******" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">
                     

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror 
                    <i class="fa-regular fa-eye" onclick="changeType()" id="eye-click"></i>
                </div>
                <div class="form-group">
                    <label for="password-field">{{ __('Confirm Password') }}</label> 

                    <input id="password-confirm" placeholder="*******" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror 
                    <i class="fa-regular fa-eye" onclick="changeType()" id="eye-click"></i>
                </div> 
      
                <div class="form-bttn">
                    <button type="submit" class="btn btn-submit">{{ __('Reset Password') }}</button>
                </div>
                </form> 
            </div>
        </div>
    </div>
</div>
</section>
<!-- ====== password reset page content end ====== -->
@endsection

@section('script')
<script>

    function changeType() {
      var field = document.getElementById("password-field");
      var clickk = document.getElementById("eye-click");

      if (field.type === "password") {
        field.type = "text";
        clickk.classList.add('fa-eye-slash');
        clickk.classList.remove('fa-eye');
      } else {
        field.type = "password";
        clickk.classList.remove('fa-eye-slash');
        clickk.classList.add('fa-eye');
      }

    }

    function changeType2() {
      let field = document.getElementById("password-confirm");
      let clickk = document.getElementById("eye-click2");

      if (field.type === "password") {
        field.type = "text";
        clickk.classList.add('fa-eye-slash');
        clickk.classList.remove('fa-eye');
      } else {
        field.type = "password";
        clickk.classList.remove('fa-eye-slash');
        clickk.classList.add('fa-eye');
      }

    }
  </script>
@endsection