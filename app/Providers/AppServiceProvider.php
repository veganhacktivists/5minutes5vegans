<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // HTTPS ends at Cloudflare, so links would otherwise be http://
        if ($this->app->environment('production')) {
            URL::forceScheme('https');
        }

        RateLimiter::for('register', fn (Request $request) => Limit::perMinute(6)->by($request->ip()));
        RateLimiter::for('password-email', fn (Request $request) => Limit::perMinute(6)->by($request->ip()));
    }
}
