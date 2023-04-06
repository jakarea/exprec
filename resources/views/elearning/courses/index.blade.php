@extends('layouts.admin')
@section('title') Admin - Course List @endsection
@section('content') 

<main class="product-research-page-wrap">

  <!-- session message @S -->
  @include('partials/session-message')
  <!-- session message @E -->

  <!-- course header area @S -->
  <div class="product-filter-wrapper">
   

    <form action="" method="GET">
    <div class="product-filter-box">
    <h5>Course List</h5> 
      <div class="form-grp-btn mt-4 ms-auto">
      <a href="{{ url('admin/elearning/courses/create') }}" class="btn me-3">Add Course</a> 
    </div>

    </div>
    </form>

  </div>
  <!-- course header area @E -->

  <!-- course listing @S -->
  <div class="row">
    <div class="col-12">
    <div class="productss-list-box">
    @if(count($courses) > 0)
        <table>
            <tr> 
            <th width="5%">
                No
            </th> 
            <th>
                Title
            </th>
            <th>
                Duration
            </th>
            <th>
                Short Description
            </th>
            <th>
                Thumbnail
            </th> 
            <th>
                Status
            </th>
           
            </tr>
            <!-- task item start -->
           
            @foreach($courses as $key => $course)
            @php 
            $text = $course->title;
            $maxLength = 60;
              if (strlen($text) > $maxLength) {
                  $lastSpace = strpos($text, ' ', $maxLength);
                  $text = $lastSpace !== false ? substr($text, 0, $lastSpace) . '...' : $text;
              }
          @endphp
            <tr> 
                <td>
                    {{ $key +1 }}
                </td> 
                <td>{{ $text }}</td>
                <td>{{ $course->duration }}</td>
                <td>{{ $course->short_description }}</td>

                <td>
                    <img src="{{asset('assets/courses/images/'. $course->thumbnail)}}" alt="{{ $course->thumbnail }}" class="img-fluid" width="60">
                </td> 

               
                <td>
                    <div class="action-bttn">
                        <a href="{{ url('admin/courses/'.$course->slug) }}">
                            <i class="fas fa-eye text-info me-2"></i>
                        </a> 
                        <a href="{{ url('admin/courses/'.$course->slug.'/edit') }}">
                            <i class="fas fa-pen text-success me-2"></i>
                        </a> 
                       
                        <a href="{{ url('admin/courses/'.$course->slug.'/destroy') }}">
                            <i class="fas fa-trash text-danger"></i>
                        </a> 
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
        {{ $courses->links('pagination::bootstrap-5') }}
      </div>
    </div>
  </div>
  <!-- course pagginate @E -->
</main>

@endsection