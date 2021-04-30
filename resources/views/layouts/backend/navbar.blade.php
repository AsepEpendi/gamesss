<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu" id="side-menu">
                <li class="menu-title">Menu</li>
                <li>
                    <a href="{{ route('home') }}" class="waves-effect">
                        <i class="mdi mdi-home-account mdi-24px text-info"></i><span class="badge badge-success badge-pill float-right"></span> <span> Dashboard </span>
                    </a>
                </li>
                @permission('manage-banner')
                <li class="{{ set_active_navbar(['banner.index', 'banner.create', 'banner.edit'])}}">
                    <a href="{{ route('banner.index') }}" class="waves-effect {{ set_active_navbar(['banner.index', 'banner.create', 'banner.edit'])}}">
                        <i class="mdi mdi-bootstrap mdi-24px text-info"></i><span class="badge badge-success badge-pill float-right"></span> <span> Banner</span>
                    </a>
                </li>
                @endpermission
                @permission('manage-e-sport-category')
                <li class="{{ set_active_navbar(['e-sport-category.index', 'e-sport-category.create', 'e-sport-category.edit'])}}">
                    <a href="{{ route('e-sport-category.index') }}" class="waves-effect {{ set_active_navbar(['e-sport-category.index', 'e-sport-category.create', 'e-sport-category.edit'])}}">
                        <i class="mdi mdi-library mdi-24px text-info"></i><span class="badge badge-success badge-pill float-right"></span> <span> E-Sport Category</span>
                    </a>
                </li>
                @endpermission
                @permission('manage-e-sport-team')
                <li class="{{ set_active_navbar(['e-sport-team.index', 'e-sport-team.create', 'e-sport-team.edit'])}}">
                    <a href="{{ route('e-sport-team.index') }}" class="waves-effect {{ set_active_navbar(['e-sport-team.index', 'e-sport-team.create', 'e-sport-team.edit'])}}">
                        <i class="mdi mdi-bootstrap mdi-24px text-info"></i><span class="badge badge-success badge-pill float-right"></span> <span> E-Sport Team</span>
                    </a>
                </li>
                @endpermission
                @permission('manage-channel')
                <li class="{{ set_active_navbar(['channel.index', 'channel.create', 'channel.edit'])}}">
                    <a href="{{ route('channel.index') }}" class="waves-effect {{ set_active_navbar(['channel.index', 'channel.create', 'channel.edit'])}}">
                        <i class="mdi mdi-youtube mdi-24px text-info"></i><span class="badge badge-success badge-pill float-right"></span> <span> Channels</span>
                    </a>
                </li>
                @endpermission
                @permission('manage-schedule')
                <li class="{{ set_active_navbar(['schedule.index', 'schedule.create', 'schedule.edit'])}}">
                    <a href="{{ route('schedule.index') }}" class="waves-effect {{ set_active_navbar(['schedule.index', 'schedule.create', 'schedule.edit'])}}">
                        <i class="mdi mdi-timetable mdi-24px text-info"></i><span class="badge badge-success badge-pill float-right"></span> <span> Schedules</span>
                    </a>
                </li>
                @endpermission
            </ul>

            <ul class="metismenu" id="management">
            @permission('manage-pengaturan|manage-module|manage-permissions|manage-role|manage-pengguna')
                <li class="menu-title">Management</li>
            @endpermission

            @permission('manage-role')
            <li class="{{ set_active_navbar(['role.index', 'role.edit', 'role.create'])}}">
                <a href="{{ route('role.index') }}" class="waves-effect {{ set_active_navbar(['role.index', 'role.edit', 'role.create'])}}">
                    <i class="mdi mdi-arrow-decision-outline mdi-24px text-warning"></i><span class="badge badge-success badge-pill float-right"></span> <span> Role </span>
                </a>
            </li>
            @endpermission
            @permission('manage-module')
            <li>
                <a href="{{ route('module.index') }}" class="waves-effect {{ set_active_navbar(['module.index', 'module.edit'])}}">
                    <i class="mdi mdi-database-check mdi-24px text-warning"></i><span> Module </span>
                </a>
            </li>
            @endpermission()
            @permission('manage-pengguna')
            <li class="{{ set_active_navbar(['user.index', 'user.edit', 'user.create', 'reset.password', 'user.resetpass'])}}">
                <a href="{{ route('user.index') }}" class="waves-effect {{ set_active_navbar(['user.index', 'user.edit', 'user.create', 'reset.password', 'user.resetpass'])}}">
                    <i class="mdi mdi-account-key-outline mdi-24px text-warning"></i><span class="badge badge-success badge-pill float-right"></span> <span> Pengguna </span>
                </a>
            </li>
            @endpermission
            @permission('manage-permissions')
            <li class="{{ set_active_navbar(['permission.index', 'permission.edit'])}}">
                <a href="{{ route('permission.index') }}" class="waves-effect {{ set_active_navbar(['permission.index', 'permission.edit'])}}">
                    <i class="mdi mdi-security mdi-24px text-warning"></i><span class="badge badge-success badge-pill float-right"></span> <span> Permission </span>
                </a>
            </li>
            @endpermission
            @permission('manage-pengaturan')
                <li class="#">
                    <a class="nav-link" href="{{ route('settings') }}"><i class="mdi mdi-settings-outline mdi-24px text-warning">
                        </i> <span>{{  __('Pengaturan') }} </span>
                    </a>
                </li>
            @endpermission
            </ul>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->
</div>
