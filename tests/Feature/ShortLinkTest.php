<?php

namespace Tests\Feature;

use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class ShortLinkTest extends TestCase
{
    private const LONG = 'https://example.org/a/long/link';

    protected function setUp(): void
    {
        parent::setUp();

        require_once app_path('generate_and_cache_shlink.php');
        config(['services.shlink.api_key' => 'test-key']);
    }

    public function testALinkIsShortenedOnceAndRemembered()
    {
        Http::fake(['go.veganhacktivists.org/*' => Http::response(['shortUrl' => 'https://go.veganhacktivists.org/abc'])]);

        $this->assertSame('https://go.veganhacktivists.org/abc', generate_and_cache_shlink(self::LONG));
        $this->assertSame('https://go.veganhacktivists.org/abc', generate_and_cache_shlink(self::LONG));

        Http::assertSentCount(1);
    }

    public function testWithoutAKeyTheFullLinkIsUsedAndShlinkIsntAsked()
    {
        config(['services.shlink.api_key' => null]);
        Http::fake();

        $this->assertSame(self::LONG, generate_and_cache_shlink(self::LONG));

        Http::assertNothingSent();
    }

    public function testAFailureUsesTheFullLinkAndTriesAgainInTenMinutes()
    {
        Http::fake(['go.veganhacktivists.org/*' => Http::sequence()
            ->push('Server error', 500)
            ->push(['shortUrl' => 'https://go.veganhacktivists.org/abc'])]);

        $this->assertSame(self::LONG, generate_and_cache_shlink(self::LONG));
        $this->assertSame(self::LONG, generate_and_cache_shlink(self::LONG));
        Http::assertSentCount(1);

        $this->travel(11)->minutes();

        $this->assertSame('https://go.veganhacktivists.org/abc', generate_and_cache_shlink(self::LONG));
    }

    public function testATimeoutUsesTheFullLink()
    {
        Http::fake(fn () => throw new ConnectionException('Timed out'));

        $this->assertSame(self::LONG, generate_and_cache_shlink(self::LONG));
    }
}
