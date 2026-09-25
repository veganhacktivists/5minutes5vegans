<?php

namespace Tests\Feature;

use Anhskohbo\NoCaptcha\Facades\NoCaptcha;
use App\Http\Middleware\TrustProxies;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Mcamara\LaravelLocalization\LaravelLocalization;
use Mcamara\LaravelLocalization\Middleware\LaravelLocalizationRedirectFilter;
use Mcamara\LaravelLocalization\Middleware\LocaleSessionRedirect;
use Tests\TestCase;

class ProxyTest extends TestCase
{
    use RefreshDatabase;

    // 172.70.1.1 is a Cloudflare edge address, 10.0.0.1 stands in for Coolify's proxy
    private const EDGE = '172.70.1.1';

    private function throughProxies(array $server): Request
    {
        $request = Request::create('/', 'GET', server: ['REMOTE_ADDR' => '10.0.0.1', ...$server]);
        (new TrustProxies)->handle($request, fn () => response(''));

        return $request;
    }

    public function testProductionLinksUseHttps()
    {
        $this->app['env'] = 'production';

        $xml = simplexml_load_string($this->get('/sitemap.xml')->assertOk()->getContent());

        foreach ($xml->url as $url) {
            $this->assertStringStartsWith('https://', (string) $url->loc);
        }
    }

    public function testProductionSendsHsts()
    {
        $this->app['env'] = 'production';

        $this->get('/robots.txt')->assertHeader('Strict-Transport-Security', 'max-age=31536000');
    }

    public function testProductionRedirectsTheRootToHttps()
    {
        $this->app['env'] = 'production';
        // In a real request the package holds the same Request the middleware
        // marks as HTTPS; in tests it would keep the one from boot
        $this->app->forgetInstance(LaravelLocalization::class);

        $location = $this->get('/')->assertRedirect()->headers->get('Location');

        $this->assertStringStartsWith('https://', $location);
    }

    public function testLocalDoesNotSendHsts()
    {
        $this->get('/robots.txt')->assertHeaderMissing('Strict-Transport-Security');
    }

    public function testTheVisitorBehindCloudflareBecomesTheRequestAddress()
    {
        $request = $this->throughProxies(['HTTP_X_FORWARDED_FOR' => '203.0.113.7, '.self::EDGE, 'HTTP_CF_CONNECTING_IP' => '203.0.113.7']);

        $this->assertSame('203.0.113.7', $request->ip());
        $this->assertTrue($request->attributes->get('visitor_identified'));
    }

    public function testItWorksWhenTheProxyOverwritesTheForwardedHeader()
    {
        $request = $this->throughProxies(['HTTP_X_FORWARDED_FOR' => self::EDGE, 'HTTP_CF_CONNECTING_IP' => '203.0.113.7']);

        $this->assertSame('203.0.113.7', $request->ip());
    }

    public function testAForgedHeaderFromOutsideCloudflareIsIgnoredAndReportedOnce()
    {
        Log::spy();

        $direct = $this->throughProxies(['HTTP_X_FORWARDED_FOR' => '198.51.100.9', 'HTTP_CF_CONNECTING_IP' => '203.0.113.7']);
        $this->throughProxies(['HTTP_X_FORWARDED_FOR' => '198.51.100.9', 'HTTP_CF_CONNECTING_IP' => '203.0.113.8']);

        $this->assertSame('10.0.0.1', $direct->ip());
        $this->assertNull($direct->attributes->get('visitor_identified'));
        Log::shouldHaveReceived('warning')->once();
    }

    public function testAJunkHeaderIsIgnored()
    {
        $request = $this->throughProxies(['HTTP_X_FORWARDED_FOR' => self::EDGE, 'HTTP_CF_CONNECTING_IP' => 'not-an-ip']);

        $this->assertSame('10.0.0.1', $request->ip());
    }

    private function register(string $email, array $headers = [])
    {
        return $this->withHeaders($headers)->post(route('register'), [
            'name' => 'Someone', 'email' => $email,
            'password' => 'a-long-password', 'password_confirmation' => 'a-long-password',
            'g-recaptcha-response' => 'token',
        ]);
    }

    public function testRegistrationLimitsAreKeptPerVisitor()
    {
        $this->withoutMiddleware([LaravelLocalizationRedirectFilter::class, LocaleSessionRedirect::class]);
        config(['captcha.secret' => 'test-secret']);
        NoCaptcha::shouldReceive('verifyResponse')->andReturn(false);

        $from = fn (string $ip) => ['CF-Connecting-IP' => $ip, 'X-Forwarded-For' => "$ip, ".self::EDGE];

        for ($i = 0; $i < 6; $i++) {
            $this->register("someone$i@example.com", $from('203.0.113.7'))->assertStatus(302);
        }

        $this->register('another@example.com', $from('203.0.113.7'))->assertStatus(429);
        $this->register('someone@example.com', $from('198.51.100.9'))->assertStatus(302);
    }

    public function testUnidentifiedVisitorsDontShareOneBucket()
    {
        $this->withoutMiddleware([LaravelLocalizationRedirectFilter::class, LocaleSessionRedirect::class]);
        config(['captcha.secret' => 'test-secret']);
        NoCaptcha::shouldReceive('verifyResponse')->andReturn(false);

        // No Cloudflare headers, so every request comes from the same address
        for ($i = 0; $i < 6; $i++) {
            $this->register('flood@example.com')->assertStatus(302);
        }

        $this->register('flood@example.com')->assertStatus(429);
        $this->register('real.person@example.com')->assertStatus(302);
    }
}
