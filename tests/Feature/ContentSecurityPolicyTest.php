<?php

namespace Tests\Feature;

use App\Http\Middleware\ContentSecurityPolicy;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Mcamara\LaravelLocalization\Middleware\LaravelLocalizationRedirectFilter;
use Mcamara\LaravelLocalization\Middleware\LocaleSessionRedirect;
use Tests\TestCase;

class ContentSecurityPolicyTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->withoutVite();
        $this->withoutMiddleware([LaravelLocalizationRedirectFilter::class, LocaleSessionRedirect::class]);
    }

    private function nonce(string $policy): string
    {
        $this->assertMatchesRegularExpression("/script-src 'nonce-([^']+)'/", $policy);
        preg_match("/'nonce-([^']+)'/", $policy, $match);

        return $match[1];
    }

    public function testPagesGetAPolicyWhoseNonceTheirScriptsCarry()
    {
        $response = $this->get(route('login'))->assertOk();
        $policy = $response->headers->get(ContentSecurityPolicy::HEADER);

        $nonce = $this->nonce($policy);
        $this->assertStringContainsString("<script nonce=\"$nonce\" src=\"https://www.google.com/recaptcha/api.js", $response->getContent());
        foreach (["frame-ancestors 'self'", "object-src 'none'", "base-uri 'self'", "form-action 'self'"] as $rule) {
            $this->assertStringContainsString($rule, $policy);
        }
    }

    public function testTheFeedsInlineScriptCarriesTheNonce()
    {
        $response = $this->get(route('feed'))->assertOk();
        $nonce = $this->nonce($response->headers->get(ContentSecurityPolicy::HEADER));

        $this->assertStringContainsString("<script nonce=\"$nonce\">", $response->getContent());
    }

    public function testEachRequestGetsItsOwnNonce()
    {
        $first = $this->nonce($this->get(route('login'))->headers->get(ContentSecurityPolicy::HEADER));
        $second = $this->nonce($this->get(route('login'))->headers->get(ContentSecurityPolicy::HEADER));

        $this->assertNotSame($first, $second);
    }

    public function testUmamiCanSendItsEvents()
    {
        config(['services.umami.website_id' => 'abc-123']);

        $response = $this->get(route('login'));
        $policy = $response->headers->get(ContentSecurityPolicy::HEADER);

        $this->assertStringContainsString("connect-src 'self' https://analytics.veganhacktivists.org", $policy);
        $this->assertStringContainsString('<script nonce="'.$this->nonce($policy).'" defer src="https://analytics.veganhacktivists.org/script.js"', $response->getContent());
    }
}
