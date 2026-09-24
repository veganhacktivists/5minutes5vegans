<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnforceHttps
{
    /**
     * In production, Cloudflare upgrades visitors to HTTPS and the proxy then
     * talks to the app over plain http. Treat each request as HTTPS so links
     * and redirects built from it (like the language redirect on /) use https,
     * and tell browsers to stay on HTTPS for the next year.
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (! app()->environment('production')) {
            return $next($request);
        }

        $request->server->set('HTTPS', 'on');

        $response = $next($request);
        $response->headers->set('Strict-Transport-Security', 'max-age=31536000');

        return $response;
    }
}
