@extends('layouts.admin')
@section('title') Admin - Customer List @endsection
@section('content') 
@role("Admin")
<main class="product-research-page-wrap">

  <!-- session message @S -->
  @include('partials/session-message')
  <!-- session message @E -->

  <!-- course listing @S -->
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
                    <label class="badge badge-success bg-success">{{ $customer->hasRole('Customer') ? 'Customer' : 'Not a customer' }}</label>
                </td>
                <td width="10%">
                    <div class="action-bttn">
                        @can('course-list')
                        <a href="{{ route('customers.show', $customer->id) }}">
                            <i class="fas fa-eye text-info me-2"></i>
                        </a> 
                        @endcan
                        @can('course-edit')
                        <a href="{{ url('admin/elearning/courses/'.$customer->id.'/edit') }}">
                            <i class="fas fa-pen text-primary me-2"></i>
                        </a>  
                        @endcan
                        @can('course-delete')
                        <form method="post" class="d-inline" action="{{ url('admin/elearning/courses/'.$customer->id.'/destroy') }}">
                            @csrf 
                            @method("DELETE")
                            <button type="submit" class="btn p-0"><i class="fas fa-trash text-danger"></i></button>
                        </form>
                        @endcan
                        
                    </div>
                </td>
            </tr>
            @endforeach
            <!-- task item end -->  
        </table>
        @else 
              <p class="p-4 text-center">No Courses Found!</p>
            @endif
        </div>
    </div>
  </div>
  <!-- course listing @E -->

  <!-- course pagginate @S -->
  <div class="row">
    <div class="col-12">
      <div class="pagginate-wrap">
        {{ $customers->links('pagination::bootstrap-5') }}
      </div>
    </div>
  </div>
  <!-- course pagginate @E -->
</main>
@else
<main class="course-page-wrap d-flex justify-content-center align-items-center">
    <h4>You Don't have access to this page!</h4>
</main>
@endrole
@endsection