<?php

namespace App\Http\Middleware;

use Closure;

class StagingNovaAuth
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
    	if(auth('nova')->check() || env('ALLOW_ACCESS') == TRUE){
        return $next($request);
		}
    	return redirect('/nova');
    }
}
