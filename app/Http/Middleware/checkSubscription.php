<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkSubscription
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

        if(!$request->user()->subscribed('main')){
            return redirect('payment');
        }

        return $next($request);
    }
}
