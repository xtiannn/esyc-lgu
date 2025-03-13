<aside class="sidebar-left border-right bg-white " id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>

    <nav class="vertnav navbar-side navbar-light">
        <!-- Logo -->
        <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center"
                href="{{ Auth::user()->role == 'Admin' ? route('dashboard.admin') : route('dashboard.users') }}">
                <img src="{{ asset('assets/images/unified-lgu-logo.png') }}" width="45">
                <div class="brand-title">
                    <br>
                    <span>LGU3 - ESYC</span>
                </div>
            </a>
        </div>

        <!-- Dashboard -->
        <ul class="navbar-nav flex-fill w-100 mb-2 {{ request()->routeIs('dashboard.*') ? 'active' : '' }}">
            <li class="nav-item dropdown">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="fas fa-chart-line"></i>
                    <span class="ml-3 item-text">Dashboard</span>
                </a>
            </li>
        </ul>

        <p class="text-muted-nav nav-heading mt-4 mb-1">
            <span style="font-size: 10.5px; font-weight: bold; font-family: 'Inter', sans-serif;">App</span>
        </p>

        <!-- Emergency System -->
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="#emergency_dd" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fa-solid fa-bell"></i>
                    <span class="ml-3 item-text">Emergency System</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="emergency_dd">
                    <li class="nav-item {{ request()->routeIs('emergency.index') ? 'active' : '' }}">
                        <a class="nav-link pl-3" href="{{ route('emergency.index') }}">
                            <i class="fa-solid fa-bell"></i>
                            <span class="ml-1 item-text">Alerts</span>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('incident.index') ? 'active' : '' }}">
                        <a class="nav-link pl-3" href="{{ route('incident.index') }}">
                            <i class="fa-solid fa-clipboard-list"></i>
                            <span class="ml-1 item-text">Incident Logs</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- Scholarship -->
        <ul class="navbar-nav flex-fill w-100 mb-2 {{ request()->routeIs('scholarship.*') ? 'active' : '' }}">
            <li class="nav-item w-100">
                <a class="nav-link" href="{{ route('scholarship') }}">
                    <i class="fa-solid fa-edit"></i>
                    <span class="ml-3 item-text">Scholarship</span>
                </a>
            </li>
        </ul>

        <!-- Case Management -->
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="#casesModule" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fa-solid fa-briefcase"></i>
                    <span class="ml-3 item-text">Case Management</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="casesModule">
                    <li class="nav-item {{ request()->routeIs('cases.index') ? 'active' : '' }}">
                        <a class="nav-link pl-3" href="{{ route('cases.index') }}">
                            <i class="fa-solid fa-folder-open"></i>
                            <span class="ml-1 item-text">All Cases</span>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('auditLog.index') ? 'active' : '' }}">
                        <a class="nav-link pl-3" href="{{ route('auditLog.index') }}">
                            <i class="fa-solid fa-clock-rotate-left"></i>
                            <span class="ml-1 item-text">Audit Logs</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- Messages -->
        <ul class="navbar-nav flex-fill w-100 mb-2 {{ request()->routeIs('messages.index') ? 'active' : '' }}">
            <li class="nav-item w-100">
                <a class="nav-link" href="{{ route('chat') }}">
                    <i class="fa-solid fa-message"></i>
                    <span class="ml-3 item-text">Messages</span>
                </a>
            </li>
        </ul>

        <!-- User Management (Admins Only) -->
        @if (Auth::check() && Auth::user()->role === 'Admin')
            <p class="text-muted-nav nav-heading mt-4 mb-1">
                <span style="font-size: 10.5px; font-weight: bold; font-family: 'Inter', sans-serif;">
                    USER MANAGEMENT
                </span>
            </p>
            <ul class="navbar-nav flex-fill w-100 mb-2 {{ request()->routeIs('users.index') ? 'active' : '' }}">
                <li class="nav-item w-100">
                    <a class="nav-link" href="{{ route('users.index') }}">
                        <i class="fa-solid fa-users"></i>
                        <span class="ml-3 item-text">Users</span>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav flex-fill w-100 mb-2">
                <li class="nav-item w-100">
                    <a class="nav-link" href="#">
                        <i class="fas fa-history"></i>
                        <span class="ml-3 item-text">Audit Trail</span>
                    </a>
                </li>
            </ul>
        @endif

        <!-- Settings -->
        <p class="text-muted-nav nav-heading mt-4 mb-1">
            <span style="font-size: 10.5px; font-weight: bold; font-family: 'Inter', sans-serif;">SETTINGS</span>
        </p>

        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="#ddAnnouncements" data-toggle="collapse" aria-expanded="false"
                    class="dropdown-toggle nav-link">
                    <i class="fa-solid fa-screwdriver-wrench"></i>
                    <span class="ml-3 item-text">Settings</span>
                </a>
                {{-- <ul class="collapse list-unstyled pl-4 w-100 {{ request()->routeIs('announcements.index') ? 'active' : '' }}"
                    id="ddAnnouncements">
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{ route('announcements.index') }}">
                            <i class="fa-solid fa-bullhorn"></i>
                            <span class="ml-1 item-text">Announcements</span>
                        </a>
                    </li>
                </ul> --}}
            </li>
        </ul>

        <!-- Announcements -->
        <ul class="navbar-nav flex-fill w-100 mb-2 {{ request()->routeIs('announcements.index') ? 'active' : '' }}">
            <li class="nav-item w-100">
                <a class="nav-link" href="{{ route('announcements.index') }}">
                    <i class="fa-solid fa-bullhorn"></i>
                    <span class="ml-3 item-text">Announcements</span>
                </a>
            </li>
        </ul>
    </nav>
</aside>
