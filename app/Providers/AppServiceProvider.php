<?php

namespace App\Providers;

use App\Support\Cloudflare;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Symfony\Component\HttpFoundation\IpUtils;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Cloudflare and Coolify's proxy terminate HTTPS, so without this Laravel
        // builds http:// links (redirects, og:url, anything using url() or route())
        if ($this->app->environment('production')) {
            URL::forceScheme('https');
        }

        Request::macro('visitorIp', function () {
            $cloudflare = $this->header('CF-Connecting-IP');
            $peer = $this->server('REMOTE_ADDR');
            $hops = array_map('trim', explode(',', (string) $this->header('X-Forwarded-For')));
            $lastHop = end($hops);

            $fromCloudflare = filter_var($peer, FILTER_VALIDATE_IP)
                && IpUtils::checkIp($peer, Cloudflare::RANGES);
            $fromCoolify = filter_var($peer, FILTER_VALIDATE_IP)
                && config('services.coolify_proxy_ips')
                && IpUtils::checkIp($peer, config('services.coolify_proxy_ips'));
            $cloudflareHop = filter_var($lastHop, FILTER_VALIDATE_IP)
                && IpUtils::checkIp($lastHop, Cloudflare::RANGES);

            if (filter_var($cloudflare, FILTER_VALIDATE_IP)
                && ($fromCloudflare || ($fromCoolify && $cloudflareHop))) {
                return $cloudflare;
            }

            return $this->ip();
        });

        RateLimiter::for('register', fn (Request $request) => Limit::perMinute(6)->by($request->visitorIp()));
    }
}
