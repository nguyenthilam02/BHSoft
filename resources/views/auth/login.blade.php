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
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login Admin</title>

    <!-- Bootstrap -->
    <link href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{asset('vendors/animate.css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('build/css/custom.min.css')}}" rel="stylesheet">
</head>
<style> 
/* input[type=email] {
  width: 100%;
  padding: 12px 20px;
  background-color: white;
  color: black;
}

input[type=email]:focus {
  background-color: white;
} */
</style>
<body class="login">
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                @include('layouts.notification')
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <a class="center">
                        <img src="http://127.0.0.1:8000/production/images/logo.png" style="width: 50px">
                        <!-- <span>BH SOFT</span> -->
                    </a>
                    <h2 style="color:black;font-size:2em;font-weight:400">Quản lý dự án</h2>
                    <h2 style="color:black;font-weight:700">Đăng nhập</h2>
                    <br></br>
                    
                    <div>
                        <input    
                        class="form-control"
                        placeholder="Email" type="email" name="email" :value="old('email')"
                               required
                               autofocus autocomplete="username"/>
                        <x-input-error :messages="$errors->get('email')" class="mt-2"/>
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="Password" name="password" required
                               autocomplete="current-password"/>
                        <x-input-error :messages="$errors->get('password')" class="mt-2"/>
                    </div>
                    <div align="left">
                        <p class="change_link">
                            <a href="{{ route('password.request') }}" class="to_register"> Quên mật khẩu? </a>
                        </p>
                    </div>
                    <div>
                        <button 
                        class="btn btn-default submit" 
                        type="submit" 
                        style="width: 100%;color: white;font-size: 16px;padding: 8px 32px;background-color: #414DCD;text-align: center;border-radius: 8px;">
                            Đăng nhập
                        </button>
                        {{--<a class="reset_pass" href="#">Lost your password?</a>--}}
                    </div>

                    <div class="clearfix"></div>


                    <div class="separator">
                        <!-- <p class="change_link">
                            <a href="{{ route('password.request') }}" class="to_register"> Quên mật khẩu? </a>
                        </p> -->
                        <p class="change_link">Bạn chưa có tài khoản?
                            <a href="{{ route('register') }}" class="to_register"> Tạo tài khoản mới </a>
                        </p>

                        <div class="clearfix"></div>
                        <br/>
                    </div>
                </form>
            </section>
        </div>


    </div>
</div>
</body>
</html>
