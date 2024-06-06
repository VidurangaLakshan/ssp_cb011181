<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && auth()->user()->role->value == 1) {
            return $next($request);
        } else {
            abort('403', 'Unauthorized Access');
        }

    }
}
