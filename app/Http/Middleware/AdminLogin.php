<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!session()->has('user')) {
            return redirect('/admin');
        } else {
            $user = User::where('email', $request->session()->get('user'))->first();
            if ($user->remember_token != $request->session()->get('token')) {
                return redirect('/admin');
            }
            return $next($request);
        }
    }
}
