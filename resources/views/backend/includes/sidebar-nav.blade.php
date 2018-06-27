<div class="main-menu menu-static menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="{{ (\Request::route()->getName() == 'admin') ? 'active' : '' }} nav-item">
                <a href="{{route('admin')}}">
                    <i class="la la-home"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">Dashboard</span>
                </a>
            </li>
            @role('superadministrator')
            <li  class="nav-item">
                <a href="#"><i class="la la-television"></i>
                    <span class="menu-title" data-i18n="nav.templates.main">User Management</span>
                </a>
                <ul class="menu-content">
                    <li class="{{ (request()->is('admin/permission*') ? 'active' : '') }}">
                        <a class="menu-item" href="{{route('permission.index')}}" data-i18n="nav.templates.vert.main">Permission</a>
                    </li>
                    <li class="{{ (request()->is('admin/roles*') ? 'active' : '') }}">
                        <a class="menu-item" href="{{route('roles.index')}}" data-i18n="nav.templates.horz.main">Roles</a>
                        {{--<ul class="menu-content">--}}
                            {{--<li><a class="menu-item" href="../horizontal-menu-template" data-i18n="nav.templates.horz.classic">Classic</a>--}}
                            {{--</li>--}}
                            {{--<li><a class="menu-item" href="../horizontal-menu-template-nav" data-i18n="nav.templates.horz.top_icon">Full Width</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    </li>
                    <li class="{{ (request()->is('admin/users*') ? 'active' : '') }}">
                        <a class="menu-item" href="{{route('users.index')}}" data-i18n="nav.templates.vert.main">Users</a>
                    </li>
                </ul>
            </li>
            @endrole



            {{--<li class=" navigation-header">--}}
                {{--<span data-i18n="nav.category.layouts">Layouts</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"--}}
                                                                        {{--data-placement="right" data-original-title="Layouts"></i>--}}
            {{--</li>--}}


        </ul>
    </div>
</div>