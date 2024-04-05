<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><img src="{{asset('production/images/logo.png')}}" style="width: 50px"> <span>BH SOFT</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="{{asset('production/images/img.jpg')}}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Xin chào,</span>
                <h2>{{ Auth::user()->name }}</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <li><a href="{{route('dashboard')}}"><i class="fa fa-home"></i> Home
                            {{--                                    <span class="fa fa-chevron-down"></span>--}}
                        </a>
                        {{--                                <ul class="nav child_menu">--}}
                        {{--                                    <li><a href="index.html">Dashboard</a></li>--}}
                        {{--                                    <li><a href="index2.html">Dashboard2</a></li>--}}
                        {{--                                    <li><a href="index3.html">Dashboard3</a></li>--}}
                        {{--                                </ul>--}}
                    </li>
                    <li><a><i class="fa fa-edit"></i> Dự án <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('project.index')}}">Danh sách dự án</a></li>
                            @if(Auth::user()->role != 'member')
                            <li><a href="{{route('project.create')}}">Thêm dự án</a></li>
                            @endif
                            {{--                                    <li><a href="form_validation.html">Form Validation</a></li>--}}
                            {{--                                    <li><a href="form_wizards.html">Form Wizard</a></li>--}}
                            {{--                                    <li><a href="form_upload.html">Form Upload</a></li>--}}
                            {{--                                    <li><a href="form_buttons.html">Form Buttons</a></li>--}}
                        </ul>
                    </li>
                    <li><a><i class="fa fa-desktop"></i> Issue <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('issue.index')}}">Danh sách issue</a></li>
                            <li><a href="{{route('issue.create')}}">Thêm issue</a></li>
                            {{--                                    <li><a href="typography.html">Typography</a></li>--}}
                            {{--                                    <li><a href="icons.html">Icons</a></li>--}}
                            {{--                                    <li><a href="glyphicons.html">Glyphicons</a></li>--}}
                            {{--                                    <li><a href="widgets.html">Widgets</a></li>--}}
                            {{--                                    <li><a href="invoice.html">Invoice</a></li>--}}
                            {{--                                    <li><a href="inbox.html">Inbox</a></li>--}}
                            {{--                                    <li><a href="calendar.html">Calendar</a></li>--}}
                        </ul>
                    </li>
                    <li><a><i class="fa fa-table"></i> Nhân viên <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('staff.index')}}">Danh sách nhân viên</a></li>
                            @if(Auth::user()->role == 'admin')
                            <li><a href="{{route('staff.create')}}">Thêm nhân viên</a></li>
                            @endif
                        </ul>
                    </li>
                    <li><a><i class="fa fa-bar-chart-o"></i> Báo cáo <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('report.index')}}">Danh sách báo cáo</a></li>
                            <li><a href="{{route('report.create')}}">Thêm báo cáo</a></li>
                            {{--                                    <li><a href="morisjs.html">Moris JS</a></li>--}}
                            {{--                                    <li><a href="echarts.html">ECharts</a></li>--}}
                            {{--                                    <li><a href="other_charts.html">Other Charts</a></li>--}}
                        </ul>
                    </li>
                    {{--                            <li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>--}}
                    {{--                                <ul class="nav child_menu">--}}
                    {{--                                    <li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>--}}
                    {{--                                    <li><a href="fixed_footer.html">Fixed Footer</a></li>--}}
                    {{--                                </ul>--}}
                    {{--                            </li>--}}
                </ul>
            </div>
            {{--                    <div class="menu_section">--}}
            {{--                        <h3>Live On</h3>--}}
            {{--                        <ul class="nav side-menu">--}}
            {{--                            <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>--}}
            {{--                                <ul class="nav child_menu">--}}
            {{--                                    <li><a href="e_commerce.html">E-commerce</a></li>--}}
            {{--                                    <li><a href="project.html">Projects</a></li>--}}
            {{--                                    <li><a href="project_detail.html">Project Detail</a></li>--}}
            {{--                                    <li><a href="contacts.html">Contacts</a></li>--}}
            {{--                                    <li><a href="profile.html">Profile</a></li>--}}
            {{--                                </ul>--}}
            {{--                            </li>--}}
            {{--                            <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>--}}
            {{--                                <ul class="nav child_menu">--}}
            {{--                                    <li><a href="page_403.html">403 Error</a></li>--}}
            {{--                                    <li><a href="page_404.html">404 Error</a></li>--}}
            {{--                                    <li><a href="page_500.html">500 Error</a></li>--}}
            {{--                                    <li><a href="plain_page.html">Plain Page</a></li>--}}
            {{--                                    <li><a href="login.html">Login Page</a></li>--}}
            {{--                                    <li><a href="pricing_tables.html">Pricing Tables</a></li>--}}
            {{--                                </ul>--}}
            {{--                            </li>--}}
            {{--                            <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>--}}
            {{--                                <ul class="nav child_menu">--}}
            {{--                                    <li><a href="#level1_1">Level One</a>--}}
            {{--                                    <li><a>Level One<span class="fa fa-chevron-down"></span></a>--}}
            {{--                                        <ul class="nav child_menu">--}}
            {{--                                            <li class="sub_menu"><a href="level2.html">Level Two</a>--}}
            {{--                                            </li>--}}
            {{--                                            <li><a href="#level2_1">Level Two</a>--}}
            {{--                                            </li>--}}
            {{--                                            <li><a href="#level2_2">Level Two</a>--}}
            {{--                                            </li>--}}
            {{--                                        </ul>--}}
            {{--                                    </li>--}}
            {{--                                    <li><a href="#level1_2">Level One</a>--}}
            {{--                                    </li>--}}
            {{--                                </ul>--}}
            {{--                            </li>--}}
            {{--                            <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>--}}
            {{--                        </ul>--}}
            {{--                    </div>--}}

        </div>
        <!-- /sidebar menu -->

    </div>
</div>
