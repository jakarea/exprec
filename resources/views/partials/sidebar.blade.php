<div class="sidebar-wrapper">
   
    <!-- header user @S -->
    <div class="header-user-box">
        <div class="media">
            <span>
                {!! strtoupper(Auth()->user()->name[0]) !!}
            </span> 
            <div class="media-body">
                <h5>{{Auth()->user()->name}}</h5>
                <p>@role('Admin') Admin @else Entrepreneur @endrole</p>
            </div>
        </div>
    </div>
    <!-- header user @E -->

    <!-- sidebar menu @S -->
    <div class="sidebar-nav-area">
        <ul class="menubar">
            <li class="menu-item">
                <a href="{{ url('/') }}" class="{{ Request::is('/')  ? ' active' : '' }} menu-link">
                    <img src="{{ asset('assets/images/ps-icon.svg') }}" alt="Personal Space" title="Personal Space" class="img-fluid" />
                    <span>Personal space</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ url('/') }}" class="menu-link">
                    <img src="{{ asset('assets/images/dashboard-icon.svg') }}" alt="Dashboard" title="Dashboard" class="img-fluid" />
                    <span>Dashboard</span>
                    
                </a>
            </li>
            <li class="menu-item">
                <a href="#" class="menu-link">
                    <img src="{{ asset('assets/images/elearning-icon.svg') }}" alt="E Learning" title="E Learning" class="img-fluid" />
                    <span>E Learning</span>
                    <i class="fa-solid fa-angles-right"></i>
                </a>
                 <!-- inner submenu @S -->
                 @include('course/partials/sub-sidebar')
                <!-- inner submenu @E -->
            </li> 
            @role('Admin')
            @else
            <li class="menu-item">
                <a href="{{ url('/email-marketing') }}" class="{{ Request::is('email-marketing*')  ? ' active' : '' }} menu-link">
                    <img src="{{ asset('assets/images/campining-icon.svg') }}" alt="Adspy" title="Adspy" class="img-fluid" />
                    <span>Email Marketing</span>
                    <i class="fa-solid fa-angles-right"></i>
                </a>
                <!-- inner submenu @S -->
                @include('email-camping/partials/sub-sidebar')
                <!-- inner submenu @E -->
            </li>
            <li class="menu-item">
                <a href="{{ url('/adspy') }}" class="{{ Request::is('adspy*')  ? ' active' : '' }} menu-link">
                    <img src="{{ asset('assets/images/adspy-icon.svg') }}" alt="Adspy" title="Adspy" class="img-fluid" />
                    <span class="lock-icons">Adspy <!-- <i class="fas fa-lock"></i> --></span>
                    <i class="fa-solid fa-angles-right"></i>
                </a>
                <!-- inner submenu @S -->
                @include('adspy/partials/sub-sidebar')
                <!-- inner submenu @E -->
            </li>
            <li class="menu-item">
                <a href="{{ url('/add-interest') }}" class="{{ Request::is('add-interest*')  ? ' active' : '' }} menu-link">
                    <img src="{{ asset('assets/images/i-tools-icon.svg') }}" alt="Interest tool" title="Interest tool" class="img-fluid" />
                    <span>Interest tool</span>
                    <i class="fa-solid fa-angles-right"></i>
                </a>
                <!-- inner submenu @S -->
                @include('interest/partials/sub-sidebar')
                <!-- inner submenu @E -->
            </li>
            @endrole
 
            <li class="menu-item">
                <a href="#" class="{{ Request::is('products*')  ? ' active' : '' }} menu-link">
                    <img src="{{ asset('assets/images/pr-icon.svg') }}" alt="Product Research" title="Product Research" class="img-fluid" />
                    <span>Product Research</span>
                    <i class="fa-solid fa-angles-right"></i>
                </a>
                <!-- inner submenu @S -->
                @include('products/partials/sub-sidebar')
                <!-- inner submenu @E -->
            </li>
            @role('Admin')
            @else
            <li class="menu-item">
                <a href="{{ url('integrations') }}" class="{{ Request::is('integrations*')  ? ' active' : '' }} menu-link">
                <!-- <i class="fa-brands fa-superpowers"></i> -->
                <i class="fa-solid fa-plug"></i>
                    <span>Integrations</span> 
                </a> 
            </li>
            @endrole
            @role('Admin')
            <li class="menu-item">
                <a href="{{ url('users') }}" class="{{ Request::is('users*')  ? ' active' : '' }} menu-link"> 
                <i class="fa-solid fa-users"></i>
                    <span>Users</span> 
                </a> 
            </li>
            <li class="menu-item">
                <a href="{{ url('roles') }}" class="{{ Request::is('roles*')  ? ' active' : '' }} menu-link"> 
                <i class="fa-solid fa-user"></i>
                    <span>Roles</span> 
                </a> 
            </li>
            @endrole
            <li class="menu-item">
                <a class="menu-link bg-white" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <img src="{{ asset('assets/images/logout-icon.svg') }}" alt="Logout" title="Logout" class="img-fluid" />
                    <span>{{ __('Logout') }}</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none" style="display:none !important;">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
    <!-- sidebar menu @E -->
</div>