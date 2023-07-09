<nav class="main-header navbar navbar-expand navbar-dark bg-color-palette">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/home" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('logout') }}" class="nav-link">Logout</a>
        </li>
    </ul>

    
    <!-- Right navbar links -->
    
    <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                {{-- <i class="far fa-bell"></i> --}}
                Welcome, {{ auth()->user()->pegawai->nama }} <i class="fa fa-caret-down"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

                <a href="/change-password" class="dropdown-item">
                    <i class="fas fa-users mr-2"></i> Change Password
                    <span class="float-right text-muted text-sm"></span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{ route('logout') }}" class="dropdown-item">
                    <i class="fas fa-users mr-2"></i> log out
                    <span class="float-right text-muted text-sm"></span>
                </a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                <i class="fas fa-th-large"></i>
            </a>
        </li>
    </ul>
</nav>
