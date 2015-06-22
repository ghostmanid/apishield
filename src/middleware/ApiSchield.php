<?php

namespace App\Http\Middleware;

use Closure;

class ApiSchield
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
        if($request->input('api_key')=='123')
        {
            return response('Okey');
        }
        else
        {
            return response(['status'=>'Error','messenger'=>'Failse Login.']);
        }
        return $next($request);
    }
}
