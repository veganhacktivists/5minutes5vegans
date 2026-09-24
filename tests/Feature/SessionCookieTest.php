<?php

namespace Tests\Feature;

use Mcamara\LaravelLocalization\Middleware\LaravelLocalizationRedirectFilter;
use Mcamara\LaravelLocalization\Middleware\LocaleSessionRedirect;
use Tests\TestCase;

class SessionCookieTest extends TestCase
{
    private function sessionConfigFor(string $appEnv): array
    {
        $previous = $_SERVER['APP_ENV'] ?? null;
        $_SERVER['APP_ENV'] = $appEnv;

        try {
            return require config_path('session.php');
        } finally {
            $_SERVER['APP_ENV'] = $previous;
        }
    }

    public function testTheCookieIsHttpsOnlyInProduction()
    {
        $this->assertTrue($this->sessionConfigFor('production')['secure']);
    }

    public function testTheCookieWorksOverHttpLocally()
    {
        $this->assertFalse($this->sessionConfigFor('local')['secure']);
    }

    public function testTheCookieIsSameSiteLax()
    {
        $this->withoutMiddleware([LaravelLocalizationRedirectFilter::class, LocaleSessionRedirect::class]);

        $response = $this->get(route('login'))->assertOk();
        $cookie = collect($response->headers->getCookies())
            ->first(fn ($cookie) => $cookie->getName() === config('session.cookie'));

        $this->assertNotNull($cookie);
        $this->assertSame('lax', $cookie->getSameSite());
    }
}
