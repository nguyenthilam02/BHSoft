{{--<x-guest-layout>--}}
{{--    <!-- Session Status -->--}}
{{--    <x-auth-session-status class="mb-4" :status="session('status')" />--}}

{{--    <form method="POST" action="{{ route('login') }}">--}}
{{--        @csrf--}}

{{--        <!-- Email Address -->--}}
{{--        <div>--}}
{{--            <x-input-label for="email" :value="__('Email')" />--}}
{{--            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required--}}
{{--                autofocus autocomplete="username" />--}}
{{--            <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password" :value="__('Password')" />--}}

{{--            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required--}}
{{--                autocomplete="current-password" />--}}

{{--            <x-input-error :messages="$errors->get('password')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Remember Me -->--}}
{{--        <div class="block mt-4">--}}
{{--            <label for="remember_me" class="inline-flex items-center">--}}
{{--                <input id="remember_me" type="checkbox"--}}
{{--                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">--}}
{{--                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>--}}
{{--            </label>--}}
{{--        </div>--}}

{{--        <div class="flex items-center justify-end mt-4">--}}
{{--            @if (Route::has('password.request'))--}}
{{--            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"--}}
{{--                href="{{ route('password.request') }}">--}}
{{--                {{ __('Forgot your password?') }}--}}
{{--            </a>--}}
{{--            @endif--}}

{{--            <x-primary-button class="ms-3">--}}
{{--                {{ __('Log in') }}--}}
{{--            </x-primary-button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</x-guest-layout>--}}



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon/favicon.ico')}}">

    <!-- Libs CSS -->


    <link href="{{asset('node_modules/bootstrap-icons/font/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('node_modules/dropzone/dist/dropzone.css')}}" rel="stylesheet">
    <link href="{{asset('node_modules/@mdi/font/css/materialdesignicons.min.css')}}" rel="stylesheet" />
    <link href="{{asset('node_modules/prismjs/themes/prism-okaidia.css')}}" rel="stylesheet">

    <!-- Theme CSS -->
    <!-- build:css @@webRoot/assets/css/theme.min.css -->
    <link rel="stylesheet" href="{{asset('assets/css/theme.css')}}">
    <!-- endbuild -->
    <title>Sign In | Dash Ui - Bootstrap 5 Admin Dashboard Template</title>
</head>

<body class="bg-light">
    <div class="container d-flex flex-column">
        <div class="row align-items-center justify-content-center g-0
        min-vh-100">
            <div class="col-12 col-md-8 col-lg-6 col-xxl-4 py-8 py-xl-0">
                <!-- Card -->
                <div class="card smooth-shadow-md">
                    <!-- Card body -->
                    <div class="card-body p-6">
                        <div class="mb-4">
                            <a href="../index.html"><img src="../assets/images/brand/logo/logo-primary.svg" class="mb-2"
                                    alt=""></a>
                            <p class="mb-6">Please enter your user information.</p>
                        </div>
                        <!-- Form -->
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <!-- Username -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Username or email</label>
                                <input type="email" id="email" class="form-control" name="email"
                                    placeholder="Email address here" required>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <!-- Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" id="password" class="form-control" name="password"
                                    placeholder="**************" required>
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                            <!-- Checkbox -->
                            <div class="d-lg-flex justify-content-between align-items-center
                  mb-4">
                                <div class="form-check custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="remember_me">
                                    <label class="form-check-label" for="rememberme">Remember
                                        me</label>
                                </div>

                            </div>
                            <div>
                                <!-- Button -->
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Sign
                                        in</button>
                                </div>

                                <div class="d-md-flex justify-content-between mt-4">
                                    <div class="mb-2 mb-md-0">
                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="fs-5">Create An
                                                Account </a>
                                        @endif
                                    </div>
                                    <div>
                                        <a href="{{ route('password.request') }}" class="text-inherit
                        fs-5">Forgot your password?</a>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Scripts -->
    <!-- Libs JS -->

    <script src="{{asset('node_modules/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('node_modules/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('node_modules/feather-icons/dist/feather.min.js')}}"></script>
    <script src="{{asset('node_modules/prismjs/prism.js')}}"></script>
    <script src="{{asset('node_modules/apexcharts/dist/apexcharts.min.js')}}"></script>
    <script src="{{asset('node_modules/dropzone/dist/min/dropzone.min.js')}}"></script>
    <script src="{{asset('node_modules/prismjs/plugins/toolbar/prism-toolbar.min.js')}}"></script>
    <script src="{{asset('node_modules/prismjs/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js')}}"></script>




    <!-- Theme JS -->
    <!-- build:js @@webRoot/assets/js/theme.min.js -->
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="{{asset('assets/js/feather.js')}}"></script>
    <script src="{{asset('assets/js/sidebarMenu.js')}}"></script>



    <!-- endbuild -->
</body>

</html>
