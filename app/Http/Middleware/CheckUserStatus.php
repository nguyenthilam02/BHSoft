<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Response;

class CheckUserStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && Auth::user()->status == 1) {
            Auth::guard('web')->logout();
            return Redirect::route('login')->with('error', 'Tài khoản của bạn chưa được duyệt, vui lòng liên hệ quản trị viên để duyệt tài khoản của bạn.');
        }

        return $next($request);
    }
}
