<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Admin_auth
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
        if(!$request->session()->has('USER_ID')){
            $request->session()->flash('error','Access denied');
            return redirect('/Admin/login');
        }
        // else{
            
        //     return redirect('login');
        // }
        return $next($request);
    }
}
