<ul class="pages-submenu-wrap pt-2">
    <li>
        <a href="{{ url('subscriptions') }}" class="{{ Request::is('subscriptions*')  ? ' active' : '' }}"> 
            <i class="fa-solid fa-clock-rotate-left me-3"></i>
            <span>Payment History</span> 
        </a>
    </li> 
    <li>
        <a href="{{ url('refund') }}" class="{{ Request::is('refund*')  ? ' active' : '' }}">
            <i class="fa-solid fa-right-left me-3"></i>
            <span>Refund List</span>
        </a>
    </li> 
</ul>