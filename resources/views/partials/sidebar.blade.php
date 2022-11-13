<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <div style="display: flex; justify-content: center; padding: 10px;">
            <a href="{{ route('home') }}"><img style="width:100px" src="{{ asset('assets/img/logo-normal.png')}}" alt=""></a>
        </div>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{ route('home') }}">{{ strtoupper(substr(config('app.name'), 0, 2)) }}</a>
    </div>
    <ul class="sidebar-menu" style="margin-top: 30px">

        <li class="{{ request()->is('/dashboard*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('home') }}">
                <i class="fas fa-fire"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="{{ request()->is('competitions*') ? 'active' : '' }}">
            <a href="{{ route('home') }}">
                <i class="fas fa-trophy"></i>
                <span>Lomba</span>
            </a>
        </li>

        <li class="{{ request()->is('team*') ? 'active' : '' }}">
            <a href="{{ route('admin.events.index') }}">
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

        {{-- <li class="{{ request()->is('table') ? 'active' : '' }}"><a href="{{ url('table') }}"><i
                    class="fas fa-table"></i> <span>Tables</span></a></li>

        <li class="menu-header">Users</li>

        <li><a class="nav-link" href=""><i class="fas fa-users"></i> <span>Users</span></a></li> --}}
    </ul>
</aside>
