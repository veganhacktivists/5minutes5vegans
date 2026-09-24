<?php

namespace Tests\Feature;

use App\Services\TweetRegexService;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class GenerateTweetsCommandTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        Http::fake([
            'go.veganhacktivists.org/*' => Http::response(['shortUrl' => 'https://go.veganhacktivists.org/test']),
        ]);
    }

    private function generatorFailingFor(?string $failingLocale): void
    {
        $this->mock(TweetRegexService::class, function ($mock) use ($failingLocale) {
            $mock->shouldReceive('generate_tweets')->andReturnUsing(function () use ($failingLocale) {
                if (App::getLocale() === $failingLocale) {
                    throw new \RuntimeException('generator broke');
                }

                return [['title' => 'Fresh '.App::getLocale()]];
            });
        });
    }

    public function testASuccessfulRunExitsCleanly()
    {
        $this->generatorFailingFor(null);

        $this->artisan('tweets:generate')->assertSuccessful();

        $this->assertSame([['title' => 'Fresh en']], Cache::get('tweetsen'));
        $this->assertSame([['title' => 'Fresh de']], Cache::get('tweetsde'));
    }

    public function testAFailedLanguageFailsTheRunAndKeepsItsLastMessages()
    {
        Cache::put('tweetsde', [['title' => 'Last good de']], 60);
        $this->generatorFailingFor('de');

        $this->artisan('tweets:generate')
            ->expectsOutputToContain('Could not generate tweets (de): generator broke')
            ->assertFailed();

        $this->assertSame([['title' => 'Last good de']], Cache::get('tweetsde'));
        $this->assertSame([['title' => 'Fresh en']], Cache::get('tweetsen'));
        $this->assertSame([['title' => 'Fresh pt']], Cache::get('tweetspt'));
    }
}
