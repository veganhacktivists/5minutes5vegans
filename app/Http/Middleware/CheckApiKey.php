<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckApiKey
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $expected = config('services.api_key');
        $apiKey = $request->all()['api-key'] ?? $request->header('X-API-KEY');

        // Reject when no key is configured (e.g. API_KEY empty or absent under
        // config:cache) so a null/empty supplied key can never authenticate.
        if (empty($expected) || !is_string($apiKey) || !hash_equals($expected, $apiKey)) {
            return response('Unauthorized', 401);
        }

        return $next($request);
    }
}
