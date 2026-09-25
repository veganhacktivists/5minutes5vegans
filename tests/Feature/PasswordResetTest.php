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
        for ($i = 0; $i < 6; $i++) {
            $this->post(route('password.email'), ['email' => "someone$i@example.com"])->assertStatus(302);
        }

        $this->post(route('password.email'), ['email' => 'someone6@example.com'])->assertStatus(429);
    }
}
