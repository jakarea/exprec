<div class="pages-submenu-wrap  ">
  <ul>
    <li>
      <a href="{{ url('admin/products') }}" class="{{ Request::is('admin/products')  ? ' active' : '' }}">
        <img src="{{ asset('assets/images/dashboard-icon.svg') }}" alt="Dash" class="img-fluid">Home </a>
    </li>
    <li>
      <a href="{{ url('admin/products/create') }}" class="{{ Request::is('admin/products/create')  ? ' active' : '' }}">
        <i class="fas fa-plus me-3"></i> Create</a>
    </li> 
    
    <li>
      <a href="{{ url('admin/categories') }}" class="{{ Request::is('admin/product/category/lists')  ? ' active' : '' }}">
      <img src="{{ asset('assets/images/Vector.svg') }}" alt="Dash" class="img-fluid"> Categories </a>
    </li> 
    
  </ul>
</div>