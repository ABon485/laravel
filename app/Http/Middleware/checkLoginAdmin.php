<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkLoginAdmin
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
        // echo 'Middleware request';
        if(!$this->isLogin()){
            return redirect(route('home'));
        }
        // if($request->is('admin/*')){
        //     echo 'Khu vực quản trị';
        // }
        return $next($request);
    }
    public function isLogin(){
        return false;
    }
}
