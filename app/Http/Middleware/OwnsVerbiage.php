<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Closure;

class OwnsVerbiage
{
    public function handle(Request $request, Closure $next, Verbiage $verbiage = null)
    {
        if( is_null($verbiage) || $verbiage->user->id == Auth::id() ) {
            return $next($request);
        }

        return abort(403);
    }
}
