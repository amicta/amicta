<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="{{ route('admin.home') }}">AMICTA 2022</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{ route('admin.home') }}">{{ strtoupper(substr(config('app.name'), 0, 2)) }}</a>
    </div>
    <ul class="sidebar-menu">

        <li class="{{ request()->is('admin/dashboard*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                <i class="fas fa-fire"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="menu-header">Event</li>

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

        <li class="menu-header">Lomba</li>

        <li class="{{ request()->is('admin/competitions*') ? 'active' : '' }}">
            <a href="{{ route('admin.competitions.index') }}">
                <i class="fas fa-trophy"></i>
                <span>Lomba</span>
            </a>
        </li>

        <li class="{{ request()->is('admin/categories*') ? 'active' : '' }}">
            <a href="{{ route('admin.categories.index') }}">
                <i class="fas fa-layer-group"></i>
                <span>Kategori</span>
            </a>
        </li>

        <li class="{{ request()->is('admin/users*') ? 'active' : '' }}">
            <a href="{{ route('admin.users.index') }}">
                <i class="fas fa-user"></i>
                <span>Peserta</span>
            </a>
        </li>

        <li class="{{ request()->is('admin/team*') ? 'active' : '' }}">
            <a href="{{ route('admin.events.index') }}">
                <i class="fas fa-users"></i>
                <span>Tim</span>
            </a>
        </li>

        <li class="{{ request()->is('admin/assignment*') ? 'active' : '' }}">
            <a href="{{ route('admin.events.index') }}">
                <i class="fas fa-clipboard-list"></i>
                <span>Penugasan</span>
            </a>
        </li>

        <li class="{{ request()->is('admin/submission*') ? 'active' : '' }}">
            <a href="{{ route('admin.events.index') }}">
                <i class="fas fa-file-alt"></i>
                <span>Submisi</span>
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
