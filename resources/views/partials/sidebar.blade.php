<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="{{ route('home') }}">AMICTA 2022</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{ route('home') }}">{{ strtoupper(substr(config('app.name'), 0, 2)) }}</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>

        <li class="{{ request()->is('/dashboard*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('home') }}">
                <i class="fas fa-fire"></i>
                <span>Dashboard</span>
            </a>
        </li>

        {{-- <li class="{{ request()->is('table') ? 'active' : '' }}"><a href="{{ url('table') }}"><i
                    class="fas fa-table"></i> <span>Tables</span></a></li>

        <li class="menu-header">Users</li>

        <li><a class="nav-link" href=""><i class="fas fa-users"></i> <span>Users</span></a></li> --}}
    </ul>
</aside>
