{{--<section>--}}
{{--    <header>--}}
{{--        <h2 class="text-lg font-medium text-gray-900">--}}
{{--            {{ __('Update Password') }}--}}
{{--        </h2>--}}

{{--        <p class="mt-1 text-sm text-gray-600">--}}
{{--            {{ __('Ensure your account is using a long, random password to stay secure.') }}--}}
{{--        </p>--}}
{{--    </header>--}}

{{--    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">--}}
{{--        @csrf--}}
{{--        @method('put')--}}

{{--        <div>--}}
{{--            <x-input-label for="update_password_current_password" :value="__('Current Password')" />--}}
{{--            <x-text-input id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />--}}
{{--            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <div>--}}
{{--            <x-input-label for="update_password_password" :value="__('New Password')" />--}}
{{--            <x-text-input id="update_password_password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />--}}
{{--            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <div>--}}
{{--            <x-input-label for="update_password_password_confirmation" :value="__('Confirm Password')" />--}}
{{--            <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />--}}
{{--            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <div class="flex items-center gap-4">--}}
{{--            <x-primary-button>{{ __('Save') }}</x-primary-button>--}}

{{--            @if (session('status') === 'password-updated')--}}
{{--                <p--}}
{{--                    x-data="{ show: true }"--}}
{{--                    x-show="show"--}}
{{--                    x-transition--}}
{{--                    x-init="setTimeout(() => show = false, 2000)"--}}
{{--                    class="text-sm text-gray-600"--}}
{{--                >{{ __('Saved.') }}</p>--}}
{{--            @endif--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</section>--}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('production/images/logo.png')}}" type="image/ico" />

    <title>Dashboard Admin</title>

    <!-- Bootstrap -->
    <link href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{asset('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('build/css/custom.min.css')}}" rel="stylesheet">
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
                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Đổi mật khẩu</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>

                            <div class="x_content">
                                <br/>
                                <form id="demo-form2" method="post" action="{{ route('password.update') }}"
                                      data-parsley-validate class="form-horizontal form-label-left">
                                    @csrf
                                    @method('PUT')
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Mật khẩu cũ <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input id="last-name" name="current_password" type="password" required="required"
                                                   class="form-control">
                                            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Mật khẩu mới <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input id="last-name" name="password" type="password" required="required"
                                                   class="form-control">
                                            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Nhập lại mật khẩu mới <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input id="last-name" name="password_confirmation" type="password" required="required"
                                                   class="form-control">
                                            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                                        </div>
                                    </div>

                                    <div class="ln_solid"></div>
                                    <div class="item form-group">
                                        <div class="col-md-6 col-sm-6 offset-md-3">
                                            {{--                                            <button class="btn btn-primary" type="reset">Reset</button>--}}
                                            <button type="submit" class="btn btn-success">Đổi mật khẩu</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>

{{--                <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">--}}
{{--                    @csrf--}}
{{--                    @method('put')--}}

{{--                    <div>--}}
{{--                        <x-input-label for="update_password_current_password" :value="__('Current Password')" />--}}
{{--                        <x-text-input id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />--}}
{{--                        <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />--}}
{{--                    </div>--}}

{{--                    <div>--}}
{{--                        <x-input-label for="update_password_password" :value="__('New Password')" />--}}
{{--                        <x-text-input id="update_password_password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />--}}
{{--                        <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />--}}
{{--                    </div>--}}

{{--                    <div>--}}
{{--                        <x-input-label for="update_password_password_confirmation" :value="__('Confirm Password')" />--}}
{{--                        <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />--}}
{{--                        <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />--}}
{{--                    </div>--}}

{{--                    <div class="flex items-center gap-4">--}}
{{--                        <x-primary-button>{{ __('Save') }}</x-primary-button>--}}

{{--                        @if (session('status') === 'password-updated')--}}
{{--                            <p--}}
{{--                                x-data="{ show: true }"--}}
{{--                                x-show="show"--}}
{{--                                x-transition--}}
{{--                                x-init="setTimeout(() => show = false, 2000)"--}}
{{--                                class="text-sm text-gray-600"--}}
{{--                            >{{ __('Saved.') }}</p>--}}
{{--                        @endif--}}
{{--                    </div>--}}
{{--                </form>--}}
            </div>
            <!-- /top tiles -->
        </div>
        <!-- /page content -->

        <!-- footer content -->
        @include('layouts.footer_content')
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('vendors/fastclick/lib/fastclick.js')}}"></script>
<!-- NProgress -->
<script src="{{asset('vendors/nprogress/nprogress.js')}}"></script>
<!-- Chart.js -->
<script src="{{asset('vendors/Chart.js/dist/Chart.min.js')}}"></script>
<!-- gauge.js -->
<script src="{{asset('vendors/gauge.js/dist/gauge.min.js')}}"></script>
<!-- bootstrap-progressbar -->
<script src="{{asset('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
<!-- iCheck -->
<script src="{{asset('vendors/iCheck/icheck.min.js')}}"></script>
<!-- Skycons -->
<script src="{{asset('vendors/skycons/skycons.js')}}"></script>
<!-- Flot -->
<script src="{{asset('vendors/Flot/jquery.flot.js')}}"></script>
<script src="{{asset('vendors/Flot/jquery.flot.pie.js')}}"></script>
<script src="{{asset('vendors/Flot/jquery.flot.time.js')}}"></script>
<script src="{{asset('vendors/Flot/jquery.flot.stack.js')}}"></script>
<script src="{{asset('vendors/Flot/jquery.flot.resize.js')}}"></script>
<!-- Flot plugins -->
<script src="{{asset('vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
<script src="{{asset('vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
<script src="{{asset('vendors/flot.curvedlines/curvedLines.js')}}"></script>
<!-- DateJS -->
<script src="{{asset('vendors/DateJS/build/date.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
<script src="{{asset('vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
<script src="{{asset('vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{asset('vendors/moment/min/moment.min.js')}}"></script>
<script src="{{asset('vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

<!-- Custom Theme Scripts -->
<script src="{{asset('build/js/custom.min.js')}}"></script>

</body>
</html>


