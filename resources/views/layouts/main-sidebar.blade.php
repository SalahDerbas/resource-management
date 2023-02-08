<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="brand-link">
        <img src="{{asset('assets/img/Logo.png')}}" alt="SD Logo" class="brand-image img-circle elevation-3" style="opacity: .8">

        <span class="brand-text font-weight-light">Employee Trello</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">




        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="{{route('home')}}" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('Employees.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-user-plus"></i>
                        <p>
                        Employees/Users
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('Projects.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                         Projects
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('Tasks.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                        Tasks
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('Roles.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                        Roles
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('Departments.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                        Departments
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('Designations.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                        Designations
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('Tickets.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                         Tickets
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('Leaves.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        {{-- <i class="nav-icon fas fa-user"></i> --}}
                        <p>
                         Leaves
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('Performances.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                         Performance
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('Holidays.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-umbrella"></i>
                        {{-- <i class="nav-icon fas fa-user"></i> --}}
                        <p>
                        Holidays
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('Attendances.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-paper-plane"></i>
                        {{-- <i class="nav-icon fas fa-user"></i> --}}
                        <p>
                        Attendances
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('Events.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-trophy"></i>
                        {{-- <i class="nav-icon fas fa-user"></i> --}}
                        <p>
                         Events
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('Meetings.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-restroom"></i>
                        {{-- <i class="nav-icon fas fa-user"></i> --}}
                        <p>
                         Meetings
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('Reports.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-search-plus"></i>
                        {{-- <i class="nav-icon fas fa-user"></i> --}}
                        <p>
                        Reports
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('Companys.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-star"></i>
                        {{-- <i class="nav-icon fas fa-user"></i> --}}
                        <p>
                         Company Information
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('PushNotifications.index')}}" class="nav-link">
                        <i class="nav-icon far fa-bell"></i>
                        <p>
                        Push Notifications
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('Settings.index')}}" class="nav-link">
                        <i class="nav-icon  fas fa-wrench"></i>
                        {{-- <i class="nav-icon fas fa-user"></i> --}}
                        <p>
                         Settings
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('Board')}}" class="nav-link">
                        <i class="nav-icon  fas fa-user"></i>
                        <p>
                            Board
                        </p>
                    </a>
                </li>
                










            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
