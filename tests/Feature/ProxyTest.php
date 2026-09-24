<?php

namespace Tests\Feature;

use Anhskohbo\NoCaptcha\Facades\NoCaptcha;
use App\Providers\AppServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
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

    public function testLocalDoesNotSendHsts()
    {
        $this->get('/robots.txt')->assertHeaderMissing('Strict-Transport-Security');
    }

    public function testTheVisitorIpComesFromCloudflare()
    {
        $request = Request::create('/', 'GET', server: ['REMOTE_ADDR' => '10.0.0.1', 'HTTP_CF_CONNECTING_IP' => '203.0.113.7']);
        $this->assertSame('203.0.113.7', $request->visitorIp());

        $withoutHeader = Request::create('/', 'GET', server: ['REMOTE_ADDR' => '10.0.0.1']);
        $this->assertSame('10.0.0.1', $withoutHeader->visitorIp());

        $junk = Request::create('/', 'GET', server: ['REMOTE_ADDR' => '10.0.0.1', 'HTTP_CF_CONNECTING_IP' => 'not-an-ip']);
        $this->assertSame('10.0.0.1', $junk->visitorIp());
    }

    public function testRegistrationLimitsAreKeptPerVisitor()
    {
        $this->withoutMiddleware([LaravelLocalizationRedirectFilter::class, LocaleSessionRedirect::class]);
        config(['captcha.secret' => 'test-secret']);
        NoCaptcha::shouldReceive('verifyResponse')->andReturn(false);

        $attempt = fn (string $ip) => $this->withHeader('CF-Connecting-IP', $ip)->post(route('register'), [
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
