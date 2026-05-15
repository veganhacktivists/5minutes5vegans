<?php

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

function generate_and_cache_shlink($url)
{
    return Cache::remember('shlink-' . $url, 60 * 60 * 12, function () use ($url) {
        $response = Http::withHeader('X-Api-Key', config('services.shlink.api_key'))
            ->post('https://go.veganhacktivists.org/rest/v3/short-urls', [
                'longUrl' => $url,
                'findIfExists' => true,
            ]);

        if ($response->failed()) {
            Log::error('Shlink API error', [
                'status'   => $response->status(),
                'response' => $response->body(),
            ]);

            return $url;
        }

        return preg_quote($response->json('shortUrl', $url), '/');
    });
}
