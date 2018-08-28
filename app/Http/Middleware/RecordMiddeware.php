<?php

namespace App\Http\Middleware;

use Closure;

class RecordMiddeware
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
        
        // 获取路径
        $path = $request->path();
        file_put_contents('./request.log', $path."\r\n", FILE_APPEND);
        return $next($request);
    }
}
