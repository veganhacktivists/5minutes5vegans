<?php

namespace Tests\Feature;

use App\Http\Controllers\TweetController;
use Illuminate\Support\Facades\Cache;
use Tests\TestCase;

class TweetEndpointTest extends TestCase
{
    public function testSendsTheStoredJsonAsItIs()
    {
        $json = '[{"icon":"fas fa-leaf","title":"Café","variants":["Try https://example.org/a"]}]';
        Cache::put('tweetsen', $json, 60);

        $response = (new TweetController)->tweets();

        $this->assertSame(200, $response->getStatusCode());
        $this->assertSame($json, $response->getContent());
        $this->assertSame('application/json', $response->headers->get('Content-Type'));
    }

    public function testStillServesRepliesCachedAsAnArray()
    {
        Cache::put('tweetsen', [['icon' => 'fas fa-leaf', 'title' => 'Test', 'variants' => ['A message']]], 60);

        $response = (new TweetController)->tweets();

        $this->assertSame(200, $response->getStatusCode());
        $this->assertSame('Test', json_decode($response->getContent(), true)[0]['title']);
    }

    public function testIsUnavailableWhenTheCacheIsEmpty()
    {
        Cache::forget('tweetsen');

        $response = (new TweetController)->tweets();

        $this->assertSame(503, $response->getStatusCode());
        $this->assertSame('60', $response->headers->get('Retry-After'));
    }
}
