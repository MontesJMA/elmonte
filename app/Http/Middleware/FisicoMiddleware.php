<?php

namespace App\Http\Middleware;

use App\Models\actividad;
use App\Models\fisico;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FisicoMiddleware
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
        $fisicos=fisico::where('user_id',Auth::id())->get();
      //  dd(count($fisicos));
        if (count($fisicos)==0) {
          //  dd(count($fisicos));
            return redirect()->route('fisico.create');
        }
        return $next($request);
    }
}
