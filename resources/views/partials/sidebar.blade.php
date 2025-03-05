 <aside class="sidebar-left border-right bg-white " id="leftSidebar" data-simplebar>
     <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
         <i class="fe fe-x"><span class="sr-only"></span></i>
     </a>

     <nav class="vertnav navbar-side navbar-light">
         <!-- nav bar -->
         <div class="w-100 mb-4 d-flex">
             <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="#">
                 <img src="assets/images/unified-lgu-logo.png" width="45">
                 <div class="brand-title">
                     <br>
                     <span>LGU3 - TEMPLATE</span>
                 </div>
             </a>
         </div>
         <!--Sidebar ito-->

         <ul
             class="navbar-nav {{ Route::currentRouteName() === 'dashboard.users' || Route::currentRouteName() === 'dashboard.admin' ? 'active' : '' }} flex-fill w-100 mb-2">
             <li class="nav-item dropdown">
                 <a class="nav-link" href="{{ route('dashboard') }}">
                     <i class="fas fa-chart-line"></i>
                     <span class="ml-3 item-text">Dashboard</span>
                 </a>
             </li>
         </ul>
         <p class="text-muted-nav nav-heading mt-4 mb-1">
             <span style="font-size: 10.5px; font-weight: bold; font-family: 'Inter', sans-serif;">
                 App
             </span>
         </p>
         <ul class="navbar-nav flex-fill w-100 mb-2">
             <ul class="navbar-nav flex-fill w-100 mb-2">
                 <li class="nav-item dropdown">
                     <a href="#emergency_dd" data-toggle="collapse" aria-expanded="false"
                         class="dropdown-toggle nav-link">
                         <i class="fa-solid fa-bell"></i>
                         <span class="ml-3 item-text">Emergency System</span><span class="sr-only">(current)</span>
                     </a>
                     <ul class="collapse list-unstyled pl-4 w-100" id="emergency_dd">
                         <li class="nav-item active">
                             <a class="nav-link pl-3" href="{{ route('emergency.index') }}">
                                 <i class="fa-solid fa-bell"></i> <span class="ml-1 item-text">Alerts</span>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link pl-3" href="{{ route('incident.index') }}">
                                 <i class="fa-solid fa-clipboard-list"></i> <span class="ml-1 item-text">Incident
                                     Logs</span>
                             </a>
                         </li>
                     </ul>
                 </li>
             </ul>

             <ul
                 class="navbar-nav flex-fill w-100 mb-2 {{ Route::currentRouteName() === 'scholarship.admin' || Route::currentRouteName() === 'scholarship.users' ? 'active' : '' }}">
                 <li class="nav-item w-100">
                     <a class="nav-link" href="{{ route('scholarship') }}">
                         <i class="fa-solid fa-edit"></i>
                         <span class="ml-3 item-text">Scholarship</span>
                     </a>
                 </li>
             </ul>

             <ul class="navbar-nav flex-fill w-100 mb-2">
                 <li class="nav-item dropdown">
                     <a href="#casesModule" data-toggle="collapse" aria-expanded="false"
                         class="dropdown-toggle nav-link">
                         <i class="fa-solid fa-briefcase"></i>
                         <span class="ml-3 item-text">Case Management</span>
                     </a>
                     <ul class="collapse list-unstyled pl-4 w-100" id="casesModule">
                         <li class="nav-item">
                             <a class="nav-link pl-3" href="{{ route('cases.index') }}">
                                 <i class="fa-solid fa-folder-open"></i>
                                 <span class="ml-1 item-text">All Cases</span>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link pl-3" href="{{ route('auditLog.index') }}">
                                 <i class="fa-solid fa-clock-rotate-left"></i>
                                 <span class="ml-1 item-text">Audit Logs</span>
                             </a>
                         </li>
                     </ul>
                 </li>

             </ul>

             <ul
                 class="navbar-nav flex-fill w-100 mb-2 {{ Route::currentRouteName() === '/messages' ? 'active' : '' }}">
                 <li class="nav-item w-100">
                     <a class="nav-link" href="#">
                         <i class="fa-solid fa-message"></i>
                         <span class="ml-3 item-text">Messages</span>
                     </a>
                 </li>
             </ul>

             {{-- <ul class="navbar-nav flex-fill w-100 mb-2">
                 <li class="nav-item dropdown">
                     <a href="#pages" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                         <i class="fa-solid fa-wrench"></i>
                         <span class="ml-3 item-text">Module 5</span><span class="sr-only">(current)</span>
                     </a>
                     <ul class="collapse list-unstyled pl-4 w-100" id="pages">
                         <li class="nav-item active">
                             <a class="nav-link pl-3" href="#"><span class="ml-1 item-text">Sub Module
                                     5.1</span></a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link pl-3" href="#"><span class="ml-1 item-text">Sub Module
                                     5.2</span></a>
                         </li>

                     </ul>
                 </li>
             </ul> --}}

             <!-- User Management Section (only for admins) -->
             @if (Auth::check() && Auth::user()->role === 'Admin')
                 <!-- Adjust role check based on your setup -->
                 <p class="text-muted-nav nav-heading mt-4 mb-1">
                     <span style="font-size: 10.5px; font-weight: bold; font-family: 'Inter', sans-serif;">
                         USER MANAGEMENT
                     </span>
                 </p>
                 <ul class="navbar-nav flex-fill w-100 mb-2">
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

             <p class="text-muted-nav nav-heading mt-4 mb-1">
                 <span style="font-size: 10.5px; font-weight: bold; font-family: 'Inter', sans-serif;">SETTINGS</span>
             </p>

             <ul class="navbar-nav flex-fill w-100 mb-2">
                 <li class="nav-item w-100">
                     <a class="nav-link" href="#">
                         <i class="fa-solid fa-screwdriver-wrench"></i>
                         <span class="ml-3 item-text">Settings</span>
                     </a>
                 </li>
             </ul>
     </nav>
 </aside>
