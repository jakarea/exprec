@extends('layouts.admin')
@section('title') Home @endsection

@section('style') 
<link href="{{ asset('assets/css/product-researchs.css') }}" rel="stylesheet" type="text/css" />  
@endsection

@section('content') 

<main class="product-research-page-wrap">
  <!-- inner submenu @S -->
  @include('products/admin/partials/sub-sidebar')
  <!-- inner submenu @E -->

    <!-- session message @S -->
    @include('partials/session-message')
    <!-- session message @E -->


    <div class="product-research-create-wrap">
   <div class="row">
     <div class="col-lg-12">
       <div class="create-form-wrap">
         <div class="create-form-head">
           <h6>Category List</h6>
           <a href="{{url('admin/categories/create')}}">
             <i class="fa-solid fa-plus"></i> Create Category </a>
         </div>
          <!-- product listing @S -->
        <div class="row">
          <div class="col-12">
          <div class="productss-list-box">
              <table>
                  <tr> 
                  <th width="5%">
                      No
                  </th>
                  <th>
                      Category Name
                  </th> 
                  <th>
                      Status
                  </th>
                  <th>
                      Action
                  </th>
                  </tr>
                  <!-- task item start -->
                  @foreach($categories as $key => $category)
                  <tr> 
                      <td>
                          {{ $key + 1 }}
                      </td>
                      <td>{{ $category->name }}</td> 
                      <td>
                      @if( $category->status == "Active")
                      <span class="badge rounded-pill text-bg-success">Active</span>
                      @elseif($category->status == "Inactive")
                      <span class="badge rounded-pill text-bg-danger">Inactive</span>
                      @endif
                      </td>
                      <td>
                          <div class="action-bttn">
                              <a href="{{ url('admin/categories/'.$category->slug.'/edit') }}">
                                  <i class="fas fa-pen text-info me-2"></i>
                              </a> 
                              <a href=" {{ url('admin/categories/'.$category->slug.'/destroy') }}">
                                  <i class="fas fa-trash"></i>
                              </a> 
                          </div>
                      </td>
                  </tr>
                  @endforeach
                  <!-- task item end -->  
              </table>
              </div>
          </div>
        </div>
          <!-- product listing @E -->
       </div>
     </div>
   </div>
 </div> 

  

  <!-- product pagginate @S -->
  <div class="row">
    <div class="col-12">
      <div class="pagginate-wrap">
        {{ $categories->links('pagination::bootstrap-5') }}
      </div>
    </div>
  </div>
  <!-- product pagginate @E -->
</main>

@endsection