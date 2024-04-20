<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('production/images/logo.png')}}" type="image/ico" />
    <title>Danh sách dự án</title>

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
            white-space: nowrap;
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

                <div class="clearfix"></div>
                @include('layouts.notification')
                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Danh sách dự án</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    @if(Auth::user()->role != 'member')
                                        <li><a href="{{route('project.create')}}" style="padding: 0; margin-right: 10px"><button class="btn btn-primary" type="button">Thêm mới</button></a></li>
                                    @endif
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li><a href="{{route('project.index')}}" class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card-box table-responsive">
                                            <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                                <thead>
                                                <tr>
                                                    <th>STT</th>
                                                    <th>Mã dự án</th>
                                                    <th>Tên dự án</th>
                                                    <th>Nhân viên tham gia</th>
                                                    <th>Thời gian thực hiện</th>
                                                    <th>Trạng thái</th>
                                                    <th>Mô tả</th>
                                                    <th>Thao tác</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($projects as $item)
                                                    <tr>
                                                        <td>{{ $loop->index + 1 }}</td>
                                                        <td>{{ $item->code }}</td>
                                                        <td>{{ $item->name }}</td>
                                                        <td>
                                                            {{ $item->users->pluck('name')->join(', ') }}
                                                        </td>
                                                        <td>{{ $item->execution_time }}</td>
                                                        <td>
                                                            @if($item->status == 'started')
                                                                <button type="button" class="btn btn-success btn-sm">Bắt đầu</button>
                                                            @elseif($item->status == 'progress')
                                                                <button type="button" class="btn btn-info btn-sm">Đang triển khai</button>
                                                            @elseif($item->status == 'complete')
                                                                <button type="button" class="btn btn-secondary btn-sm">Hòan thành</button>
                                                            @endif
                                                        </td>
                                                        <td>{{ $item->description }}</td>
                                                        <td style="display: flex; justify-content: space-between;">
                                                            @if(Auth::user()->role != 'member')
                                                            <a href="{{route('project.edit', $item->id)}}">
                                                                <button style="margin: 0" class="btn btn-round btn-warning"><i class="fa fa-edit"></i></button>
                                                            </a>
                                                            <form action="{{route('project.destroy', $item->id)}}" method="POST" class="d-inline">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="button" style="margin: 0" class="deleteBtn btn btn-round btn-danger"><i class="fa fa-trash"></i></button>
                                                            </form>
                                                            @endif
                                                        </td>
                                                    
                                                    </tr>
                                                    <tr>
                                                        <td>Tiến độ dự án</td>
                                                        <td align="right" colspan="7">
                                                            <div style="background:#F1F1F1">
                                                                <div id="mydiv" style="color:white;background:#2196F3;height:16px;width:{{ ($loop->index + 1) + 15}}%">{{ ($loop->index + 1) + 15}}%</div>
                                                            </div>
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
