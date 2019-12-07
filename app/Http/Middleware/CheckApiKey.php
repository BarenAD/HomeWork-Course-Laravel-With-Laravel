<?php

namespace App\Http\Middleware;

use Closure;

class CheckApiKey
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
        if ($request->Header('x-api-key') !== env('API_KEY', 'NO-KEY')) {
            return response()->json([
                "------000------",
                "----000#000----",
                "----0#####0----",
                "----0#####0----",
                "----0#####0----",
                "-00-0#####0-00-",
                "0##00#####00##0",
                "0#####000#####0",
                "-00000---00000-",
            ], 401);
        }
        return $next($request);
    }
}
