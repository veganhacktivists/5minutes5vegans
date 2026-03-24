<?php

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

function generate_and_cache_tinyurl($url)
{
    return Cache::remember('tinyurl-' . $url, 60 * 60 * 12, function () use ($url) {
        $response = Http::withToken(config('services.tinyurl.token'))
            ->post('https://api.tinyurl.com/create', [
                'url'    => $url,
                'domain' => 'tinyurl.com',
            ]);

        if ($response->failed()) {
            Log::error('TinyURL API error', [
                'status'   => $response->status(),
                'response' => $response->body(),
            ]);

            return $url;
        }

        return preg_quote($response->json('data.tiny_url', $url), '/');
    });
}
