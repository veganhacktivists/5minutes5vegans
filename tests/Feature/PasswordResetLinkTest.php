<?php

namespace Tests\Feature;

use Mcamara\LaravelLocalization\Middleware\LaravelLocalizationRedirectFilter;
use Mcamara\LaravelLocalization\Middleware\LocaleSessionRedirect;
use Tests\TestCase;

// A reset link carries its token and the email address in the URL
class PasswordResetLinkTest extends TestCase
{
    public function testTheResetPageSendsNoReferrer()
    {
        $this->withoutVite();
        $this->withoutMiddleware([LaravelLocalizationRedirectFilter::class, LocaleSessionRedirect::class]);

        $this->get(route('password.reset', ['token' => 'a-secret-token', 'email' => 'someone@example.com']))
            ->assertOk()
            ->assertHeader('Referrer-Policy', 'no-referrer');

        $this->get(route('password.request'))->assertOk()->assertHeaderMissing('Referrer-Policy');
    }

    // nginx itself was tested by hand; this keeps the config from drifting back
    public function testTheAccessLogHidesResetLinks()
    {
        $config = file_get_contents(base_path('nixpacks/nginx.template.conf'));

        $this->assertStringContainsString('access_log /dev/stdout combined_hidden;', $config);
        $this->assertStringContainsString('"$request_logged"', $config);
        $this->assertStringContainsString('"$referer_logged"', $config);
        $this->assertStringContainsString('password/reset/', $config);
    }
}
