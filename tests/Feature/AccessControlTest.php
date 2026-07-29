<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Verbiage;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AccessControlTest extends TestCase
{
    use RefreshDatabase;

    /** A user may update their own account. */
    public function testUserCanUpdateOwnAccount()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->putJson(route('user.update', $user), [
            'name'  => 'New Name',
            'email' => 'new-email@example.com',
        ]);

        $response->assertOk()->assertJson(['success' => true]);
        $this->assertDatabaseHas('users', ['id' => $user->id, 'email' => 'new-email@example.com']);
    }

    /** A user may NOT update another user's account (account takeover). */
    public function testUserCannotUpdateAnotherAccount()
    {
        $attacker = User::factory()->create();
        $victim   = User::factory()->create(['email' => 'victim@example.com']);

        $response = $this->actingAs($attacker)->putJson(route('user.update', $victim), [
            'name'  => 'Hacked',
            'email' => 'attacker@evil.com',
        ]);

        $response->assertForbidden();
        $this->assertDatabaseHas('users', ['id' => $victim->id, 'email' => 'victim@example.com']);
    }

    /** A user may update their own verbiage. */
    public function testUserCanUpdateOwnVerbiage()
    {
        $user     = User::factory()->create();
        $verbiage = Verbiage::factory()->create(['user_id' => $user->id]);

        $response = $this->actingAs($user)->putJson(route('verbiage.update', $verbiage), [
            'title' => 'Mine',
            'icon'  => 'fas fa-leaf',
            'body'  => 'Updated body',
        ]);

        $response->assertOk()->assertJson(['success' => true]);
        $this->assertDatabaseHas('verbiages', ['id' => $verbiage->id, 'title' => 'Mine']);
    }

    /** A user may NOT update another user's verbiage (IDOR). */
    public function testUserCannotUpdateAnotherUsersVerbiage()
    {
        $attacker = User::factory()->create();
        $owner    = User::factory()->create();
        $verbiage = Verbiage::factory()->create(['user_id' => $owner->id, 'title' => 'Original']);

        $response = $this->actingAs($attacker)->putJson(route('verbiage.update', $verbiage), [
            'title' => 'Hijacked',
            'icon'  => 'fas fa-leaf',
            'body'  => 'Malicious body',
        ]);

        $response->assertForbidden();
        $this->assertDatabaseHas('verbiages', ['id' => $verbiage->id, 'title' => 'Original']);
    }

    /** A user may NOT delete another user's verbiage (IDOR). */
    public function testUserCannotDeleteAnotherUsersVerbiage()
    {
        $attacker = User::factory()->create();
        $owner    = User::factory()->create();
        $verbiage = Verbiage::factory()->create(['user_id' => $owner->id]);

        $response = $this->actingAs($attacker)->deleteJson(route('verbiage.destroy', $verbiage));

        $response->assertForbidden();
        $this->assertDatabaseHas('verbiages', ['id' => $verbiage->id]);
    }

    /** A user may delete their own verbiage. */
    public function testUserCanDeleteOwnVerbiage()
    {
        $user     = User::factory()->create();
        $verbiage = Verbiage::factory()->create(['user_id' => $user->id]);

        $response = $this->actingAs($user)->deleteJson(route('verbiage.destroy', $verbiage));

        $response->assertOk()->assertJson(['success' => true]);
        $this->assertDatabaseMissing('verbiages', ['id' => $verbiage->id]);
    }
}
