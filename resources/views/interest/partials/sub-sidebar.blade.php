  <ul class="pages-submenu-wrap">
    <li> 
        <a href="{{ url('/add-interest') }}" class="{{ Request::is('add-interest')  ? ' active' : '' }}">
          <img src="{{ asset('assets/images/i-tools-icon.svg') }}" alt="Interest tool" title="Search Interest" class="img-fluid"><span>Search Interest</span></a>
    </li> 
    <li>
    <a href="{{ url('/add-interest/projects') }}" class="{{ Request::is('add-interest/projects')  ? ' active' : '' }}">
        <img src="{{ asset('assets/images/save-icn.svg') }}" alt="a" class="img-fluid" title="Show Saved Interest"> <span>Saved Interest</span></a>
    </li>   
  </ul> 