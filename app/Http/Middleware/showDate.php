<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class showDate
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
        echo "Fecha: " . date("d") . " del " . date("m") . " de " . date("Y") . " - Hora: " . date("H:i:s");
        echo "<br>";

        return $next($request);
    }
}
