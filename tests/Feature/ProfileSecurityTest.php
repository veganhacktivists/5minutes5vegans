<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Mcamara\LaravelLocalization\Middleware\LaravelLocalizationRedirectFilter;
use Mcamara\LaravelLocalization\Middleware\LocaleSessionRedirect;
use Tests\TestCase;

class ProfileSecurityTest extends TestCase
{
    use RefreshDatabase;

    private function userWithPassword(string $password): User
    {
        return User::factory()->create(['password' => Hash::make($password)]);
    }

    public function testChangingThePasswordNeedsTheCurrentPassword()
    {
        $user = $this->userWithPassword('old-password');

        $this->actingAs($user)->putJson(route('user.update', $user), [
            'name' => $user->name,
            'email' => $user->email,
            'password' => 'new-password',
            'password_confirmation' => 'new-password',
        ])->assertStatus(422)->assertJsonValidationErrors('current_password');

        $this->assertTrue(Hash::check('old-password', $user->fresh()->password));
    }

    public function testAWrongCurrentPasswordIsRejected()
    {
        $user = $this->userWithPassword('old-password');

        $this->actingAs($user)->putJson(route('user.update', $user), [
            'name' => $user->name,
            'email' => 'new@example.com',
            'current_password' => 'not-the-password',
        ])->assertStatus(422)->assertJsonValidationErrors('current_password');

        $this->assertNotSame('new@example.com', $user->fresh()->email);
    }

    public function testTheNameCanChangeWithoutTheCurrentPassword()
    {
        $user = $this->userWithPassword('old-password');

        $this->actingAs($user)->putJson(route('user.update', $user), [
            'name' => 'New Name',
            'email' => $user->email,
        ])->assertOk();

        $this->assertSame('New Name', $user->fresh()->name);
    }

    public function testChangingThePasswordSignsOutOtherSessions()
    {
        $user = $this->userWithPassword('old-password');
        $oldHash = $user->password;

        $this->actingAs($user)->putJson(route('user.update', $user), [
            'name' => $user->name,
            'email' => $user->email,
            'current_password' => 'old-password',
            'password' => 'new-password',
            'password_confirmation' => 'new-password',
        ])->assertOk();

        $this->flushSession();

        $this->withSession(['password_hash_web' => $oldHash])
            ->actingAs($user->fresh())
            ->putJson(route('user.update', $user), ['name' => 'Stale session', 'email' => $user->email])
            ->assertUnauthorized();

        $this->assertNotSame('Stale session', $user->fresh()->name);
    }

    public function testResettingThePasswordSignsOutOtherSessions()
    {
        $this->withoutMiddleware([LaravelLocalizationRedirectFilter::class, LocaleSessionRedirect::class]);

        $user = $this->userWithPassword('old-password');
        $oldHash = $user->password;

        $this->post(route('password.update'), [
            'token' => Password::createToken($user),
            'email' => $user->email,
            'password' => 'new-password',
            'password_confirmation' => 'new-password',
        ])->assertRedirect();

        $this->assertTrue(Hash::check('new-password', $user->fresh()->password));

        $this->flushSession();

        $this->withSession(['password_hash_web' => $oldHash])
            ->actingAs($user->fresh())
            ->putJson(route('user.update', $user), ['name' => 'Stale session', 'email' => $user->email])
            ->assertUnauthorized();
    }
}
