<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AgentIsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if( $request->session()->get('isAdmin') === true)
            return $next($request);
        else
            return redirect('/')->with(['warning'=>'Access Denied']);            
    }
}
