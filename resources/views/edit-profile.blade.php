<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('production/images/logo.png')}}" type="image/ico" />
    <title>Sửa thông tin</title>

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
        @include('layouts.sidebar')

        <!-- top navigation -->
        @include('layouts.top_navigation')
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
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger alert-dismissible " role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">×</span>
                            </button>
                            {{$error}}
                        </div>
                    @endforeach
                @endif
                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Sửa thông tin</h2>
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
                                <br/>
                                <form id="demo-form2" action="{{route('staff.update', $item->id)}}" method="POST"
                                      data-parsley-validate class="form-horizontal form-label-left">
                                    @csrf
                                    @method('PUT')
{{--                                    <div class="item form-group">--}}
{{--                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Mã--}}
{{--                                            issue <span class="required">*</span>--}}
{{--                                        </label>--}}
{{--                                        <div class="col-md-6 col-sm-6 ">--}}
{{--                                            <input type="text" id="first-name" name="code" required="required"--}}
{{--                                                   class="form-control" value="{{old('code')}}">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Tên<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="last-name" name="name" required="required"
                                                   class="form-control" value="{{$item->name}}">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Email <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="email" name="email" required="required"
                                                   class="form-control" value="{{$item->email}}">
{{--                                            <input style="display: none; " type="password" name="password" required="required"--}}
{{--                                                   class="form-control" value="12345678">--}}
{{--                                            <input style="display: none; " type="password" name="password_confirmation" required="required"--}}
{{--                                                   class="form-control" value="12345678">--}}
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Giới tính <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <label>
                                                <input type="radio" name="gender" class="flat" value="male" {{$item->gender == 'male' ? 'checked' : ''}} > Nam
                                            </label>
                                            <label>
                                                <input type="radio" name="gender" class="flat" value="female" {{$item->gender == 'female' ? 'checked' : ''}} > Nữ
                                            </label>
                                            <label>
                                                <input type="radio" name="gender" class="flat" value="other" {{$item->gender == 'other' ? 'checked' : ''}} > Khác
                                            </label>
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Số điện thoại <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" name="phone" required="required"
                                                   class="form-control" value="{{$item->phone}}">
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
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Địa chỉ</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <textarea class="resizable_textarea form-control" name="address"
                                                      placeholder="Nhập địa chỉ của bạn tại đây...">{{$item->address}}</textarea>
                                        </div>
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="item form-group">
                                        <div class="col-md-6 col-sm-6 offset-md-3">
                                            {{--                                            <button class="btn btn-primary" type="reset">Reset</button>--}}
                                            <button type="submit" class="btn btn-success">Sửa</button>
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
