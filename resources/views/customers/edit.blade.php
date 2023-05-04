@extends('layouts.admin')
@section('title') User - Profile Edit @endsection
@section('style')
<link href="{{ asset('assets/css/product-researchs.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/profile.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')

<!-- === user edit page @S === -->
<main class="product-research-form">
  <div class="product-research-create-wrap">
    <div class="row">
      <div class="col-lg-12">
        <div class="create-form-wrap">
          <div class="create-form-head">
            <h6>Edit your profile</h6>
            <a href="{{ url('/') }}">
              <i class="fa-solid fa-list"></i> Dashboard </a>
            </a>
          </div>
          <!-- user edit form @S -->

          <!-- error message @S -->
          @if (count($errors) > 0)
          <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif
          <!-- error message @E -->

          {!! Form::model($user, ['method' => 'POST', 'enctype' => 'multipart/form-data', 'class' =>
          'create-form-box','route' => ['customers.update', $user->id]]) !!}

          <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="name">Name <sup class="text-danger">*</sup></label>
                    {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="email">Email <sup class="text-danger">*</sup></label>
                    {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="password">Password <sup class="text-danger">*</sup></label>
                    {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="password">Confirm Password <sup class="text-danger">*</sup></label>
                    {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' =>
                    'form-control')) !!}
                  </div>
                </div>

              </div> <!-- row end -->
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col-lg-4">
              <div class="file-wrapper">
                <input type="file" name="thumbnail" accept="image/*" />
                <div class="close-btn"><i class="fas fa-close"></i></div>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="submit-bttns">
                <button type="reset" class="btn btn-reset">Clear</button>
                <button type="submit" class="btn btn-submit">Submit</button>
              </div>
            </div>
          </div>
          {!! Form::close() !!}
          <!-- user edit form @E -->
        </div>
      </div>
    </div>
  </div>
</main>
<!-- === user edit page @E === -->

@endsection

@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
  $('input[name="thumbnail"]').on('change', function(){
  readURL(this, $('.file-wrapper'));   
});

$('.close-btn').on('click', function(){  
   let file = $('input[name="thumbnail"]');
   $('.file-wrapper').css('background-image', 'unset');
   $('.file-wrapper').removeClass('file-set');
   file.replaceWith( file = file.clone( true ) );
});

//FILE
function readURL(input, obj){
  if(input.files && input.files[0]){
    var reader = new FileReader();
    reader.onload = function(e){
      obj.css('background-image', 'url('+e.target.result+')');
      obj.addClass('file-set');
    }
    reader.readAsDataURL(input.files[0]);
  }
};
</script>
@endsection