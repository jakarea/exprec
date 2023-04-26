@extends('layouts.admin')
@section('title') Admin - Module List @endsection
@section('content') 
@role("Admin")
<main class="product-research-page-wrap">

  <!-- session message @S -->
  @include('partials/session-message')
  <!-- session message @E -->

  <!-- course header area @S -->
  <div class="product-filter-wrapper">
    
    <div class="product-filter-box">
    <h5>Modules List</h5> 
      <div class="form-grp-btn mt-4 ms-auto">
        <a href="{{ url('admin/elearning/modules/create') }}" class="btn me-3">Add Module</a> 
        </div>
    </div> 

  </div>
  <!-- course header area @E -->

  <!-- course listing @S -->
  <div class="row">
    <div class="col-12">
    <div class="productss-list-box">
    @if(count($modules) > 0)
        <table>
            <tr> 
            <th width="5%">
                No
            </th> 
            <th>
                Title
            </th>
            <th>
                Course
            </th>
            <th>
                Duration
            </th>
            <th>
                Total Lesson
            </th>
            <th>
                Total Quiz
            </th>
            <th>
                Total Video
            </th> 
            <th>
                Actions
            </th>
           
            </tr>
            <!-- task item start -->
           
            @foreach($modules as $key => $module)
            @php 
            $title = $module->title;
            $maxLength = 60;
              if (strlen($title) > $maxLength) {
                  $lastSpace = strpos($title, ' ', $maxLength);
                  $title = $lastSpace !== false ? substr($title, 0, $lastSpace) . '...' : $title;
              }
          @endphp
            <tr> 
                <td>
                    {{ $key +1 }}
                </td> 
                <td>{{ $title }}</td>
                <td>{{ $module->course->title }}</td>
                <td>{{ $module->duration }}</td>
                <td>{{ $module->number_of_lesson }}</td>
                <td>{{ $module->number_of_quiz }}</td>
                <td>{{ $module->number_of_video }}</td>  
                <td width="10%">
                    <div class="action-bttn">
                        <!-- <a href="{{ url('admin/elearning/module/'.$module->slug) }}">
                            <i class="fas fa-eye text-info me-2"></i>
                        </a>  -->
                        @can('module-edit')
                        <a href="{{ url('admin/elearning/modules/'.$module->slug.'/edit') }}">
                            <i class="fas fa-pen text-primary me-2"></i>
                        </a>  
                        @endcan
                        @can('module-delete')
                        <form method="post" class="d-inline" action="{{ url('admin/elearning/modules/'.$module->slug.'/destroy') }}">
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
              <p class="p-4 text-center">No Modules Found!</p>
            @endif
        </div>
    </div>
  </div>
  <!-- course listing @E -->

  <!-- course pagginate @S -->
  <div class="row">
    <div class="col-12">
      <div class="pagginate-wrap">
        {{ $modules->links('pagination::bootstrap-5') }}
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