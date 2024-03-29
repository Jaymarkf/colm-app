<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
class AdminDashboard
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(!$request->session()->has('login')){
            return redirect('colm-admin')->with('no_user','You need to login first!');
        }
         return $next($request);
    }
}
