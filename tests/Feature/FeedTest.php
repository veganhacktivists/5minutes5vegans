<?php

namespace Tests\Feature;

use App\Http\Controllers\FeedController;
use App\Models\Tweet;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\App;
use Mcamara\LaravelLocalization\Middleware\LaravelLocalizationRedirectFilter;
use Mcamara\LaravelLocalization\Middleware\LocaleSessionRedirect;
use Tests\TestCase;

class FeedTest extends TestCase
{
    use RefreshDatabase;

    public function testTheFeedShowsOnlyTheLatestFiftyTweets()
    {
        Tweet::factory()->count(105)
            ->state(new Sequence(fn (Sequence $sequence) => [
                'id' => (string) (1000 + $sequence->index),
                'lang' => 'en',
                'date' => now()->subMinutes(105 - $sequence->index),
            ]))
            ->create();

        $tweets = (new FeedController)()->getData()['tweets'];

        $this->assertCount(50, $tweets);
        $this->assertEquals(1104, $tweets->first()->id);
        $this->assertEquals(1055, $tweets->last()->id);
    }

    public function testTheFeedShowsTheLatestFiftyFromEachPlatformNewestFirst()
    {
        // X posts on even minutes, Bluesky on odd ones, so the two interleave
        Tweet::factory()->count(60)
            ->state(new Sequence(fn (Sequence $sequence) => [
                'id' => (string) (1000 + $sequence->index),
                'lang' => 'en',
                'date' => now()->subMinutes(2 * $sequence->index),
            ]))
            ->create();
        Tweet::factory()->bluesky()->count(60)
            ->state(new Sequence(fn (Sequence $sequence) => [
                'lang' => 'en',
                'date' => now()->subMinutes(2 * $sequence->index + 1),
            ]))
            ->create();

        $tweets = (new FeedController)()->getData()['tweets'];

        $this->assertCount(100, $tweets);
        $this->assertSame(50, $tweets->where('platform', 'x')->count());
        $this->assertSame(50, $tweets->where('platform', 'bluesky')->count());
        $this->assertSame(['x', 'bluesky', 'x', 'bluesky'], $tweets->take(4)->pluck('platform')->all());

        $dates = $tweets->map(fn ($tweet) => $tweet->date->getTimestamp())->all();
        $sorted = $dates;
        rsort($sorted);
        $this->assertSame($sorted, $dates);
    }

    public function testBusyXDoesNotPushBlueskyOut()
    {
        Tweet::factory()->count(100)
            ->state(new Sequence(fn (Sequence $sequence) => ['id' => (string) (1000 + $sequence->index), 'lang' => 'en', 'date' => now()->subMinutes($sequence->index)]))
            ->create();
        Tweet::factory()->bluesky()->create(['lang' => 'en', 'date' => now()->subDays(3)]);

        $tweets = (new FeedController)()->getData()['tweets'];

        $this->assertSame(1, $tweets->where('platform', 'bluesky')->count());
        $this->assertSame('bluesky', $tweets->last()->platform);
    }

    // The nav is on the page twice, for phones and for the sidebar
    public function testNoIdIsUsedTwiceOnTheFeed()
    {
        $this->withoutVite();
        $this->withoutMiddleware([LaravelLocalizationRedirectFilter::class, LocaleSessionRedirect::class]);
        Tweet::factory()->count(3)->create(['lang' => 'en']);

        $html = $this->get(route('feed'))->assertOk()->getContent();

        preg_match_all('/\sid="([^"]+)"/', $html, $matches);
        $repeated = array_keys(array_filter(array_count_values($matches[1]), fn ($count) => $count > 1));
        $this->assertSame([], $repeated);
    }

    public function testCardsCarryThePostIdAndTimeForTheBrowser()
    {
        $tweet = Tweet::factory()->make(['id' => '1234', 'lang' => 'en', 'date' => '2026-09-25 10:00:00']);

        $this->view('inc.twitter', ['tweets' => collect([$tweet])])
            ->assertSee('data-post="1234"', false)
            ->assertSee('<time datetime="2026-09-25T10:00:00+00:00">', false)
            ->assertSee('Reply on X');
    }

    public function testXCardsAreMarkedAsX()
    {
        $tweet = Tweet::factory()->make(['id' => '1234', 'lang' => 'en', 'from_user_name' => 'someone']);

        $this->view('inc.twitter', ['tweets' => collect([$tweet])])
            ->assertSee('data-platform="x"', false)
            ->assertSee('href="https://x.com/someone/status/1234"', false);
    }

