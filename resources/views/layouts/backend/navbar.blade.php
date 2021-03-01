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
                <li>
                    {{-- @permission('manage-posts|manage-category|manage-tags') --}}
                    <a href="#" class="waves-effect"><i class="mdi mdi-file mdi-24px text-info"></i><span> Post <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    {{-- @endpermission --}}
                    <ul class="submenu">
                        {{-- @permission('manage-posts') --}}
                        <li class="#">
                            <a href="#"><i class="mdi mdi-notebook-multiple text-warning"></i> All Post</a>
                        </li>
                        {{-- @endpermission --}}
                        {{-- @permission('manage-category') --}}
                        <li>
                            <a href="#"><i class="mdi mdi-bookmark-multiple text-warning"></i> Category</a>
                        </li>
                        {{-- @endpermission --}}
                        {{-- @permission('manage-tags') --}}
                        <li>
                            <a href="#"><i class="fa fa-tags text-warning"></i> Tags</a>
                        </li>
                        {{-- @endpermission --}}
                    </ul>
                </li>
                <li>
                    {{-- @permission('manage-product|manage-product-category') --}}
                    <a href="#" class="waves-effect"><i class="mdi mdi-pinterest mdi-24px text-info"></i><span> Product <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    {{-- @endpermission --}}
                    <ul class="submenu">
                        {{-- @permission('manage-product') --}}
                        <li class="{{ set_active_navbar(['product.index', 'product.create', 'product.edit'])}}">
                            <a href="#" class="waves-effect">
                                <i class="mdi mdi-pinterest-box mdi-18px text-warning"></i><span class="badge badge-success badge-pill float-right"></span> <span> Product</span>
                            </a>
                        </li>
                        {{-- @endpermission --}}
                        {{-- @permission('manage-product-category') --}}
                        <li>
                            <a href="#" class="waves-effect">
                                <i class="mdi mdi-pinterest mdi-18px text-warning"></i><span class="badge badge-success badge-pill float-right"></span> <span> Product Category </span>
                            </a>
                        </li>
                        {{-- @endpermission --}}
                    </ul>
                </li>
                <li>
                    {{-- @permission('manage-page|manage-page-component') --}}
                    <a href="#" class="waves-effect"><i class="mdi mdi-pinterest-box mdi-24px text-info"></i><span> Page <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    {{-- @endpermission --}}
                    <ul class="submenu">
                        {{-- @permission('manage-page') --}}
                        <li>
                            <a href="#" class="waves-effect">
                                <i class="mdi mdi-book-open-page-variant mdi-18px text-warning"></i><span class="badge badge-success badge-pill float-right"></span> <span> Page</span>
                            </a>
                        </li>
                        {{-- @endpermission --}}
                        {{-- @permission('manage-page-component') --}}
                        <li class="{{ set_active_navbar(['page-component.index', 'page-component.create', 'page-component.edit'])}}">
                            <a href="#" class="waves-effect {{ set_active_navbar(['page-component.index', 'page-component.create', 'page-component.edit'])}}">
                                <i class="mdi mdi-book-variant mdi-18px text-warning"></i><span class="badge badge-success badge-pill float-right"></span> <span> Page Component</span>
                            </a>
                        </li>
                        {{-- @endpermission --}}
                    </ul>
                </li>
                <li>
                    {{-- @permission('manage-customer|manage-testimony-customer') --}}
                    <a href="#" class="waves-effect"><i class="mdi mdi-account-group mdi-24px text-info"></i><span> Customer <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    {{-- @endpermission --}}
                    <ul class="submenu">
                        {{-- @permission('manage-customer') --}}
                        <li class="{{ set_active_navbar(['customer.index', 'customer.create', 'customer.edit'])}}">
                            <a href="#" class="waves-effect {{ set_active_navbar(['customer.index', 'customer.create', 'customer.edit'])}}">
                                <i class="mdi mdi-account mdi-18px text-warning"></i><span class="badge badge-success badge-pill float-right"></span> <span> Customer</span>
                            </a>
                        </li>
                        {{-- @endpermission --}}
                        {{-- @permission('manage-testimony-customer') --}}
                        <li class="{{ set_active_navbar(['testimony-customer.index', 'testimony-customer.create', 'testimony-customer.edit'])}}">
                            <a href="#" class="waves-effect {{ set_active_navbar(['testimony-customer.index', 'testimony-customer.create', 'testimony-customer.edit'])}}">
                                <i class="mdi mdi-account-badge-horizontal mdi-18px text-warning"></i><span class="badge badge-success badge-pill float-right"></span> <span> Testimony Customer</span>
                            </a>
                        </li>
                        {{-- @endpermission --}}
                    </ul>
                </li>

                {{-- @permission('manage-banner') --}}
                <li class="{{ set_active_navbar(['banner.index', 'banner.create', 'banner.edit'])}}">
                    <a href="#" class="waves-effect {{ set_active_navbar(['banner.index', 'banner.create', 'banner.edit'])}}">
                        <i class="mdi mdi-bootstrap mdi-24px text-info"></i><span class="badge badge-success badge-pill float-right"></span> <span> Banner</span>
                    </a>
                </li>
                {{-- @endpermission --}}
            </ul>

            <ul class="metismenu" id="management">
            {{-- @permission('manage-setting|manage-module|manage-permissions|manage-role|manage-user') --}}
                <li class="menu-title">Management</li>
            {{-- @endpermission --}}
            {{-- @permission('manage-setting') --}}
                <li class="#">
                    <a class="nav-link" href="#"><i class="mdi mdi-settings-outline mdi-24px text-warning">
                        </i> <span>{{  __('Pengaturan') }} </span></a>
                </li>
            {{-- @endpermission --}}
            {{-- @permission('manage-module') --}}
                <li>
                    <a href="{{ route('module.index') }}" class="waves-effect {{ set_active_navbar(['module.index', 'module.edit'])}}">
                        <i class="mdi mdi-database-check mdi-24px text-warning"></i><span> Module </span>
                    </a>
                </li>
            {{-- @endpermission() --}}
            {{-- @permission('manage-permissions') --}}
            <li class="{{ set_active_navbar(['permission.index', 'permission.edit'])}}">
                <a href="{{ route('permission.index') }}" class="waves-effect {{ set_active_navbar(['permission.index', 'permission.edit'])}}">
                    <i class="mdi mdi-security mdi-24px text-warning"></i><span class="badge badge-success badge-pill float-right"></span> <span> Permission </span>
                </a>
            </li>
            {{-- @endpermission --}}
            {{-- @permission('manage-role') --}}
            <li class="{{ set_active_navbar(['role.index', 'role.edit', 'role.create'])}}">
                <a href="{{ route('role.index') }}" class="waves-effect {{ set_active_navbar(['role.index', 'role.edit', 'role.create'])}}">
                    <i class="mdi mdi-arrow-decision-outline mdi-24px text-warning"></i><span class="badge badge-success badge-pill float-right"></span> <span> Role </span>
                </a>
            </li>
            {{-- @endpermission --}}
            {{-- @permission('manage-pengguna') --}}
            <li class="{{ set_active_navbar(['user.index', 'user.edit', 'user.create', 'reset.password'])}}">
                <a href="{{ route('user.index') }}" class="waves-effect {{ set_active_navbar(['user.index', 'user.edit', 'user.create', 'reset.password'])}}">
                    <i class="mdi mdi-account-key-outline mdi-24px text-warning"></i><span class="badge badge-success badge-pill float-right"></span> <span> Pengguna </span>
                </a>
            </li>
            {{-- @endpermission --}}
            </ul>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->

</div>
