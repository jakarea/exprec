<ul class="pages-submenu-wrap">
@role('Admin')
  <li>
    <a href="{{ url('admin/products') }}" class="{{ Request::is('admin/products')  ? ' active' : '' }}">
      <img src="{{ asset('assets/images/dashboard-icon.svg') }}" alt="Dash" class="img-fluid">Dashboard </a>
  </li> 
  <li>
    <a href="{{ url('admin/categories') }}" class="{{ Request::is('admin/categories')  ? ' active' : '' }}">
      <i class="fas fa-list"></i>Categories </a>
  </li> 
  @endrole
  <li>
    <a href="{{ url('/products') }}" class="{{ Request::is('products')  ? ' active' : '' }}">
      <img src="{{ asset('assets/images/dashboard-icon.svg') }}" alt="Dash" class="img-fluid">Home </a>
  </li> 
</ul> 