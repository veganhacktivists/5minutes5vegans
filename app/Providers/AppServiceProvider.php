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

        // Every request reaches the app from the proxy's address. Cloudflare passes
        // the visitor's own address in CF-Connecting-IP, so rate limits use that,
        // but only when the hop in front of the proxy was Cloudflare. Coolify's
        // proxy records that hop last in X-Forwarded-For. Anything else, like a
        // request sent straight to the origin, falls back to the request address.
        Request::macro('visitorIp', function () {
            $cloudflare = $this->header('CF-Connecting-IP');
            $hops = array_map('trim', explode(',', (string) $this->header('X-Forwarded-For')));
            $lastHop = end($hops);

            if (filter_var($cloudflare, FILTER_VALIDATE_IP) && filter_var($lastHop, FILTER_VALIDATE_IP)
                && IpUtils::checkIp($lastHop, Cloudflare::RANGES)) {
                return $cloudflare;
            }

            return $this->ip();
        });

        RateLimiter::for('register', fn (Request $request) => Limit::perMinute(6)->by($request->visitorIp()));
    }
}