    public function testBlueskyCardsLinkToBluesky()
    {
        $post = Tweet::factory()->bluesky()->make([
            'id' => 'at://did:plc:abc123/app.bsky.feed.post/3kxyz',
            'lang' => 'en',
            'from_user_name' => 'someone.bsky.social',
        ]);

        $this->view('inc.twitter', ['tweets' => collect([$post])])
            ->assertSee('data-platform="bluesky"', false)
            ->assertSee('data-post="at://did:plc:abc123/app.bsky.feed.post/3kxyz"', false)
            ->assertSee('href="https://bsky.app/profile/did:plc:abc123/post/3kxyz"', false)
            ->assertSee('@someone.bsky.social')
            ->assertSee('Reply on Bluesky')
            ->assertDontSee('Reply on X')
            ->assertDontSee('x.com/');
    }

    // The toggle above the feed already says which platform is showing
    public function testCardsNameTheirPlatformOnceInTheReplyLink()
    {
        $posts = collect([
            Tweet::factory()->make(['id' => '1234', 'lang' => 'en']),
            Tweet::factory()->bluesky()->make(['lang' => 'en']),
        ]);

        $html = (string) $this->view('inc.twitter', ['tweets' => $posts]);
        preg_match_all('~<a class="card".*?</a>~s', $html, $cards);

        $this->assertCount(2, $cards[0]);
        foreach ($cards[0] as $card) {
            $this->assertStringNotContainsString('logo.svg', $card);
        }
        $this->assertStringContainsString('Reply on X', $cards[0][0]);
        $this->assertStringContainsString('Reply on Bluesky', $cards[0][1]);
    }

    public function testABlueskyCardWithoutAnAvatarUsesTheDefault()
    {
        $post = Tweet::factory()->bluesky()->make(['lang' => 'en', 'from_profile_image' => null]);

        $this->view('inc.twitter', ['tweets' => collect([$post])])
            ->assertSee('src="'.Tweet::DEFAULT_AVATAR.'"', false);
    }

    public function testReplyOnBlueskyIsTranslated()
    {
        App::setLocale('de');
        $post = Tweet::factory()->bluesky()->make(['lang' => 'de']);

        $this->view('inc.twitter', ['tweets' => collect([$post])])
            ->assertSee('Auf Bluesky antworten');
    }

    public function testLargePostIdsStayIntactInLinks()
    {
        $id = '9999999999999999999';
        $tweet = Tweet::factory()->create(['id' => $id, 'lang' => 'en']);

        $this->view('inc.twitter', ['tweets' => collect([$tweet])])
            ->assertSee('data-post="'.$id.'"', false)
            ->assertSee('/status/'.$id.'"', false);
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

    public function testTheFeedSaysWhatItIsWhenThereArePosts()
    {
        $this->view('inc.twitter', ['tweets' => collect([Tweet::factory()->make(['id' => '3001', 'lang' => 'en'])])])
            ->assertSee('These are posts from people on X or Bluesky who are thinking about going vegan.')
            ->assertSee('How does it work?')
            ->assertSee('Got it');
    }

    public function testAnEmptyFeedHasNoIntro()
    {
        $this->view('inc.twitter', ['tweets' => collect()])->assertDontSee('feed-intro');
    }

    public function testEveryLanguageCanSayHowManyPostsWereOpened()
    {
        foreach (['You opened 1 post. Thank you!', 'You opened :count posts. Thank you!'] as $line) {
            foreach (array_keys(config('laravellocalization.supportedLocales')) as $locale) {
                if ($locale !== 'en') {
                    $this->assertNotSame($line, __($line, [], $locale), "$locale: $line");
                }
            }
        }
        $this->assertStringContainsString(':count', __('You opened :count posts. Thank you!', [], 'de'));
    }

    public function testEveryLanguageHasTheIntro()
    {
        foreach (array_keys(config('laravellocalization.supportedLocales')) as $locale) {
            $this->assertNotSame('landing.intro', __('landing.intro', [], $locale), $locale);

            if ($locale !== 'en') {
                $this->assertNotSame(__('landing.intro', [], 'en'), __('landing.intro', [], $locale), $locale);
                $this->assertNotSame('Got it', __('Got it', [], $locale), $locale);
            }
        }
    }
}
