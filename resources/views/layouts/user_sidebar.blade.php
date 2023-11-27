<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>
                <li>
                    <a href="{{route('dashboard')}}" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboards">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('jobs')}}" class="waves-effect">
                        <i class="bx bx-chat"></i>
                        <span key="t-tasks">Jobs</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('notifications')}}" class="waves-effect">
                        <i class="bx bx-bell"></i>
                        <span key="t-dashboards">Notifications</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-user-circle"></i>
                        <span key="t-contacts">Settings</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('account')}}" key="t-user-grid">Account</a></li>
                        <li><a href="{{route('logout')}}" key="t-user-list">logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>