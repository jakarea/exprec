@extends('layouts.admin')
@section('title') Admin - Create Roles @endsection
@section('style') 
<link href="{{ asset('assets/css/product-researchs.css') }}" rel="stylesheet" type="text/css" />  
@endsection
@section('content')  

<!-- === user role create page @S === -->
<main class="product-research-form"> 
 <div class="product-research-create-wrap">
   <div class="row">
     <div class="col-lg-12">
       <div class="create-form-wrap">
         <div class="create-form-head">
           <h6>Create New Role</h6>
           <a href="{{ route('roles.index') }}"> 
            <i class="fa-solid fa-list"></i> All Roles </a>
           </a> 
         </div>
        <!-- user role create form @S -->
        
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

        {!! Form::open(array('route' => 'roles.store','method'=>'POST','class' => 'create-form-box')) !!}
           
          <div class="row">
             <div class="col-12 col-sm-12 col-md-12 col-lg-12">
               <div class="row"> 
                 <div class="col-md-12">
                   <div class="form-group">
                     <label for="name">Role Name <sup class="text-danger">*</sup></label>
                     {!! Form::text('name', null, array('placeholder' => 'Enter Name','class' => 'form-control')) !!}
                   </div>
                 </div>
                 <div class="col-md-12">
                   <div class="form-group">
                     <label for="email">Permission <sup class="text-danger">*</sup></label>
                     <div class="row">
                        @foreach($permission as $value) 
                        <div class="col-md-6 col-lg-4">
                            <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                            {{ $value->name }}</label>
                        </div> 
                        @endforeach
                    </div> 
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
        <!-- user role create form @E -->
       </div>
     </div>
   </div>
 </div> 
</main>
<!-- === user role create page @E === -->

@endsection