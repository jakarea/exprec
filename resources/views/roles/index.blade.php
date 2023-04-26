@extends('layouts.admin')
@section('title') Admin - Roles List @endsection
@section('content') 
@role("Admin")
<main class="course-page-wrap">
    <!-- session message @S -->
    @include('partials/session-message')
    <!-- session message @E -->

    <!-- user role header area @S -->
    <div class="product-filter-wrapper">
        <form action="" method="GET">
            <div class="product-filter-box">
                <h5>Role Management</h5> 
                <div class="form-grp-btn mt-4 ms-auto">
                    @can('role-create')
                    <a href="{{ route('roles.create') }}" class="btn me-3"> Create Role</a>
                    @endcan
                </div>
            </div>
        </form>
    </div>
    <!-- user role header area @E --> 

    <!-- user role listing @S -->
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-9 col-sm-10 col-12">
            <div class="productss-list-box">
                @if(count($roles) > 0)
                <table>
                    <tr>
                    <th width="5%">
                        No
                    </th>
                    <th>
                       Role Name
                    </th> 
                    <th>
                        Actions
                    </th>
                    </tr>
                    <!-- user item start -->
                    @foreach($roles as $key => $role)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $role->name }}</td>
                        <td>
                            <div class="action-bttn">
                                <a href="{{ route('roles.show',$role->id) }}"><i class="fas fa-eye text-info me-2"></i></a>
                                    @can('role-edit')
                                        <a href="{{ route('roles.edit',$role->id) }}"><i class="fas fa-pen text-primary me-2"></i></a>
                                    @endcan
                                    @can('role-delete')
                                        {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                                            {!! Form::submit('X', ['class' => 'btn btn-danger']) !!}
                                        {!! Form::close() !!}
                                    @endcan
                            </div> 
                        </td>
                    </tr>
                    @endforeach
                    <!-- user item end -->  
                </table>
                {!! $roles->render() !!}
                @else 
                <p class="p-4 text-center">No User Role Found!</p>
                @endif
            </div>
        </div>
    </div>
    <!-- user role listing @E -->

    <!-- user pagginate @S -->
    <div class="row">
        <div class="col-12">
            <div class="pagginate-wrap">
            {{ $roles->links('pagination::bootstrap-5') }}
            </div>
        </div>
        </div>
        <!-- user pagginate @E -->

</main>
@else
<main class="course-page-wrap d-flex justify-content-center align-items-center">
    <h4>You Don't have access to this page!</h4>
</main>
@endrole
@endsection