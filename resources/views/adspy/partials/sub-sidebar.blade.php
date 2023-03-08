<!-- inner submenu @S --> 
    <ul class="pages-submenu-wrap">
      <li>
        <a href="{{ url('adspy') }}" class="{{ Request::is('adspy')  ? ' active' : '' }}">
          <img src="{{ asset('assets/images/dashboard-icon.svg') }}" alt="Dash" class="img-fluid"> Dashboard </a>
      </li>
      <li>
        <a href="{{ url('adspy/facebook') }}" class="{{ Request::is('adspy/facebook')  ? ' active' : '' }}">
          <img src="{{ asset('assets/images/Icon.svg') }}" alt="Dash" class="img-fluid"> Facebook ads </a>
      </li>
      <li>
        <a href="{{ url('adspy/pinterest') }}" class="{{ Request::is('adspy/pinterest')  ? ' active' : '' }}">
          <i class="fa-brands fa-pinterest"></i> Pinterest ads </a>
      </li>
      <li>
        <a href="{{ url('adspy/tiktok') }}" class="{{ Request::is('adspy/tiktok')  ? ' active' : '' }}">
          <img src="{{ asset('assets/images/Tiktok.svg') }}" alt="Dash" class="img-fluid"> Tiktok ads </a>
      </li>
      <li>
        <a href="{{ url('adspy/mylist') }}" class="{{ Request::is('adspy/mylist')  ? ' active' : '' }}">
          <img src="{{ asset('assets/images/Vector.svg') }}" alt="Dash" class="img-fluid">My lists </a>
      </li>
    </ul> 
<!-- inner submenu @E -->