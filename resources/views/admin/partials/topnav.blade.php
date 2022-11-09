<form class="form-inline mr-auto" action="">
    <ul class="navbar-nav mr-3">
        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
    </ul>
</form>
<ul class="navbar-nav navbar-right">
    <li class="dropdown">
        <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <div class="d-sm-none d-lg-inline-block">Halo, {{ Auth::guard('admin')->user()->name }}</div>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-title">Mau kemana?</div>
            {{-- <a href="#" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile Settings
            </a> --}}
            {{-- <div class="dropdown-divider"></div> --}}

            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <a class="dropdown-item has-icon text-danger"
                    onclick="event.preventDefault(); this.closest('form').submit();" href="">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </form>
        </div>
    </li>
</ul>
