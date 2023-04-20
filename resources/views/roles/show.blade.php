@extends('layouts.admin')
@section('title') Admin - Role Show @endsection
@section('content') 
<main class="course-page-wrap">  

     <!-- user header area @S -->
     <div class="product-filter-wrapper">
        <form action="" method="GET">
            <div class="product-filter-box">
                <h5>Show Role</h5> 
                <div class="form-grp-btn mt-4 ms-auto">
                    <a href="{{ route('roles.index') }}" class="btn me-3">All Roles</a> 
                </div>
            </div>
        </form>
    </div>
    <!-- user header area @E --> 

    <!-- user listing @S -->
    <div class="row justify-content-center">
        <div class="col-lg-7 col-md-9 col-sm-11 col-12">
            <div class="productss-list-box"> 
                <table>
                    <tr> 
                        <th > Name </th> 
                        <td>:</td>
                        <td class="text-start">{{ $role->name }}</td>  
                    </tr>  
                    <tr> 
                        <th style="background: #dfe5f1;"> Permissions </th>  
                        <td>:</td>
                        <td class="text-start">
                        @if(!empty($rolePermissions))
                            @foreach($rolePermissions as $v)
                                <label class="badge text-bg-primary">{{ $v->name }}</label>
                            @endforeach
                        @endif
                        </td> 
                    </tr>
                </table> 
            </div>
        </div>
    </div>
    <!-- user listing @E -->
 

</main>
@endsection