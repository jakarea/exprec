@extends('layouts.admin')
@section('title') Admin - Payment List @endsection
@section('content') 
@role("Admin")
<main class="product-research-page-wrap">

  <!-- session message @S -->
  @include('partials/session-message')
  <!-- session message @E -->

  <!-- course header area @S -->
  <div class="product-filter-wrapper"> 
    <form action="" method="GET">
        <div class="product-filter-box">
            <h5>Payment List</h5> 
        </div>
    </form>

  </div>
  <!-- course header area @E -->

  <!-- course listing @S -->
  <div class="row">
    <div class="col-12">
    <div class="productss-list-box">
    @if(count($payments) > 0)
        <table>
            <tr> 
            <th width="5%">
                No
            </th> 
            <th>
                Amount
            </th>
            <th>
                Plan
            </th>
            <th>
                Status
            </th>
            <th>
                Customer
            </th>
            <th>
                Actions
            </th>
           
            </tr>
            <!-- task item start -->
           
            @foreach($payments as $key => $data)
            <tr>
                <td>
                    {{ $key+1 }}
                </td>
                <td>
                    {{ $data->price . ' ' . "USD" }}
                </td>
                <td>
                    {{ $data->plan_name }}
                </td>
                <td>
                    @if($data->stripe_status == 'active')
                        <span class="badge badge-success bg-success">Active</span>
                    @else
                        <span class="badge badge-danger bg-danger">Inactive</span>
                    @endif
                </td>
                <td>
                    {{ $data->user_name }}
                </td>
                <td>
                    <a href="{{ route('paymentlist.show', $data->id) }}" class="btn btn-primary btn-sm">View</a>
                    <!-- stripe refound -->
                    @if($data->stripe_status == 'active')
                    <form action="{{ route('paymentlist.destroy', $data->id) }}" method="POST" class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Refound</button>
                    </form>
                    @endif
                </td>
            </tr>
            @endforeach
            <!-- task item end -->  
        </table>
        @else 
            <p class="p-4 text-center">No Payments Found!</p>
        @endif
        </div>
    </div>
  </div>
  <!-- course listing @E -->

  <!-- course pagginate @S -->
  <div class="row">
    <div class="col-12">
      <div class="pagginate-wrap">
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