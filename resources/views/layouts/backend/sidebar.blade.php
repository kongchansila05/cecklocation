<ul class="navbar-nav bg-primary sidebar sidebar-dark accordion" id="accordionSidebar">
{{-- <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar"> --}}
    
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon">
            <i class="fab fa-laravel"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SILA</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item @yield('dashboard')">
        <a class="nav-link " href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>
    @hasanyrole('owner|admin|staff|general_manager')
               
        @role('owner|admin|general_manager')
            <li class="nav-item @yield('location')">
                <a class="nav-link " href="{{ route('location') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Locations</span></a>
            </li>

            <li class="nav-item @yield('geography-active')">
                <a class="nav-link collapsed " href="#" data-toggle="collapse" data-target="#geography"
                    aria-expanded="true" aria-controls="geography">
                    <i class="fas fa-users"></i>
                    <span>Geography</span>
                </a>
                <div id="geography" class="collapse @yield('geography')" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item @yield('provinces')" href="{{ route('province') }}">List Provinces</a>
                    <a class="collapse-item @yield('district')" href="{{ route('district') }}">List District</a>
                    <a class="collapse-item @yield('communes')" href="{{ route('communes') }}">List Communes</a>
                    <a class="collapse-item @yield('village')" href="{{ route('village') }}">List Village</a>
                    </div>
                </div>
            </li>

            <li class="nav-item @yield('user-active')">
                <a class="nav-link collapsed " href="#" data-toggle="collapse" data-target="#user"
                    aria-expanded="true" aria-controls="user">
                    <i class="fas fa-users"></i>
                    <span>Users</span>
                </a>
                <div id="user" class="collapse @yield('user')" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item @yield('list_user')" href="{{ route('user') }}">List User</a>
                    </div>
                </div>
            </li>
        @endrole
        @role('owner')
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse @yield('Components')" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item @yield('Buttons')" href="{{ route('buttons') }}">Buttons</a>
                        <a class="collapse-item @yield('Cards')"  href="{{ route('cards') }}">Cards</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="{{ route('utilities-colors') }}">Colors</a>
                        <a class="collapse-item" href="{{ route('utilities-borders') }}">Borders</a>
                        <a class="collapse-item" href="{{ route('utilities-animations') }}">Animations</a>
                        <a class="collapse-item" href="{{ route('utilities-other') }}">Other</a>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="{{ route('login') }}">Login</a>
                        <a class="collapse-item" href="{{ route('register') }}">Register</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="{{ route('404-page') }}">404 Page</a>
                        <a class="collapse-item" href="{{ route('blank-page') }}">Blank Page</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('chart') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('tables') }}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>
        @endrole
    @endhasanyrole

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>