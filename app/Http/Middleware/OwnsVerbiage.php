<?php

namespace App\Http\Middleware;

use App\Models\Verbiage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Closure;

class OwnsVerbiage
{
    public function handle(Request $request, Closure $next)
    {
        // verbiage.store has no {verbiage} to check
        $verbiage = $request->route('verbiage');

        if ($verbiage instanceof Verbiage && (int) $verbiage->user_id !== (int) Auth::id()) {
            return abort(403);
        }

        return $next($request);
    }
}
