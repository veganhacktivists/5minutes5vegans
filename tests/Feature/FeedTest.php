<?php

namespace Tests\Feature;

use App\Http\Controllers\FeedController;
use App\Models\Tweet;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\App;
use Tests\TestCase;

class FeedTest extends TestCase
{
    use RefreshDatabase;

    public function testTheFeedShowsOnlyTheLatestFiftyTweets()
    {
        Tweet::factory()->count(105)
            ->state(new Sequence(fn (Sequence $sequence) => ['id' => (string) (1000 + $sequence->index), 'lang' => 'en']))
            ->create();

        $tweets = (new FeedController)()->getData()['tweets'];

        $this->assertCount(50, $tweets);
        $this->assertEquals(1104, $tweets->first()->id);
        $this->assertEquals(1055, $tweets->last()->id);
    }

    public function testCardsCarryThePostIdAndTimeForTheBrowser()
    {
        $tweet = Tweet::factory()->make(['id' => '1234', 'lang' => 'en', 'date' => '2026-09-25 10:00:00']);

        $this->view('inc.twitter', ['tweets' => collect([$tweet])])
            ->assertSee('data-post="1234"', false)
            ->assertSee('<time datetime="2026-09-25T10:00:00+00:00">', false)
            ->assertSee('Reply on X');
    }

    public function testAnEmptyFeedLinksToTheEnglishOne()
    {
        App::setLocale('it');

        $this->view('inc.twitter', ['tweets' => collect()])
            ->assertSee('Nessun post recente in questa lingua.')
            ->assertSee('Vedi i post in inglese')
            ->assertSee('/en"', false);
    }

    public function testAnEmptyEnglishFeedDoesNotLinkToItself()
    {
        $this->view('inc.twitter', ['tweets' => collect()])
            ->assertSee('No recent posts in this language.')
            ->assertDontSee('See English posts');
    }

    public function testPostsOlderThanSixtyDaysAreLeftOut()
    {
        Tweet::factory()->create(['id' => '2001', 'lang' => 'en', 'date' => now()->subDays(59)]);
        Tweet::factory()->create(['id' => '2002', 'lang' => 'en', 'date' => now()->subDays(61)]);

        $tweets = (new FeedController)()->getData()['tweets'];

        $this->assertEquals(['2001'], $tweets->pluck('id')->all());
    }
}
