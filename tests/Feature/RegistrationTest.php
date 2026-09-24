<?php

namespace Tests\Feature;

use Anhskohbo\NoCaptcha\Facades\NoCaptcha;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Mcamara\LaravelLocalization\Middleware\LaravelLocalizationRedirectFilter;
use Mcamara\LaravelLocalization\Middleware\LocaleSessionRedirect;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->withoutMiddleware([LaravelLocalizationRedirectFilter::class, LocaleSessionRedirect::class]);
        config(['captcha.secret' => 'test-secret']);
    }

    private function registration(array $overrides = []): array
    {
        return array_merge([
            'name' => 'New Person',
            'email' => 'new@example.com',
            'password' => 'a-long-password',
            'password_confirmation' => 'a-long-password',
            'g-recaptcha-response' => 'token-from-the-widget',
        ], $overrides);
    }

    public function testRegistrationNeedsTheCaptcha()
    {
        $this->post(route('register'), $this->registration(['g-recaptcha-response' => '']))
            ->assertSessionHasErrors('g-recaptcha-response');

        $this->assertSame(0, User::count());
    }

    public function testAFailedCaptchaIsRejected()
    {
        NoCaptcha::shouldReceive('verifyResponse')->once()->andReturn(false);

        $this->post(route('register'), $this->registration())
            ->assertSessionHasErrors(['g-recaptcha-response' => __('loginregister.robot-failed')]);

        $this->assertSame(0, User::count());
    }

    public function testAPassingCaptchaRegisters()
    {
        NoCaptcha::shouldReceive('verifyResponse')->once()->with('token-from-the-widget', \Mockery::any())->andReturn(true);

        $this->post(route('register'), $this->registration())->assertSessionHasNoErrors();

        $this->assertAuthenticated();
        $this->assertSame(1, User::where('email', 'new@example.com')->count());
    }

    public function testRegistrationIsThrottled()
    {
        NoCaptcha::shouldReceive('verifyResponse')->andReturn(false);

        for ($i = 0; $i < 6; $i++) {
            $this->post(route('register'), $this->registration())->assertStatus(302);
        }

        $this->post(route('register'), $this->registration())->assertStatus(429);
    }
}
