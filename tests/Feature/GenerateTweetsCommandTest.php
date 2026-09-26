<?php

namespace Tests\Feature;

use App\Services\TweetGenerator;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Contracts\Console\Kernel;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Exceptions;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
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
        $this->mock(TweetGenerator::class, function ($mock) use ($failingLocale) {
            $mock->shouldReceive('generate')->andReturnUsing(function () use ($failingLocale) {
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

        $this->assertSame([['title' => 'Fresh en']], json_decode(Cache::get('tweetsen'), true));
        $this->assertSame([['title' => 'Fresh de']], json_decode(Cache::get('tweetsde'), true));
    }

    public function testAFailedLanguageFailsTheRunAndKeepsItsLastMessages()
    {
        Cache::put('tweetsde', [['title' => 'Last good de']], 60);
        $this->generatorFailingFor('de');

        $this->artisan('tweets:generate')
            ->expectsOutputToContain('Could not generate tweets (de): generator broke')
            ->assertFailed();

        $this->assertSame([['title' => 'Last good de']], Cache::get('tweetsde'));
        $this->assertSame([['title' => 'Fresh en']], json_decode(Cache::get('tweetsen'), true));
        $this->assertSame([['title' => 'Fresh pt']], json_decode(Cache::get('tweetspt'), true));
    }

    public function testAFailingLanguageIsReportedOnceAnHour()
    {
        Exceptions::fake();
        $this->generatorFailingFor('de');

        $this->artisan('tweets:generate')->assertFailed();
        $this->artisan('tweets:generate')->assertFailed();

        Exceptions::assertReportedCount(1);
    }

    public function testRunsDontOverlap()
    {
        $this->app->make(Kernel::class);
        $event = collect($this->app->make(Schedule::class)->events())
            ->first(fn ($event) => str_contains($event->command, 'tweets:generate'));

        $this->assertTrue($event->withoutOverlapping);
        $this->assertSame(10, $event->expiresAt);
        $this->assertSame('*/10 * * * *', $event->expression);
    }

    public function testFailuresEmailAtMostEverySixHours()
    {
        $this->app->make(Kernel::class);
        $event = collect($this->app->make(Schedule::class)->events())
            ->first(fn ($event) => str_contains($event->command, 'tweets:generate'));

        Mail::shouldReceive('raw')->once();

        $event->finish($this->app, 1);
        $event->finish($this->app, 1);
        $event->finish($this->app, 0);
    }
}
