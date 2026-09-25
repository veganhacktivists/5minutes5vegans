<?php

namespace App\Http\Middleware;

use App\Support\Cloudflare;
use Closure;
use Illuminate\Http\Middleware\TrustProxies as Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\IpUtils;

class TrustProxies extends Middleware
{
    /**
     * The trusted proxies for this application.
     *
     * @var array|string
     */
    protected $proxies;

    /**
     * The headers that should be used to detect proxies.
     *
     * @var int
     */
    protected $headers =
    Request::HEADER_X_FORWARDED_FOR |
    Request::HEADER_X_FORWARDED_HOST |
    Request::HEADER_X_FORWARDED_PORT |
    Request::HEADER_X_FORWARDED_PROTO |
    Request::HEADER_X_FORWARDED_AWS_ELB;

    /**
     * Every request reaches the app from Coolify's proxy, so REMOTE_ADDR is the
     * proxy's address for every visitor. When the hop in front of that proxy (the
     * last entry in X-Forwarded-For) is Cloudflare, CF-Connecting-IP is the
     * visitor, so it becomes the request address and throttles, logs and the
     * reCAPTCHA check all see the real visitor.
     */
    public function handle(Request $request, Closure $next)
    {
        if ($visitor = $this->cloudflareVisitor($request)) {
            $request->server->set('REMOTE_ADDR', $visitor);
            $request->attributes->set('visitor_identified', true);
        }

        return parent::handle($request, $next);
    }

    private function cloudflareVisitor(Request $request): ?string
    {
        $visitor = $request->header('CF-Connecting-IP');

        if (! filter_var($visitor, FILTER_VALIDATE_IP)) {
            return null;
        }

        $hops = array_map('trim', explode(',', (string) $request->header('X-Forwarded-For')));
        $lastHop = end($hops);

        if (filter_var($lastHop, FILTER_VALIDATE_IP) && IpUtils::checkIp($lastHop, Cloudflare::RANGES)) {
            return $visitor;
        }

        // Someone reached the origin directly, or the proxy records hops some other
        // way. Either way the header can't be trusted, so say so once an hour.
        if (Cache::add('cloudflare-hop-warning', true, now()->addHour())) {
            Log::warning('CF-Connecting-IP arrived without a Cloudflare address as the last X-Forwarded-For hop, so rate limits fall back to the proxy address.', [
                'last_hop' => $lastHop,
            ]);
        }

        return null;
    }
}
