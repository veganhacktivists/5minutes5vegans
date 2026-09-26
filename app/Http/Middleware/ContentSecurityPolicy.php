<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Vite;
use Symfony\Component\HttpFoundation\Response;

class ContentSecurityPolicy
{
    // To trial a policy change, use Content-Security-Policy-Report-Only
    public const HEADER = 'Content-Security-Policy';

    // Where vanilla-icon-picker fetches its icon lists
    private const ICON_SETS = 'https://raw.githubusercontent.com/iconify/icon-sets/';

    // Scripts need this request's nonce, or a nonced script loading them
    // ('strict-dynamic'). 'https:' and 'unsafe-inline' are for old browsers.
    public function handle(Request $request, Closure $next): Response
    {
        // The Vite dev server's scripts carry no nonce
        if (Vite::isRunningHot()) {
            return $next($request);
        }

        Vite::useCspNonce();

        $response = $next($request);
        $response->headers->set(self::HEADER, $this->policy(Vite::cspNonce()));

        return $response;
    }

    private function policy(string $nonce): string
    {
        $umami = $this->origin(config('services.umami.script_url'));

        return implode('; ', [
            "default-src 'self'",
            "script-src 'nonce-$nonce' 'strict-dynamic' https: 'unsafe-inline'",
            "style-src 'self' 'unsafe-inline' https://fonts.googleapis.com https://cdnjs.cloudflare.com",
            "font-src 'self' data: https://fonts.gstatic.com https://cdnjs.cloudflare.com",
            "img-src 'self' data: https://pbs.twimg.com https://abs.twimg.com",
            "media-src 'self' https://video.twimg.com",
            implode(' ', array_filter(['connect-src', "'self'", $umami, self::ICON_SETS])),
            'frame-src https://www.google.com/recaptcha/ https://recaptcha.google.com/recaptcha/',
            "frame-ancestors 'self'",
            "base-uri 'self'",
            "form-action 'self'",
            "object-src 'none'",
        ]);
    }

    private function origin(?string $url): string
    {
        $parts = parse_url((string) $url);

        return isset($parts['scheme'], $parts['host']) ? "{$parts['scheme']}://{$parts['host']}" : '';
    }
}
