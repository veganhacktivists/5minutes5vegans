<?php

namespace Tests\Feature;

use Anhskohbo\NoCaptcha\Facades\NoCaptcha;
use App\Providers\AppServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
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

    public function testTheVisitorIpComesFromCloudflare()
    {
        config(['services.coolify_proxy_ips' => ['10.0.0.1']]);

        // 172.70.1.1 is a Cloudflare edge address
        $viaCloudflare = Request::create('/', 'GET', server: ['REMOTE_ADDR' => '10.0.0.1', 'HTTP_X_FORWARDED_FOR' => '203.0.113.7, 172.70.1.1', 'HTTP_CF_CONNECTING_IP' => '203.0.113.7']);
        $this->assertSame('203.0.113.7', $viaCloudflare->visitorIp());

        $junk = Request::create('/', 'GET', server: ['REMOTE_ADDR' => '10.0.0.1', 'HTTP_X_FORWARDED_FOR' => '172.70.1.1', 'HTTP_CF_CONNECTING_IP' => 'not-an-ip']);
        $this->assertSame('10.0.0.1', $junk->visitorIp());

        $directCloudflare = Request::create('/', 'GET', server: ['REMOTE_ADDR' => '172.70.1.1', 'HTTP_CF_CONNECTING_IP' => '203.0.113.7']);
        $this->assertSame('203.0.113.7', $directCloudflare->visitorIp());
    }

    public function testAForgedHeaderFromOutsideCloudflareIsIgnored()
    {
        config(['services.coolify_proxy_ips' => ['10.0.0.1']]);

        $direct = Request::create('/', 'GET', server: ['REMOTE_ADDR' => '10.0.0.1', 'HTTP_X_FORWARDED_FOR' => '198.51.100.9', 'HTTP_CF_CONNECTING_IP' => '203.0.113.7']);
        $this->assertSame('10.0.0.1', $direct->visitorIp());

        $noHops = Request::create('/', 'GET', server: ['REMOTE_ADDR' => '10.0.0.1', 'HTTP_CF_CONNECTING_IP' => '203.0.113.7']);
        $this->assertSame('10.0.0.1', $noHops->visitorIp());

        $forgedCloudflareHop = Request::create('/', 'GET', server: ['REMOTE_ADDR' => '10.0.0.2', 'HTTP_X_FORWARDED_FOR' => '198.51.100.9, 172.70.1.1', 'HTTP_CF_CONNECTING_IP' => '203.0.113.7']);
        $this->assertSame('10.0.0.2', $forgedCloudflareHop->visitorIp());

        $publicPeer = Request::create('/', 'GET', server: ['REMOTE_ADDR' => '198.51.100.10', 'HTTP_X_FORWARDED_FOR' => '198.51.100.9, 172.70.1.1', 'HTTP_CF_CONNECTING_IP' => '203.0.113.7']);
        $this->assertSame('198.51.100.10', $publicPeer->visitorIp());
    }

    public function testRegistrationLimitsAreKeptPerVisitor()
    {
        $this->withoutMiddleware([LaravelLocalizationRedirectFilter::class, LocaleSessionRedirect::class]);
        config(['captcha.secret' => 'test-secret']);
        config(['services.coolify_proxy_ips' => ['10.0.0.1']]);
        NoCaptcha::shouldReceive('verifyResponse')->andReturn(false);

        $attempt = fn (string $ip) => $this->withServerVariables(['REMOTE_ADDR' => '10.0.0.1'])->withHeaders(['CF-Connecting-IP' => $ip, 'X-Forwarded-For' => "$ip, 172.70.1.1"])->post(route('register'), [
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
