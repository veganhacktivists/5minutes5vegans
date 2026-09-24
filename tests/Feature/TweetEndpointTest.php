<?php

namespace Tests\Feature;

use App\Http\Controllers\TweetController;
use Illuminate\Support\Facades\Cache;
use Tests\TestCase;

class TweetEndpointTest extends TestCase
{
    public function testReturnsTheCachedMessages()
    {
        Cache::put('tweetsen', [['icon' => 'fas fa-leaf', 'title' => 'Test', 'body' => 'A message']], 60);

        $response = (new TweetController)->tweets();

        $this->assertSame(200, $response->getStatusCode());
        $this->assertSame('Test', $response->getData(true)[0]['title']);
    }

    public function testIsUnavailableWhenTheCacheIsEmpty()
    {
        Cache::forget('tweetsen');

        $response = (new TweetController)->tweets();

        $this->assertSame(503, $response->getStatusCode());
        $this->assertSame('60', $response->headers->get('Retry-After'));
    }
}
