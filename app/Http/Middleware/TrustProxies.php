<?php

namespace App\Http\Middleware;

use App\Support\Cloudflare;
use Illuminate\Http\Middleware\TrustProxies as Middleware;
use Illuminate\Http\Request;

class TrustProxies extends Middleware
{
    // Only X-Forwarded-For. EnforceHttps handles https, and a trusted
    // X-Forwarded-Proto of "http" from the proxy would override it.
    protected $headers = Request::HEADER_X_FORWARDED_FOR;

    /**
     * Requests come from Coolify's proxy, which adds the Cloudflare edge it
     * heard from to X-Forwarded-For. Trusting both means $request->ip() skips
     * them and returns the visitor. A request that didn't come through
     * Cloudflare gets its real sender, whatever headers it made up.
     */
    protected function proxies()
    {
        return [...config('services.coolify_proxy_ips'), ...Cloudflare::RANGES];
    }
}
