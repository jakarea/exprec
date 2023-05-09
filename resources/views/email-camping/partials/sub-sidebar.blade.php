    <ul class="pages-submenu-wrap e-camp-submenu">
      <li>
        <a href="{{url('email-marketing')}}" class="{{ Request::is('email-marketing')  ? ' active' : '' }}">
          <img src="{{ asset('assets/images/dashboard-icon.svg') }}" alt="Dash" class="img-fluid"> 
          <span>Home</span>
        </a>
      </li> 
      <li>
        <a href="{{url('email-marketing/campaigns')}}" class="{{ Request::is('email-marketing/campaigns')  ? ' active' : '' }}">
          <img src="{{ asset('assets/images/campining-icon.svg') }}" alt="Dash" class="img-fluid"> 
          <span>Campaigns</span>
        </a>
      </li> 
      <li>
        <a href="{{url('email-marketing/flows')}}" class="{{ Request::is('email-marketing/flows')  ? ' active' : '' }}">
          <img src="{{ asset('assets/images/flows-icon.svg') }}" alt="Dash" class="img-fluid"> 
          <span>Flows</span>
        </a>
      </li> 
      <li>
        <a href="{{url('email-marketing/signup-form')}}" class="{{ Request::is('email-marketing/signup-form')  ? ' active' : '' }}">
          <img src="{{ asset('assets/images/signup-icon.svg') }}" alt="Dash" class="img-fluid"> 
          <span>Sign up forms</span>
        </a>
      </li> 
      <li class="sub-sidebar-submenu">
        <a href="#" class="{{ Request::is('email-marketing/audience/list-segments') || Request::is('email-marketing/profile')  ? ' active' : '' }}">
          <img src="{{ asset('assets/images/audience-icon.svg') }}" alt="Dash" class="img-fluid"> 
          <span>Audience</span>
          <i class="fas fa-angle-right"></i>
        </a>
        <ul>
            <li>
            <a href="{{url('email-marketing/audience/list-segments')}}" class="{{ Request::is('email-marketing/list-segments')  ? ' active' : '' }}"> 
              <span>Lists &amp; segments</span>
            </a>
          </li> 
          <li>
            <a href="{{url('email-marketing/profile')}}" class="{{ Request::is('email-marketing/profile')  ? ' active' : '' }}"> 
              <span>Profiles</span>
            </a>
          </li> 
        </ul>
      </li>
      <li class="sub-sidebar-submenu">
        <a href="#" class="{{ Request::is('email-marketing/content/templates') || Request::is('email-marketing/images-brand') || Request::is('email-marketing/products')  ? ' active' : '' }}">
          <img src="{{ asset('assets/images/content-icon.svg') }}" alt="Dash" class="img-fluid"> 
          <span>Content</span>
          <i class="fas fa-angle-right"></i>
        </a>
        <ul>
            <li>
            <a href="{{url('email-marketing/content/templates')}}" class="{{ Request::is('email-marketing/templates')  ? ' active' : '' }}"> 
              <span>Templates</span>
            </a>
          </li> 
          <li>
            <a href="{{url('email-marketing/products')}}" class="{{ Request::is('email-marketing/products')  ? ' active' : '' }}"> 
              <span>Products</span>
            </a>
          </li> 
          <li>
            <a href="{{url('email-marketing/images-brand')}}" class="{{ Request::is('email-marketing/images-brand')  ? ' active' : '' }}"> 
              <span>Images &amp; brand</span>
            </a>
          </li> 
        </ul>
      </li> 
      <li class="sub-sidebar-submenu">
        <a href="#" class="{{ Request::is('email-marketing/dashboard')  ? ' active' : '' }}">
          <img src="{{ asset('assets/images/analytics-icon.svg') }}" alt="Dash" class="img-fluid"> 
          <span>Analytics</span>
          <i class="fas fa-angle-right"></i>
        </a>
        <ul>
            <li>
            <a href="{{url('email-marketing/dashboard')}}" class="{{ Request::is('email-marketing/dashboard')  ? ' active' : '' }}"> 
              <span>Dashboards</span>
            </a>
          </li> 
          <li>
            <a href="#"> 
              <span>Metrics</span>
            </a>
          </li> 
          <li>
            <a href="#"> 
              <span>Benchmarks</span>
            </a>
          </li> 
          <li>
            <a href="#"> 
              <span>Custom reports</span>
            </a>
          </li> 
        </ul>
      </li>  
    </ul> 