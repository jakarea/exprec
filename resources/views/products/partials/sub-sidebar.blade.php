<ul class="pages-submenu-wrap">
  <li>
    <a href="{{ url('/products') }}" class="{{ Request::is('products')  ? ' active' : '' }}">
      <img src="{{ asset('assets/images/dashboard-icon.svg') }}" alt="Dash" class="img-fluid">Home </a>
  </li> 
</ul> 