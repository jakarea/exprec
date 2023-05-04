@extends('layouts.admin')
@section('title') Admin - Customer List @endsection
@section('content')
@role("Admin")
<main class="product-research-page-wrap">

    <!-- session message @S -->
    @include('partials/session-message')
    <!-- session message @E -->

    <!-- Customers header area @S -->
    <div class="product-filter-wrapper mt-0">
        <form action="" method="GET">
            <div class="product-filter-box mt-0">
                <h5>Customers Management</h5>
                <div class="form-grp-btn mt-4 ms-auto">
                    <a href="{{ url('/') }}" class="btn me-3">Dashboard</a>
                </div>
            </div>
        </form>
    </div>
    <!-- Customers header area @E -->

    <!-- Customers listing @S -->
    <div class="row">
        <div class="col-12">
            <div class="productss-list-box">
                @if(count($customers) > 0)
                <table>
                    <tr>
                        <th width="5%">No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Actions</th>

                    </tr>
                    <!-- task item start -->

                    @foreach($customers as $key => $customer)
                    <tr>
                        <td>{{ $key +1 }}</td>
                        <td>{{ __($customer->name) }}</td>
                        <td>{{ __($customer->email) }}</td>
                        <td>
                            <label class="badge badge-success bg-success">{{ $customer->hasRole('Customer') ? 'Customer'
                                : 'Not a customer' }}</label>
                        </td>
                        <td width="10%">
                            <div class="action-bttn">
                                <a href="{{ route('customers.show', $customer->id) }}">
                                    <i class="fas fa-eye text-info me-2"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    <!-- task item end -->
                </table>
                @else
                <p class="p-4 text-center">No Potential Customers Found!</p>
                @endif
            </div>
        </div>
    </div>
    <!-- Customers listing @E -->

    <!-- Customers pagginate @S -->
    <div class="row">
        <div class="col-12">
            <div class="pagginate-wrap">
                {{ $customers->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
    <!-- Customers pagginate @E -->
</main>
@else
<main class="course-page-wrap d-flex justify-content-center align-items-center">
    <h4>You Don't have access to this page!</h4>
</main>
@endrole
@endsection