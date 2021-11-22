<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class WebHook
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
        return $next($request);
    }
    public function terminate($request, $response)
    {
        try {
            file_put_contents(__DIR__.'/resposta_webhook.txt',json_encode($request->all()));   
         
        } catch (\Throwable $th) {
            file_put_contents(__DIR__.'/erro_webhook.txt',json_encode($th));   
        }
    }
}
