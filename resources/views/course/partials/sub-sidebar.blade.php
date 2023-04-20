<ul class="pages-submenu-wrap e-learn-pages-submenu-wrap">
  @role('Admin')
  <li>
    <a href="{{ url('/admin/elearning/courses') }}">
      <img src="{{ asset('assets/images/course/book.svg') }}" alt="Dash" class="img-fluid" >Course List</a>
  </li> 
  <li>
    <a href="{{ url('/admin/elearning/modules') }}">
      <img src="{{ asset('assets/images/course/book.svg') }}" alt="Dash" class="img-fluid" >Module List</a>
  </li> 
  <li>
    <a href="{{ url('/admin/elearning/lessons') }}">
      <img src="{{ asset('assets/images/course/book.svg') }}" alt="Dash" class="img-fluid" >Lesson List</a>
  </li> 
  @endrole 
  <li>
    <a href="{{ url('/elearning') }}" class="{{ Request::is('elearning')  ? ' active' : '' }}">
      <img src="{{ asset('assets/images/course/book.svg') }}" alt="Dash" class="img-fluid" >All Courses </a>
  </li> 
  <!-- <li>
    <a href="{{ url('/elearning/mylearning') }}" class="{{ Request::is('elearning/mylearning')  ? ' active' : '' }}">
      <img src="{{ asset('assets/images/course/Bookmark.svg') }}" alt="Dash" class="img-fluid">My Learning </a>
  </li>  -->
  <li>
    <a href="{{ url('/elearning/favorite') }}" class="{{ Request::is('elearning/favorite')  ? ' active' : '' }}">
      <img src="{{ asset('assets/images/course/Star.svg') }}" alt="Dash" class="img-fluid">Favorite </a>
  </li> 
</ul> 