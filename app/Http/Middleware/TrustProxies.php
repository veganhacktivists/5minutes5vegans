<?php

namespace App\Http\Middleware;

use App\Support\Cloudflare;
use Illuminate\Http\Middleware\TrustProxies as Middleware;
use Illuminate\Http\Request;

class TrustProxies extends Middleware
{
    // Not X-Forwarded-Proto: the proxy's "http" would override EnforceHttps
    protected $headers = Request::HEADER_X_FORWARDED_FOR;

    // Coolify's proxy and Cloudflare, so $request->ip() is the visitor
    protected function proxies()
    {
        return [...config('services.coolify_proxy_ips'), ...Cloudflare::RANGES];
    }
}
