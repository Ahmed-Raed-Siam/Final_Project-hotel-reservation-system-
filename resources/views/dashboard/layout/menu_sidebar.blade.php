<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard.') }}" class="brand-link">
        <img src="{{ asset("dist/img/AdminLTELogo.png") }}" alt="dashboardLTE Logo"
             class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">dashboardLTE 3</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar users panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset("dist/img/user2-160x160.jpg") }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Ahmed Raed Siam</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item {{ \Illuminate\Support\Facades\Request::is('dashboard') ? 'menu-is-opening menu-open' : '' }}">
                    <a href="{{ route('dashboard.') }}"
                       class="nav-link {{ \Illuminate\Support\Facades\Request::is('dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <!--Rooms-->
                <li class="nav-item {{ \Illuminate\Support\Facades\Request::is('dashboard/rooms','dashboard/rooms/create') ? 'menu-is-opening menu-open' : '' }}">
                    <a href="{{ route('dashboard.rooms.index') }}"
                       class="nav-link {{ \Illuminate\Support\Facades\Request::is('dashboard/rooms','dashboard/rooms/create') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tree"></i>
                        <p>
                            Rooms
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('dashboard.rooms.index') }}"
                               class="nav-link {{ \Illuminate\Support\Facades\Request::is('dashboard/rooms') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Rooms Table</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('dashboard.rooms.create') }}"
                               class="nav-link {{ \Illuminate\Support\Facades\Request::is('dashboard/rooms/create') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Room</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--Rooms Types-->
                <li class="nav-item {{ \Illuminate\Support\Facades\Request::is('dashboard/rooms/types','dashboard/rooms/types/create') ? 'menu-is-opening menu-open' : '' }}">
                    <a href="{{ route('dashboard.rooms.types.index') }}"
                       class="nav-link {{ \Illuminate\Support\Facades\Request::is('dashboard/rooms/types','dashboard/rooms/types/create') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Rooms Types
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('dashboard.rooms.types.index') }}"
                               class="nav-link {{ \Illuminate\Support\Facades\Request::is('dashboard/rooms/types') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Rooms Types Table</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('dashboard.rooms.types.create') }}"
                               class="nav-link {{ \Illuminate\Support\Facades\Request::is('dashboard/rooms/types/create') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Rooms Types</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('dashboard.rooms.types.trash.index') }}"
                               class="nav-link {{ \Illuminate\Support\Facades\Request::is('dashboard/rooms/types/trash') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Trash</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--Bookings-->
                <li class="nav-item {{ \Illuminate\Support\Facades\Request::is('dashboard/bookings','dashboard/bookings/create') ? 'menu-is-opening menu-open' : '' }}">
                    <a href="{{ route('dashboard.bookings.index') }}"
                       class="nav-link {{ \Illuminate\Support\Facades\Request::is('dashboard/bookings','dashboard/bookings/create') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-building"></i>
                        <p>
                            Bookings
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('dashboard.bookings.index') }}"
                               class="nav-link {{ \Illuminate\Support\Facades\Request::is('dashboard/bookings') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Bookings Table</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('dashboard.bookings.create') }}"
                               class="nav-link {{ \Illuminate\Support\Facades\Request::is('dashboard/bookings/create') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Bookings</p>
                            </a>
                        </li>
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{ route('dashboard.bookings.trash.index') }}"--}}
{{--                               class="nav-link {{ \Illuminate\Support\Facades\Request::is('dashboard/bookings/trash') ? 'active' : '' }}">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Trash</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
                    </ul>
                </li>
            <!--{{--Users--}}-->
                <li class="nav-item {{ \Illuminate\Support\Facades\Request::is('dashboard/users','dashboard/users/create','dashboard/users/trash') ? 'menu-is-opening menu-open' : '' }}">
                    <a href="{{ route('dashboard.users.index') }}"
                       class="nav-link {{ \Illuminate\Support\Facades\Request::is('dashboard/users','dashboard/users/create','dashboard/users/trash') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Users
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('dashboard.users.index') }}"
                               class="nav-link {{ \Illuminate\Support\Facades\Request::is('dashboard/users') ? 'active' : '' }}">
                                {{--                                <i class="{{ \Illuminate\Support\Facades\Request::is('dashboard/users') ? 'far fa-dot-circle' : 'far fa-circle' }} nav-icon"></i>--}}
                                <i class="far fa-circle nav-icon"></i>
                                <p>Users Table</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('dashboard.users.create') }}"
                               class="nav-link {{ \Illuminate\Support\Facades\Request::is('dashboard/users/create') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add User</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('dashboard.users.trash.index') }}"
                               class="nav-link {{ \Illuminate\Support\Facades\Request::is('dashboard/users/trash') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Trash</p>
                            </a>
                        </li>
                    </ul>
                </li>
            <!--{{--Roles & Users Roles--}}-->
                <li class="nav-item {{ \Illuminate\Support\Facades\Request::is('dashboard/roles','dashboard/roles/create','dashboard/users/roles','dashboard/users/roles/create') ? 'menu-is-opening menu-open' : '' }}">
                    <a href="{{ route('dashboard.roles.index') }}"
                       class="nav-link {{ \Illuminate\Support\Facades\Request::is('dashboard/roles','dashboard/roles/create','dashboard/users/roles','dashboard/users/roles/create') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user-lock"></i>
                        <p>
                            Roles
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item {{ \Illuminate\Support\Facades\Request::is('dashboard/roles','dashboard/roles/create') ? 'menu-is-opening menu-open' : '' }}">
                            <a href="{{ route('dashboard.roles.index') }}"
                               class="nav-link {{ \Illuminate\Support\Facades\Request::is('dashboard/roles','dashboard/roles/create') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-file-signature"></i>
                                <p>
                                    Roles
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('dashboard.roles.index') }}"
                                       class="nav-link {{ \Illuminate\Support\Facades\Request::is('dashboard/roles') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Roles Table</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('dashboard.roles.create') }}"
                                       class="nav-link {{ \Illuminate\Support\Facades\Request::is('dashboard/roles/create') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Role</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item {{ \Illuminate\Support\Facades\Request::is('dashboard/users/roles','dashboard/users/roles/create') ? 'menu-is-opening menu-open' : '' }}">
                            <a href="{{ route('dashboard.users.roles.index') }}"
                               class="nav-link {{ \Illuminate\Support\Facades\Request::is('dashboard/users/roles','dashboard/users/roles/create') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-users-cog"></i>
                                <p>
                                    Users Roles
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('dashboard.users.roles.index') }}"
                                       class="nav-link {{ \Illuminate\Support\Facades\Request::is('dashboard/users/roles') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Users Roles Table</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('dashboard.users.roles.create') }}"
                                       class="nav-link {{ \Illuminate\Support\Facades\Request::is('dashboard/users/roles/create') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Users Roles</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
