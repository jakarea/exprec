@extends('layouts.admin')
@section('title') Admin - Refund List @endsection

@section('style')
<link href="{{ asset('assets/css/common.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
@role("Admin")
<main class="product-research-page-wrap">

    <!-- session message @S -->
    @include('partials/session-message')
    <!-- session message @E -->

    <!-- Customers header area @S -->
    <div class="product-filter-wrapper mt-0">
        <div class="product-filter-box mt-0">
            <h5>Refund Management</h5>
            <div class="form-grp-btn mt-4 ms-auto">
                <a href="{{ url('/') }}" class="btn me-3"><i class="fas fa-list me-2"></i> Dashboard</a>
            </div>
        </div>
    </div>
    <!-- Customers header area @E -->

    <!-- Customers listing @S -->
    <div class="row">
        <div class="col-12">
            <div class="productss-list-box">
                <table>
                    <thead>
                        <tr>
                            <th>Customer Name</th>
                            <th>Customer Email</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Refund Status</th>
                            <th>Refund Date</th>
                            <th>Actions</th>
                        </tr>
                        
                    </thead>
                    <tbody>
                        @foreach ($refunds as $refund)
                        <tr>
                            <td>{{ $refund->user->name }}</td>
                            <td>{{ $refund->user->email }}</td>
                            <td>{{ $refund->product_name }}</td>
                            <td>$ {{ $refund->amount }}</td>
                            <td>{{ $refund->status }}</td>
                            <td>{{ $refund->created_at }}</td>
                            <td>
                                <a href="{{ route('refund.show', $refund->id) }}" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                                <form action="{{ route('refund.delete', $refund->id) }}" method="POST" class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- <p class="p-4 text-center">No Refund Found!</p> --}}
            </div>
        </div>
    </div>
    <!-- Customers listing @E -->
 
</main>
@else
<main class="course-page-wrap d-flex justify-content-center align-items-center">
    <h4>You Don't have access to this page!</h4>
</main>
@endrole
@endsection