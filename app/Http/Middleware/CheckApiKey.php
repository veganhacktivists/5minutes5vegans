<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckApiKey
{
    public function handle(Request $request, Closure $next): Response
    {
        $expected = config('services.api_key');
        // Header only, so the key stays out of access logs
        $apiKey = $request->header('X-API-KEY');

        // With no key configured, nothing authenticates
        if (empty($expected) || !is_string($apiKey) || !hash_equals($expected, $apiKey)) {
            return response('Unauthorized', 401);
        }

        return $next($request);
    }
}
