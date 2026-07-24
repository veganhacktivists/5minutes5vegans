<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CheckApiKeyTest extends TestCase
{
    use RefreshDatabase;

    private array $payload = [
        'lang'   => 'en',
        'tweets' => [[
            'id'                 => '1',
            'date'               => '2026-07-04 00:00:00',
            'text'               => 'Hello',
            'from_user_name'     => 'user',
            'from_full_name'     => 'A User',
            'from_profile_image' => 'https://example.com/a.png',
        ]],
    ];

    /** With no key configured, an unauthenticated request must be rejected (not fail open). */
    public function testRejectsRequestWhenNoKeyConfigured()
    {
        config(['services.api_key' => null]);

        $this->postJson(route('tweets.store'), $this->payload)->assertStatus(401);
    }

    /** An empty configured key must not authenticate an empty/absent supplied key. */
    public function testRejectsRequestWhenConfiguredKeyIsEmpty()
    {
        config(['services.api_key' => '']);

        $this->postJson(route('tweets.store'), $this->payload)->assertStatus(401);
    }

    /** A wrong key is rejected. */
    public function testRejectsWrongKey()
    {
        config(['services.api_key' => 'correct-secret']);

        $this->withHeaders(['X-API-KEY' => 'wrong'])
            ->postJson(route('tweets.store'), $this->payload)
            ->assertStatus(401);
    }

    /** The correct key is accepted and the request is processed. */
    public function testAcceptsCorrectKey()
    {
        config(['services.api_key' => 'correct-secret']);

        $this->withHeaders(['X-API-KEY' => 'correct-secret'])
            ->postJson(route('tweets.store'), $this->payload)
            ->assertOk()
            ->assertJson(['message' => 'success']);

        $this->assertDatabaseHas('tweets', ['id' => '1', 'lang' => 'en']);
    }
}
