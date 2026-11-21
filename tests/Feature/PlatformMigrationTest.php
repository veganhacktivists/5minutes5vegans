<?php

namespace Tests\Feature;

use App\Models\Tweet;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class PlatformMigrationTest extends TestCase
{
    use RefreshDatabase;

    public function testRollingBackLeavesOnlyXPosts()
    {
        Tweet::factory()->create(['id' => '1001', 'lang' => 'en']);
        Tweet::factory()->bluesky()->create(['lang' => 'en', 'from_profile_image' => null]);

        $migration = require database_path('migrations/2026_11_19_000000_add_platform_to_tweets_table.php');
        $migration->down();

        $this->assertFalse(Schema::hasColumn('tweets', 'platform'));
        $this->assertEquals(['1001'], Tweet::query()->pluck('id')->all());
    }
}
