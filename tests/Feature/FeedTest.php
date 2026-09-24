<?php

namespace Tests\Feature;

use App\Http\Controllers\FeedController;
use App\Models\Tweet;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FeedTest extends TestCase
{
    use RefreshDatabase;

    public function testTheFeedShowsOnlyTheLatestHundredTweets()
    {
        Tweet::factory()->count(105)
            ->state(new Sequence(fn (Sequence $sequence) => ['id' => (string) (1000 + $sequence->index), 'lang' => 'en']))
            ->create();

        $tweets = (new FeedController)()->getData()['tweets'];

        $this->assertCount(100, $tweets);
        $this->assertEquals(1104, $tweets->first()->id);
        $this->assertEquals(1005, $tweets->last()->id);
    }
}
