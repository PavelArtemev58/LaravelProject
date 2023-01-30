<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VisitsCounter
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
        if(!$request->session()->has('count')){
            $request->session()->put('count', 1);
        } else {
            $count = session('count') + 1;
            session(['count'=>$count]);
        }
        
        return $next($request);
    }
}
