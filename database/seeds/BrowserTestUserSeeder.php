<?php

use App\Models\User;
use Illuminate\Database\Seeder;

// For the Playwright tests in CI and locally. Never run it in production.
class BrowserTestUserSeeder extends Seeder
{
    public const EMAIL = 'browser-test@example.com';

    public function run(): void
    {
        // The factory's password is Laravel's usual test value, "password"
        User::factory()->create(['name' => 'Browser Test', 'email' => self::EMAIL]);
    }
}
