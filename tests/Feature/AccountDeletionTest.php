<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Verbiage;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class AccountDeletionTest extends TestCase
{
    use RefreshDatabase;

    private function user(): User
    {
        return User::factory()->create(['password' => Hash::make('the-right-password')]);
    }

    public function testAUserCanDeleteTheirAccountAndEverythingInIt()
    {
        $user = $this->user();
        Verbiage::factory()->count(3)->create(['user_id' => $user->id]);
        DB::table('password_resets')->insert(['email' => $user->email, 'token' => 'x', 'created_at' => now()]);

        $this->actingAs($user)
            ->deleteJson(route('user.destroy', $user), ['current_password' => 'the-right-password'])
            ->assertOk()
            ->assertJson(['success' => true]);

        $this->assertGuest();
        $this->assertDatabaseMissing('users', ['id' => $user->id]);
        $this->assertDatabaseMissing('verbiages', ['user_id' => $user->id]);
        $this->assertDatabaseMissing('password_resets', ['email' => $user->email]);
    }

    public function testTheCurrentPasswordIsNeeded()
    {
        $user = $this->user();

        $this->actingAs($user)->deleteJson(route('user.destroy', $user), [])->assertStatus(422);
        $this->actingAs($user)
            ->deleteJson(route('user.destroy', $user), ['current_password' => 'wrong'])
            ->assertStatus(422)
            ->assertJsonValidationErrors('current_password');

        $this->assertDatabaseHas('users', ['id' => $user->id]);
    }

    public function testNobodyCanDeleteSomeoneElsesAccount()
    {
        $owner = $this->user();
        $attacker = User::factory()->create(['password' => Hash::make('attacker-password')]);

        $this->actingAs($attacker)
            ->deleteJson(route('user.destroy', $owner), ['current_password' => 'attacker-password'])
            ->assertForbidden();

        $this->assertDatabaseHas('users', ['id' => $owner->id]);
    }

    public function testGuestsCantDeleteAnything()
    {
        $user = $this->user();

        $this->deleteJson(route('user.destroy', $user), ['current_password' => 'the-right-password'])->assertUnauthorized();

        $this->assertDatabaseHas('users', ['id' => $user->id]);
    }
}
