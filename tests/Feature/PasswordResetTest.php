<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Notification;
use Mcamara\LaravelLocalization\Middleware\LaravelLocalizationRedirectFilter;
use Mcamara\LaravelLocalization\Middleware\LocaleSessionRedirect;
use Tests\TestCase;

class PasswordResetTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->withoutMiddleware([LaravelLocalizationRedirectFilter::class, LocaleSessionRedirect::class]);
        Notification::fake();
    }

    public function testAnAddressGetsOneResetEmailAMinute()
    {
        $user = User::factory()->create();

        $this->post(route('password.email'), ['email' => $user->email])->assertSessionHasNoErrors();
        $this->post(route('password.email'), ['email' => $user->email])->assertSessionHasErrors('email');

        Notification::assertSentToTimes($user, ResetPassword::class, 1);
    }

    public function testEachVisitorCanAskForSixResetsAMinute()
    {
        // As in production: every request arrives from the proxy, with the
        // visitor and the Cloudflare edge in X-Forwarded-For
        config(['services.coolify_proxy_ips' => ['10.0.0.1']]);
        $ask = fn (string $visitor, int $i) => $this->withServerVariables(['REMOTE_ADDR' => '10.0.0.1'])
            ->withHeaders(['X-Forwarded-For' => "$visitor, 172.70.1.1"])
            ->post(route('password.email'), ['email' => "someone$i@example.com"]);

        for ($i = 0; $i < 6; $i++) {
            $ask('203.0.113.7', $i)->assertStatus(302);
        }

        $ask('203.0.113.7', 6)->assertStatus(429);
        $ask('198.51.100.9', 7)->assertStatus(302);
    }
}
