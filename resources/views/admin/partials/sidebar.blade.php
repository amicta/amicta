<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="{{ route('admin.home') }}">AMICTA 2022</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{ route('admin.home') }}">{{ strtoupper(substr(config('app.name'), 0, 2)) }}</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>

        <li class="{{ request()->is('admin/dashboard*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                <i class="fas fa-fire"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="{{ request()->is('admin/events*') ? 'active' : '' }}">
            <a href="{{ route('admin.events.index') }}">
                <i class="fas fa-calendar-alt"></i>
                <span>Event</span>
            </a>
        </li>

        <li class="{{ request()->is('admin/participants*') ? 'active' : '' }}">
            <a href="{{ route('admin.participants.index') }}">
                <i class="fas fa-users"></i>
                <span>Peserta Event</span>
            </a>
        </li>

        {{-- <li class="menu-header">Users</li>

        <li>
            <a class="nav-link" href=""><i class="fas fa-users"></i>
                <span>Users</span>
            </a>
        </li> --}}
    </ul>
</aside>
