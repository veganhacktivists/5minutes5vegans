<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

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

        RateLimiter::for('register', fn (Request $request) => Limit::perMinute(6)->by($request->ip()));
        RateLimiter::for('password-email', fn (Request $request) => Limit::perMinute(6)->by($request->ip()));
    }
}
