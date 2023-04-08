<ul class="pages-submenu-wrap">
  <li>
    <a href="{{ url('/admin/elearning/courses') }}">
      <img src="{{ asset('assets/images/course/Bookmark.svg') }}" alt="Dash" class="img-fluid">Admin Course List</a>
  </li> 
  <li>
    <a href="{{ url('/admin/elearning/modules') }}">
      <img src="{{ asset('assets/images/course/Bookmark.svg') }}" alt="Dash" class="img-fluid">Admin Module List</a>
  </li> 
  <li>
    <a href="{{ url('/admin/elearning/lessons') }}">
      <img src="{{ asset('assets/images/course/Bookmark.svg') }}" alt="Dash" class="img-fluid">Admin Lesson List</a>
  </li> 
  <li>
    <a href="{{ url('/elearning') }}" class="{{ Request::is('elearning')  ? ' active' : '' }}">
      <img src="{{ asset('assets/images/course/book.svg') }}" alt="Dash" class="img-fluid" style="filter: invert(81%) sepia(10%) saturate(571%) hue-rotate(177deg) brightness(89%) contrast(84%);">All Courses </a>
  </li> 
  <li>
    <a href="{{ url('/elearning/mylearning') }}" class="{{ Request::is('elearning/mylearning')  ? ' active' : '' }}">
      <img src="{{ asset('assets/images/course/Bookmark.svg') }}" alt="Dash" class="img-fluid">My Learning </a>
  </li> 
  <li>
    <a href="{{ url('/elearning/favorite') }}" class="{{ Request::is('elearning/favorite')  ? ' active' : '' }}">
      <img src="{{ asset('assets/images/course/Star.svg') }}" alt="Dash" class="img-fluid">Favorite </a>
  </li> 
</ul> 