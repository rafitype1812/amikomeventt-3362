<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        \Log::info('AdminMiddleware debug:', [
            'url' => $request->fullUrl(),
            'cookies' => $request->cookies->all(),
            'session_id' => $request->session()->getId(),
            'auth_check' => Auth::check(),
            'auth_user' => Auth::user() ? Auth::user()->toArray() : null,
        ]);

        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request);
        }

        return redirect()->route('admin.login')->with('error', 'Anda tidak memiliki hak akses ke halaman ini.');
    }
}
