<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DataTables | Gentelella</title>

    <!-- Bootstrap -->
    <link href="{{asset('/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="{{asset('/vendors/google-code-prettify/bin/prettify.min.css')}}" rel="stylesheet">
    <!-- Select2 -->
    <link href="{{asset('/vendors/select2/dist/css/select2.min.css')}}" rel="stylesheet">
    <!-- Switchery -->
    <link href="{{asset('/vendors/switchery/dist/switchery.min.css')}}" rel="stylesheet">
    <!-- starrr -->
    <link href="{{asset('/vendors/starrr/dist/starrr.css')}}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('/build/css/custom.min.css')}}" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="{{asset('production/images/img.jpg')}}" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Xin chào,</span>
                        <h2>John Doe</h2>
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
                                    <li><a href="{{route('project.create')}}">Thêm dự án</a></li>
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
                                    <li><a href="tables.html">Danh sách nhân viên</a></li>
                                    <li><a href="tables_dynamic.html">Thêm nhân viên</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-bar-chart-o"></i> Báo cáo <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="chartjs.html">Danh sách báo cáo</a></li>
                                    <li><a href="chartjs2.html">Thêm báo cáo</a></li>
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

                <!-- /menu footer buttons -->
                {{--                <div class="sidebar-footer hidden-small">--}}
                {{--                    <a data-toggle="tooltip" data-placement="top" title="Settings">--}}
                {{--                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>--}}
                {{--                    </a>--}}
                {{--                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">--}}
                {{--                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>--}}
                {{--                    </a>--}}
                {{--                    <a data-toggle="tooltip" data-placement="top" title="Lock">--}}
                {{--                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>--}}
                {{--                    </a>--}}
                {{--                    <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">--}}
                {{--                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>--}}
                {{--                    </a>--}}
                {{--                </div>--}}
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                    <ul class=" navbar-right">
                        <li class="nav-item dropdown open" style="padding-left: 15px;">
                            <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                <img src="{{asset('production/images/img.jpg')}}" alt="">John Doe
                            </a>
                            <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('profile.edit')}}"> Profile</a>
                                <a class="dropdown-item"  href="javascript:;">
                                    <span class="badge bg-red pull-right">50%</span>
                                    <span>Settings</span>
                                </a>
                                <a class="dropdown-item"  href="javascript:;">Help</a>

                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();
                                                this.closest('form').submit();"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                </form>
                            </div>
                        </li>

{{--                        <li role="presentation" class="nav-item dropdown open">--}}
{{--                            <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">--}}
{{--                                <i class="fa fa-envelope-o"></i>--}}
{{--                                <span class="badge bg-green">6</span>--}}
{{--                            </a>--}}
{{--                            <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="dropdown-item">--}}
{{--                                        <span class="image"><img src="{{asset('production/images/img.jpg')}}" alt="Profile Image" /></span>--}}
{{--                                        <span>--}}
{{--                          <span>John Smith</span>--}}
{{--                          <span class="time">3 mins ago</span>--}}
{{--                        </span>--}}
{{--                                        <span class="message">--}}
{{--                          Film festivals used to be do-or-die moments for movie makers. They were where...--}}
{{--                        </span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="dropdown-item">--}}
{{--                                        <span class="image"><img src="{{asset('production/images/img.jpg')}}" alt="Profile Image" /></span>--}}
{{--                                        <span>--}}
{{--                          <span>John Smith</span>--}}
{{--                          <span class="time">3 mins ago</span>--}}
{{--                        </span>--}}
{{--                                        <span class="message">--}}
{{--                          Film festivals used to be do-or-die moments for movie makers. They were where...--}}
{{--                        </span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="dropdown-item">--}}
{{--                                        <span class="image"><img src="{{asset('production/images/img.jpg')}}" alt="Profile Image" /></span>--}}
{{--                                        <span>--}}
{{--                          <span>John Smith</span>--}}
{{--                          <span class="time">3 mins ago</span>--}}
{{--                        </span>--}}
{{--                                        <span class="message">--}}
{{--                          Film festivals used to be do-or-die moments for movie makers. They were where...--}}
{{--                        </span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="dropdown-item">--}}
{{--                                        <span class="image"><img src="{{asset('production/images/img.jpg')}}" alt="Profile Image" /></span>--}}
{{--                                        <span>--}}
{{--                          <span>John Smith</span>--}}
{{--                          <span class="time">3 mins ago</span>--}}
{{--                        </span>--}}
{{--                                        <span class="message">--}}
{{--                          Film festivals used to be do-or-die moments for movie makers. They were where...--}}
{{--                        </span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <div class="text-center">--}}
{{--                                        <a class="dropdown-item">--}}
{{--                                            <strong>See All Alerts</strong>--}}
{{--                                            <i class="fa fa-angle-right"></i>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
{{--                <div class="page-title">--}}
{{--                    <div class="title_left">--}}
{{--                        <h3>Form Elements</h3>--}}
{{--                    </div>--}}

{{--                    <div class="title_right">--}}
{{--                        <div class="col-md-5 col-sm-5  form-group pull-right top_search">--}}
{{--                            <div class="input-group">--}}
{{--                                <input type="text" class="form-control" placeholder="Search for...">--}}
{{--                                <span class="input-group-btn">--}}
{{--										<button class="btn btn-default" type="button">Go!</button>--}}
{{--									</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Thêm dự án</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
{{--                                    <li class="dropdown">--}}
{{--                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>--}}
{{--                                        <ul class="dropdown-menu" role="menu">--}}
{{--                                            <li><a class="dropdown-item" href="#">Settings 1</a>--}}
{{--                                            </li>--}}
{{--                                            <li><a class="dropdown-item" href="#">Settings 2</a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br />
                                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Mã dự án <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="first-name" required="required" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Tên dự án <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="last-name" name="last-name" required="required" class="form-control">
                                        </div>
                                    </div>
{{--                                    <div class="item form-group">--}}
{{--                                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Middle Name / Initial</label>--}}
{{--                                        <div class="col-md-6 col-sm-6 ">--}}
{{--                                            <input id="middle-name" class="form-control" type="text" name="middle-name">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="item form-group">--}}
{{--                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Gender</label>--}}
{{--                                        <div class="col-md-6 col-sm-6 ">--}}
{{--                                            <div id="gender" class="btn-group" data-toggle="buttons">--}}
{{--                                                <label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">--}}
{{--                                                    <input type="radio" name="gender" value="male" class="join-btn"> &nbsp; Male &nbsp;--}}
{{--                                                </label>--}}
{{--                                                <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">--}}
{{--                                                    <input type="radio" name="gender" value="female" class="join-btn"> Female--}}
{{--                                                </label>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Thời gian thực hiện <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input id="birthday" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                                            <script>
                                                function timeFunctionLong(input) {
                                                    setTimeout(function() {
                                                        input.type = 'text';
                                                    }, 60000);
                                                }
                                            </script>
                                        </div>
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="item form-group">
                                        <div class="col-md-6 col-sm-6 offset-md-3">
                                            <button class="btn btn-primary" type="button">Cancel</button>
{{--                                            <button class="btn btn-primary" type="reset">Reset</button>--}}
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Quản Lý Dự Án by <a href="https://colorlib.com">Nguyễn Thị Lâm</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="{{asset('/vendors/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('/vendors/fastclick/lib/fastclick.js')}}"></script>
<!-- NProgress -->
<script src="{{asset('/vendors/nprogress/nprogress.js')}}"></script>
<!-- bootstrap-progressbar -->
<script src="{{asset('/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
<!-- iCheck -->
<script src="{{asset('/vendors/iCheck/icheck.min.js')}}"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{asset('/vendors/moment/min/moment.min.js')}}"></script>
<script src="{{asset('/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- bootstrap-wysiwyg -->
<script src="{{asset('/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js')}}"></script>
<script src="{{asset('/vendors/jquery.hotkeys/jquery.hotkeys.js')}}"></script>
<script src="{{asset('/vendors/google-code-prettify/src/prettify.js')}}"></script>
<!-- jQuery Tags Input -->
<script src="{{asset('/vendors/jquery.tagsinput/src/jquery.tagsinput.js')}}"></script>
<!-- Switchery -->
<script src="{{asset('/vendors/switchery/dist/switchery.min.js')}}"></script>
<!-- Select2 -->
<script src="{{asset('/vendors/select2/dist/js/select2.full.min.js')}}"></script>
<!-- Parsley -->
<script src="{{asset('/vendors/parsleyjs/dist/parsley.min.js')}}"></script>
<!-- Autosize -->
<script src="{{asset('/vendors/autosize/dist/autosize.min.js')}}"></script>
<!-- jQuery autocomplete -->
<script src="{{asset('/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js')}}"></script>
<!-- starrr -->
<script src="{{asset('/vendors/starrr/dist/starrr.js')}}"></script>
<!-- Custom Theme Scripts -->
<script src="{{asset('/build/js/custom.min.js')}}"></script>

</body>
</html>
