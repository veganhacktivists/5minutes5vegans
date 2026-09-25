<?php

use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

function generate_and_cache_shlink($url)
{
    $key = 'shlink-url-' . $url;

    if (($cached = Cache::get($key)) !== null) {
        return $cached;
    }

    // Without a key (locally, in CI) every call would be refused
    if (! config('services.shlink.api_key')) {
        return $url;
    }

    // Every language's replies are built in one run, so a slow Shlink mustn't
    // hold each link up for Laravel's default 30 seconds
    try {
        $response = Http::withHeader('X-Api-Key', config('services.shlink.api_key'))
            ->connectTimeout(3)
            ->timeout(5)
            ->post('https://go.veganhacktivists.org/rest/v3/short-urls', [
                'longUrl' => $url,
                'findIfExists' => true,
            ]);
        $error = $response->failed() ? $response->body() : null;
    } catch (ConnectionException $e) {
        $response = null;
        $error = $e->getMessage();
    }

    if ($error !== null) {
        Log::error('Shlink API error', [
            'status'   => $response?->status(),
            'response' => $error,
        ]);

        // Use the full link for now, and try Shlink again in ten minutes
        // instead of keeping the full link for the next 12 hours
        Cache::put($key, $url, 60 * 10);

        return $url;
    }

    $short = $response->json('shortUrl', $url);
    Cache::put($key, $short, 60 * 60 * 12);

    return $short;
}
