<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

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
        // Six registrations a minute per visitor. When TrustProxies couldn't identify
        // the visitor, every request shares the proxy's address, so the email is
        // added to the key rather than giving everyone one bucket to exhaust.
        RateLimiter::for('register', function (Request $request) {
            $key = $request->attributes->get('visitor_identified')
                ? $request->ip()
                : $request->ip().'|'.Str::lower((string) $request->input('email'));

            return Limit::perMinute(6)->by($key);
        });
    }
}
