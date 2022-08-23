<!-- Main sidebar -->
<div class="sidebar sidebar-light sidebar-main sidebar-expand-lg">

    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-section">
            <div {{-- class="sidebar-user-material" --}} style="background-color: #292c42">
                <div class="sidebar-section-body">
                    <div class="d-flex">
                        <div class="flex-1">
                            {{-- <button type="button" class="btn btn-outline-light border-transparent btn-icon btn-sm rounded-pill">
										<i class="icon-wrench"></i>
									</button> --}}
                        </div>
                        <a href="#" class="flex-1 text-center"><img
                                src="{{ asset('assets/global_assets/images/placeholders/placeholder.jpg') }}"
                                class="img-fluid rounded-circle shadow-sm" width="80" height="80"
                                alt=""></a>
                        <div class="flex-1 text-right">
                            <button type="button"
                                class="btn btn-outline-light border-transparent btn-icon rounded-pill btn-sm sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
                                <i class="icon-transmission"></i>
                            </button>

                            <button type="button"
                                class="btn btn-outline-light border-transparent btn-icon rounded-pill btn-sm sidebar-mobile-main-toggle d-lg-none">
                                <i class="icon-cross2"></i>
                            </button>
                        </div>
                    </div>

                    <div class="text-center">
                        <h6 class="mb-0 text-white text-shadow-dark mt-3">{{ auth()->user()->name }}</h6>
                        <span
                            class="font-size-sm text-white text-shadow-dark">{{ ucfirst(auth()->user()->roles->isNotEmpty() ? auth()->user()->roles[0]->name : '') }}</span>
                    </div>
                </div>

                <div class="sidebar-user-material-footer">
                    <a href="#user-nav"
                        class="d-flex justify-content-between align-items-center text-shadow-dark dropdown-toggle"
                        data-toggle="collapse"><span>My account</span></a>
                </div>
            </div>

            <div class="collapse border-bottom" id="user-nav">
                <ul class="nav nav-sidebar">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="icon-user-plus"></i>
                            <span>My profile</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('logout') }}" class="nav-link"
                            onclick="event.preventDefault(); document.getElementById('my-form').submit()">
                            <i class="icon-switch2"></i>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="sidebar-section">
            <ul class="nav nav-sidebar" data-nav-type="accordion">

                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link @if (Route::is('dashboard')) active @endif">
                        <i class="icon-home4"></i>
                        <span>
                            Dashboard
                        </span>
                    </a>
                </li>
                @can(['add-permission', 'edit-permission', 'delete-permission', 'view-permission'])
                    <li class="nav-item nav-item-submenu @if (Route::is('permissions.*')) nav-item-open @endif">
                        <a href="#" class="nav-link"><i class="icon-user-lock"></i> <span>Permissions</span></a>
                        <ul class="nav nav-group-sub" data-submenu-title="Permissions"
                            @if (Route::is('permissions.*')) style="display: block" @endif>
                            @can('add-permission')
                                <li class="nav-item"><a href="{{ route('permissions.create') }}"
                                        class="nav-link @if (Route::is('permissions.create')) active @endif">Add Permission</a></li>
                            @endcan
                            @can(['edit-permission', 'delete-permission', 'view-permission'])
                                <li class="nav-item"><a href="{{ route('permissions.index') }}"
                                        class="nav-link @if (Route::is(['permissions.index', 'permissions.edit'])) active @endif">Permission List</a></li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can(['add-role', 'edit-role', 'delete-role', 'view-role'])
                    <li class="nav-item nav-item-submenu @if (Route::is('roles.*')) nav-item-open @endif">
                        <a href="#" class="nav-link"><i class="icon-user-lock"></i> <span>Roles</span></a>
                        <ul class="nav nav-group-sub" data-submenu-title="Roles"
                            @if (Route::is('roles.*')) style="display: block" @endif>
                            @can('add-role')
                                <li class="nav-item"><a href="{{ route('roles.create') }}"
                                        class="nav-link @if (Route::is('roles.create')) active @endif">Add Role</a></li>
                            @endcan
                            @can(['edit-role', 'delete-role', 'view-role'])
                                <li class="nav-item"><a href="{{ route('roles.index') }}"
                                        class="nav-link @if (Route::is(['roles.index', 'roles.edit'])) active @endif">Role List</a></li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can(['add-user', 'edit-user', 'delete-user', 'view-user'])
                    <li class="nav-item nav-item-submenu @if (Route::is('users.*')) nav-item-open @endif">
                        <a href="#" class="nav-link"><i class="icon-users"></i> <span>Users</span></a>
                        <ul class="nav nav-group-sub" data-submenu-title="Users"
                            @if (Route::is('users.*')) style="display: block" @endif>
                            @can('add-user')
                                <li class="nav-item"><a href="{{ route('users.create') }}"
                                        class="nav-link @if (Route::is('users.create')) active @endif">Add User</a></li>
                            @endcan
                            @can(['edit-user', 'delete-user', 'view-user'])
                                <li class="nav-item"><a href="{{ route('users.index') }}"
                                        class="nav-link @if (Route::is(['users.index', 'users.edit'])) active @endif">User List</a></li>
                            @endcan
                        </ul>
                    </li>
                @endcan
            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->

</div>
<!-- /main sidebar -->
