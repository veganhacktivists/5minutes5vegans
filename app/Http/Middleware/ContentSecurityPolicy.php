<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Vite;
use Symfony\Component\HttpFoundation\Response;

class ContentSecurityPolicy
{
    // Enforced. For a trial of a change to the policy, switch this to
    // Content-Security-Policy-Report-Only, and browsers will log violations
    // in the console without blocking anything.
    public const HEADER = 'Content-Security-Policy';

    /**
     * Scripts run only with this request's nonce, or when loaded by a script
     * that has it ('strict-dynamic'), which is how reCAPTCHA loads its own.
     * 'https:' and 'unsafe-inline' are only for browsers too old to know
     * nonces. Newer ones ignore them when a nonce is present.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // The Vite dev server's scripts and live reload don't carry the nonce
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
            trim("connect-src 'self' $umami"),
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
