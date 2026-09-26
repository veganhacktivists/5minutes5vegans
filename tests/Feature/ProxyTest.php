<?php

namespace Tests\Feature;

use Anhskohbo\NoCaptcha\Facades\NoCaptcha;
use App\Providers\AppServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\LaravelLocalization;
use Mcamara\LaravelLocalization\Middleware\LaravelLocalizationRedirectFilter;
use Mcamara\LaravelLocalization\Middleware\LocaleSessionRedirect;
use Tests\TestCase;

class ProxyTest extends TestCase
{
    use RefreshDatabase;

    public function testProductionLinksUseHttps()
    {
        $this->app['env'] = 'production';
        (new AppServiceProvider($this->app))->boot();

        $this->assertStringStartsWith('https://', url('/en'));
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

    /** What $request->ip() is, after the global TrustProxies middleware, for a request with these details. */
    private function ipFor(string $peer, ?string $forwardedFor = null): string
    {
        Route::get('/_test/ip', fn (Request $request) => $request->ip());

        return $this->flushHeaders()
            ->withServerVariables(['REMOTE_ADDR' => $peer])
            ->withHeaders($forwardedFor === null ? [] : ['X-Forwarded-For' => $forwardedFor])
            ->get('/_test/ip')
            ->getContent();
    }

    public function testTheVisitorIpComesThroughTheProxyAndCloudflare()
    {
        config(['services.coolify_proxy_ips' => ['10.0.0.1']]);

        // 172.70.1.1 is a Cloudflare edge address, 10.0.0.1 the Coolify proxy
        $this->assertSame('203.0.113.7', $this->ipFor('10.0.0.1', '203.0.113.7, 172.70.1.1'));
        // Cloudflare appends the real sender after anything the visitor made up
        $this->assertSame('203.0.113.7', $this->ipFor('10.0.0.1', '198.51.100.9, 203.0.113.7, 172.70.1.1'));
        // Straight from Cloudflare, with no proxy in between
        $this->assertSame('203.0.113.7', $this->ipFor('172.70.1.1', '203.0.113.7'));
    }

    public function testAForgedHeaderIsIgnored()
    {
        config(['services.coolify_proxy_ips' => ['10.0.0.1']]);

        // Sent to the proxy without going through Cloudflare: the proxy adds the real sender last
        $this->assertSame('198.51.100.9', $this->ipFor('10.0.0.1', '203.0.113.7, 172.70.1.1, 198.51.100.9'));
        // Not from the proxy at all
        $this->assertSame('10.0.0.2', $this->ipFor('10.0.0.2', '198.51.100.9, 172.70.1.1'));
        $this->assertSame('198.51.100.10', $this->ipFor('198.51.100.10', '198.51.100.9, 172.70.1.1'));
        // No forwarding header
        $this->assertSame('10.0.0.1', $this->ipFor('10.0.0.1'));
    }

    public function testWithoutTheProxySettingNothingIsForwarded()
    {
        config(['services.coolify_proxy_ips' => []]);

        $this->assertSame('10.0.0.1', $this->ipFor('10.0.0.1', '203.0.113.7, 172.70.1.1'));
    }

    public function testRegistrationLimitsAreKeptPerVisitor()
    {
        $this->withoutMiddleware([LaravelLocalizationRedirectFilter::class, LocaleSessionRedirect::class]);
        config(['captcha.secret' => 'test-secret']);
        config(['services.coolify_proxy_ips' => ['10.0.0.1']]);
        NoCaptcha::shouldReceive('verifyResponse')->andReturn(false);

        $attempt = fn (string $ip) => $this->withServerVariables(['REMOTE_ADDR' => '10.0.0.1'])->withHeaders(['X-Forwarded-For' => "$ip, 172.70.1.1"])->post(route('register'), [
            'name' => 'Someone', 'email' => 'someone@example.com',
            'password' => 'a-long-password', 'password_confirmation' => 'a-long-password',
            'g-recaptcha-response' => 'token',
        ]);

        for ($i = 0; $i < 6; $i++) {
            $attempt('203.0.113.7')->assertStatus(302);
        }

        $attempt('203.0.113.7')->assertStatus(429);
        $attempt('198.51.100.9')->assertStatus(302);
    }
}
