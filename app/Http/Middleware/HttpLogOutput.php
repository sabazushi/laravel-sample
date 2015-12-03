<?php

namespace App\Http\Middleware;

use Closure;
use Log;

class HttpLogOutput
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
        Log::info('before');
        $response = $next($request);
        Log::info('after');
        return $response;
    }
}
