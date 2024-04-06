<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('production/images/logo.png')}}" type="image/ico" />
    <title>Danh sách báo cáo</title>

    <!-- Bootstrap -->
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link href="{{asset('/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
    <!-- Datatables -->

    <link href="{{asset('/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('/build/css/custom.min.css')}}" rel="stylesheet">
    <style>
        table.table-bordered.dataTable th, table.table-bordered.dataTable td {
            text-align: center;
        }
    </style>
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        @include('layouts.sidebar')

        <!-- top navigation -->
        @include('layouts.top_navigation')
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
{{--                <div class="page-title">--}}
{{--                    <div class="title_left">--}}
{{--                        <h3>Users <small>Some examples to get you started</small></h3>--}}
{{--                    </div>--}}

{{--                    <div class="title_right">--}}
{{--                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">--}}
{{--                            <div class="input-group">--}}
{{--                                <input type="text" class="form-control" placeholder="Search for...">--}}
{{--                                <span class="input-group-btn">--}}
{{--                      <button class="btn btn-secondary" type="button">Go!</button>--}}
{{--                    </span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

                <div class="clearfix"></div>
                @include('layouts.notification')
                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Danh sách báo cáo</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a href="{{route('report.create')}}" style="padding: 0; margin-right: 10px"><button class="btn btn-primary" type="button">Thêm mới</button></a></li>

                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
{{--                                    <li class="dropdown">--}}
{{--                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>--}}
{{--                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">--}}
{{--                                            <a class="dropdown-item" href="#">Settings 1</a>--}}
{{--                                            <a class="dropdown-item" href="#">Settings 2</a>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
                                    <li><a href="{{route('report.index')}}" class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card-box table-responsive">
{{--                                            <p class="text-muted font-13 m-b-30">--}}
{{--                                                DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>--}}
{{--                                            </p>--}}
                                            <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                                <thead>
                                                <tr>
                                                    <th>STT</th>
                                                    <th>Mã báo cáo</th>
                                                    <th>Tiêu đề</th>
                                                    <th>Dự án</th>
                                                    <th>Nhân viên gửi</th>
                                                    <th>Ngày gửi</th>
                                                    <th>File</th>
                                                    <th>Mô tả</th>
                                                    <th>Thao tác</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($reports as $item)
                                                    <tr>
                                                        <td>{{ $loop->index + 1 }}</td>
                                                        <td>{{ $item->code }}</td>
                                                        <td>{{ $item->title }}</td>
                                                        <td>{{ $item->project->name }}</td>
                                                        <td>{{ $item->user->name }}</td>
                                                        <td>{{ $item->created_date }}</td>
                                                        <td>
                                                            <a href="{{ asset('public/file/' . $item->file_path) }}" download>
                                                                {{ $item->file_path }}
                                                            </a>
                                                        </td>
                                                        <td>{{ $item->description }}</td>
                                                        <td>
                                                            <a href="{{route('report.edit', $item->id)}}">
                                                                <button style="margin: 0" class="btn btn-round btn-warning"><i class="fa fa-edit"></i></button>
                                                            </a>
                                                            <form action="{{route('report.destroy', $item->id)}}" method="POST" class="d-inline">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="button" style="margin: 0" class="deleteBtn btn btn-round btn-danger"><i class="fa fa-trash"></i></button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        @include('layouts.footer_content')
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
<!-- iCheck -->
<script src="{{asset('/vendors/iCheck/icheck.min.js')}}"></script>
<!-- Datatables -->
<script src="{{asset('/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
<script src="{{asset('/vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
<script src="{{asset('/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
<script src="{{asset('/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
<script src="{{asset('/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
<script src="{{asset('/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
<script src="{{asset('/vendors/jszip/dist/jszip.min.js')}}"></script>
<script src="{{asset('/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{asset('/vendors/pdfmake/build/vfs_fonts.js')}}"></script>

<!-- Custom Theme Scripts -->
<script src="{{asset('/build/js/custom.min.js')}}"></script>
@include('layouts.swal_delete')

</body>
</html>
