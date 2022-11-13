<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="{{ route('home') }}">AMICTA 2022</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{ route('home') }}">{{ strtoupper(substr(config('app.name'), 0, 2)) }}</a>
    </div>
    <ul class="sidebar-menu">
        {{-- <li class="menu-header">Dashboard</li> --}}

        <li class="{{ request()->is('dashboard*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="fas fa-fire"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="{{ request()->is('competitions*') ? 'active' : '' }}">
            <a href="{{ route('competitions.index') }}">
                <i class="fas fa-trophy"></i>
                <span>Lomba</span>
            </a>
        </li>

        <li class="{{ request()->is('team*') ? 'active' : '' }}">
            <a href="{{ route('teams.index') }}">
                <i class="fas fa-users"></i>
                <span>Tim</span>
            </a>
        </li>

        <li class="{{ request()->is('submission*') ? 'active' : '' }}">
            <a href="{{ route('admin.events.index') }}">
                <i class="fas fa-file-alt"></i>
                <span>Submisi</span>
            </a>
        </li>

    </ul>
</aside>
