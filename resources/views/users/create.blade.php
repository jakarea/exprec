@extends('layouts.admin')
@section('title') Admin - User Create @endsection
@section('style') 
<link href="{{ asset('assets/css/product-researchs.css') }}" rel="stylesheet" type="text/css" />  
@endsection

@section('content') 
<!-- === user create page @S === -->
<main class="product-research-form"> 
 <div class="product-research-create-wrap">
   <div class="row">
     <div class="col-lg-12">
       <div class="create-form-wrap">
         <div class="create-form-head">
           <h6>Create New User</h6>
           <a href="{{ route('users.index') }}"> 
            <i class="fa-solid fa-list"></i> All Users </a>
           </a> 
         </div>
        <!-- user create form @S -->
        
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

        {!! Form::open(array('route' => 'users.store','method'=>'POST','class' => 'create-form-box')) !!} 
           
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
                     {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
                   </div>
                 </div>   
                 <div class="col-md-12">
                   <div class="form-group">
                     <label for="password">Select Role <sup class="text-danger">*</sup></label>
                     {!! Form::select('roles[]', $roles,[], array('class' => 'form-control')) !!}
                   </div>
                 </div>   
               </div> <!-- row end -->
             </div>
           </div>
           <div class="row"> 
             <div class="col-12">
               <div class="submit-bttns">
                 <button type="reset" class="btn btn-reset">Clear</button>
                 <button type="submit" class="btn btn-submit">Submit</button>
               </div>
             </div>
           </div>
           {!! Form::close() !!}
        <!-- user create form @E -->
       </div>
     </div>
   </div>
 </div> 
</main>
<!-- === user create page @E === -->

@endsection