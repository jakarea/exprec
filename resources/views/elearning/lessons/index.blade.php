@extends('layouts.admin')
@section('title') Admin - Lesson List @endsection
@section('content') 
@role("Admin")
<main class="product-research-page-wrap">

  <!-- session message @S -->
  @include('partials/session-message')
  <!-- session message @E -->

  <!-- course header area @S -->
  <div class="product-filter-wrapper">
    
    <div class="product-filter-box">
    <h5>Lesson List</h5> 
      <div class="form-grp-btn mt-4 ms-auto">
        <a href="{{ url('admin/elearning/lessons/create') }}" class="btn me-3">Add Lesson</a> 
        </div>
    </div> 

  </div>
  <!-- course header area @E -->

  <!-- course listing @S -->
  <div class="row">
    <div class="col-12">
    <div class="productss-list-box">
    @if(count($lessons) > 0)
        <table>
            <tr> 
                <th width="5%">No</th> 
                <th>Title</th>
                <th>Module </th>
                <th>Course</th>
                <th>Video URL</th> 
                <th>Actions</th>
            </tr>
            <!-- task item start -->
           
            @foreach($lessons as $key => $lesson)
            @php 
            $title = $lesson->title;
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
                <td>{{ $lesson->module->title  }}</td>  
                <td>{{ $lesson->course->title   }}</td>  
                
                <td>
                    <!-- check if video url isn't url then show processing else show url -->
                    @if(!filter_var($lesson->video_url, FILTER_VALIDATE_URL))
                        <span class="text-danger">Processing</span>
                    @else
                        <a href="{{ $lesson->video_url }}" target="_blank">{{ $lesson->video_url }}</a>
                    @endif
                </td>  
               
                <td width="10%">
                    <div class="action-bttn"> 
                    @can('lesson-edit')
                        <a href="{{ url('admin/elearning/lessons/'.$lesson->slug.'/edit') }}">
                            <i class="fas fa-pen text-info me-2"></i>
                        </a>
                    @endcan
                    @can('lesson-delete')
                        <form method="post" class="d-inline" action="{{ url('admin/elearning/lessons/'.$lesson->slug.'/destroy') }}">
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
              <p class="p-4 text-center">No Lessons Found!</p>
            @endif
        </div>
    </div>
  </div>
  <!-- course listing @E -->

  <!-- course pagginate @S -->
  <div class="row">
    <div class="col-12">
      <div class="pagginate-wrap">
        {{ $lessons->links('pagination::bootstrap-5') }}
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