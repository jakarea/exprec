<ul class="pages-submenu-wrap e-camp-submenu">
@role('Admin') 
<li>
    <a href="{{ url('admin/products') }}" class="{{ Request::is('admin/products')  ? ' active' : '' }}"> 
    <img src="{{ asset('assets/images/dashboard-icon.svg') }}" alt="Dash" class="img-fluid me-2"> <span>Dashboard</span>
    </a>
  </li> 
    <li>
    <a href="{{ url('admin/categories') }}" class="{{ Request::is('admin/categories')  ? ' active' : '' }}"> 
    <img src="{{ asset('assets/images/dashboard-icon.svg') }}" alt="Dash" class="img-fluid me-2"> <span>Categories</span>
    </a>
  </li>  
  @else
  <li>
    <a href="{{ url('/products') }}" class="{{ Request::is('products')  ? ' active' : '' }}">
      <img src="{{ asset('assets/images/dashboard-icon.svg') }}" alt="Dash" class="img-fluid me-2"> All Products </a>
  </li> 
  <li>
    <a href="{{ url('/products') }}" class="{{ Request::is('products/mylist')  ? ' active' : '' }}">
      <img src="{{ asset('assets/images/dashboard-icon.svg') }}" alt="Dash" class="img-fluid me-2"> My List </a>
  </li> 
  @endrole
</ul> 