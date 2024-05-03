<?php

namespace App\Http\Middleware;

use Closure;

class SetLocalization
{

    /**
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     *
     * @return Response
     */
    public function handle($request, Closure $next)
    {
      
        
        app()->setLocale($request->segment(1));
        return $next($request);
    }

}
