@extends('layouts.admin')
@section('title') Admin - Users List @endsection
@section('content') 
<main class="course-page-wrap ">
    <!-- session message @S -->
    @include('partials/session-message')
    <!-- session message @E -->

    <!-- user header area @S -->
    <div class="product-filter-wrapper">
        <form action="" method="GET">
            <div class="product-filter-box">
                <h5>Users Management</h5> 
                <div class="form-grp-btn mt-4 ms-auto">
                    <a href="{{ route('users.create') }}" class="btn me-3">Create User</a> 
                </div>
            </div>
        </form>
    </div>
    <!-- user header area @E --> 

    <!-- user listing @S -->
    <div class="row">
        <div class="col-12">
            <div class="productss-list-box">
                @if(count($data) > 0)
                <table>
                    <tr>
                    <th width="5%">
                        No
                    </th>
                    <th>
                        Name
                    </th>
                    <th>
                        Email
                    </th>
                    <th>
                        Role
                    </th> 
                    <th>
                        Actions
                    </th>
                    </tr>
                    <!-- user item start -->
                    @foreach($data as $key => $user)
                    <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @if(!empty($user->getRoleNames()))
                        @foreach($user->getRoleNames() as $v)
                        <span class="badge text-bg-info">{{ $v }}</span>
                        @endforeach
                        @endif
                    </td>
                    <td>
                        <div class="action-bttn">
                        <a href="{{ route('users.show',$user->id) }}"><i class="fas fa-eye text-info me-2"></i></a>
                        <a href="{{ route('users.edit',$user->id) }}"><i class="fas fa-pen text-primary me-2"></i></a>
                        {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('X', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                        </div>
                    
                    </td>
                    </tr>
                    @endforeach
                    <!-- user item end -->  
                </table>
                {!! $data->render() !!}
                @else 
                <p class="p-4 text-center">No User Found!</p>
                @endif
            </div>
        </div>
    </div>
    <!-- user listing @E -->

    <!-- user pagginate @S -->
    <div class="row">
    <div class="col-12">
        <div class="pagginate-wrap">
        {{ $data->links('pagination::bootstrap-5') }}
        </div>
    </div>
    </div>
    <!-- user pagginate @E -->

</main>
@endsection