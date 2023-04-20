@extends('layouts.admin')
@section('title') Admin - Lesson List @endsection
@section('content') 
<main class="course-page-wrap">

    <!-- user header area @S -->
    <div class="product-filter-wrapper">
        <form action="" method="GET">
            <div class="product-filter-box">
                <h5>Show User</h5> 
                <div class="form-grp-btn mt-4 ms-auto">
                    <a href="{{ route('users.index') }}" class="btn me-3">All Users</a> 
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
                        <td class="text-start">{{ $user->name }}</td>  
                    </tr> 
                    <tr>
                        <th style="background: #dfe5f1;"> Email  </th> 
                        <td>:</td>
                        <td class="text-start">{{ $user->email }}</td> 
                    </tr>
                    <tr> 
                        <th> Role </th>  
                        <td>:</td>
                        <td class="text-start">
                            @if(!empty($user->getRoleNames()))
                                @foreach($user->getRoleNames() as $v)
                                    <span class="badge rounded-pill bg-dark">{{ $v }}</span>
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