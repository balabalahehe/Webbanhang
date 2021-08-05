<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class checkAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $account = Auth::guard('admin')->check();
        // dd($account);
        if($account){
            return $next($request);
        } else {
            return redirect('/admin/login');
        }
    }
}
