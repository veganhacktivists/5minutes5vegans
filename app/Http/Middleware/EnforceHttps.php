<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnforceHttps
{
    // Cloudflare terminates HTTPS, so mark requests secure for https links and redirects
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
