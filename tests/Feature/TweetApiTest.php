<?php

namespace Tests\Feature;

use App\Models\Tweet;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Validator;
use Tests\TestCase;

class TweetApiTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        config(['services.api_key' => 'test-key']);
    }

    private function tweet(array $overrides = []): array
    {
        return array_merge([
            'id' => '1900000000000000001',
            'date' => '2026-09-24 12:00:00',
            'text' => 'I want to go vegan',
            'from_user_name' => 'someone_1',
            'from_full_name' => 'Some One',
            'from_profile_image' => 'https://pbs.twimg.com/profile_images/1/a_normal.jpg',
        ], $overrides);
    }

    private function send(array $tweets)
    {
        return $this->withHeader('X-API-KEY', 'test-key')->postJson(route('tweets.store'), ['lang' => 'en', 'tweets' => $tweets]);
    }

    private function blueskyPost(array $overrides = []): array
    {
        return array_merge([
            'id' => 'at://did:plc:abc123/app.bsky.feed.post/3kxyz',
            'date' => '2026-11-19 12:00:00',
            'text' => "I'm thinking about going vegan",
            'from_user_name' => 'someone.bsky.social',
            'from_full_name' => 'Some One',
            'from_profile_image' => 'https://cdn.bsky.app/img/avatar/plain/did:plc:abc123/bafkrei@jpeg',
        ], $overrides);
    }

    private function sendBluesky(array $posts, ?string $platform = 'bluesky')
    {
        return $this->withHeader('X-API-KEY', 'test-key')->postJson(route('tweets.store'), ['lang' => 'en', 'platform' => $platform, 'tweets' => $posts]);
    }

    public function testATweetFromTheBotIsStored()
    {
        $this->send([$this->tweet(['media' => [['type' => 'photo', 'url' => 'https://pbs.twimg.com/media/abc.jpg']]])])->assertOk();

        $this->assertSame(1, Tweet::count());
    }

    public function testTheDefaultAvatarIsAccepted()
    {
        $this->send([$this->tweet(['from_profile_image' => 'https://abs.twimg.com/sticky/default_profile_images/default_profile_normal.png'])])->assertOk();
    }

    public function testImagesFromOtherHostsAreRejected()
    {
        $this->send([$this->tweet(['from_profile_image' => 'https://evil.example/a.png'])])->assertStatus(422);
        $this->send([$this->tweet(['media' => [['type' => 'photo', 'url' => 'https://evil.example/a.jpg']]])])->assertStatus(422);
        $this->send([$this->tweet(['from_profile_image' => 'http://pbs.twimg.com/profile_images/1/a.jpg'])])->assertStatus(422);

        $this->assertSame(0, Tweet::count());
    }

    public function testIdsAndUsernamesMustLookLikeX()
    {
        $this->send([$this->tweet(['id' => '../1'])])->assertStatus(422);
        $this->send([$this->tweet(['from_user_name' => 'someone/status'])])->assertStatus(422);
        $this->send([$this->tweet(['from_full_name' => str_repeat('a', 101)])])->assertStatus(422);
    }

    public function testABatchIsCappedAtFiftyTweets()
    {
        $tweets = array_map(fn ($i) => $this->tweet(['id' => (string) (1900000000000000000 + $i)]), range(1, 51));

        $this->send($tweets)->assertStatus(422);
    }

    public function testPostsWithoutAPlatformAreFromX()
    {
        $this->send([$this->tweet()])->assertOk();

        $this->assertSame('x', Tweet::first()->platform);
    }

    public function testABlueskyPostIsStored()
    {
        $this->sendBluesky([$this->blueskyPost()])->assertOk();

        $post = Tweet::first();
        $this->assertSame('bluesky', $post->platform);
        $this->assertSame('at://did:plc:abc123/app.bsky.feed.post/3kxyz', $post->id);
        $this->assertSame('someone.bsky.social', $post->from_user_name);
    }

    public function testABlueskyPostWithoutAnAvatarIsStored()
    {
        $this->sendBluesky([$this->blueskyPost(['from_profile_image' => null])])->assertOk();

        $this->assertNull(Tweet::first()->from_profile_image);
    }

    public function testAnXPostStillNeedsAnAvatar()
    {
        $this->send([$this->tweet(['from_profile_image' => null])])->assertStatus(422);
    }

    public function testAnUnknownPlatformIsRejected()
    {
        $this->sendBluesky([$this->blueskyPost()], 'mastodon')->assertStatus(422);

        $this->assertSame(0, Tweet::count());
    }

    public function testABlueskyPostNeedsAnAtUri()
    {
        $this->sendBluesky([$this->blueskyPost(['id' => '1900000000000000001'])])->assertStatus(422);
        $this->sendBluesky([$this->blueskyPost(['id' => 'at://did:plc:abc123/app.bsky.feed.like/3kxyz'])])->assertStatus(422);
        $this->sendBluesky([$this->blueskyPost(['id' => 'at://did:plc:abc/../../x/app.bsky.feed.post/3kxyz'])])->assertStatus(422);

        $this->assertSame(0, Tweet::count());
    }

    public function testABlueskyHandleMustLookLikeOne()
    {
        $this->sendBluesky([$this->blueskyPost(['from_user_name' => 'someone/../x'])])->assertStatus(422);
    }

    public function testABlueskyAvatarMustComeFromBlueskysCdn()
    {
        $this->sendBluesky([$this->blueskyPost(['from_profile_image' => 'https://pbs.twimg.com/profile_images/1/a.jpg'])])->assertStatus(422);
        $this->sendBluesky([$this->blueskyPost(['from_profile_image' => 'https://evil.example/a.png'])])->assertStatus(422);
    }

    public function testBlueskyPostsCarryNoMedia()
    {
        $this->sendBluesky([$this->blueskyPost(['media' => [['type' => 'photo', 'url' => 'https://pbs.twimg.com/media/abc.jpg']]])])->assertStatus(422);
    }

    // The request trims strings before this, but the rules shouldn't rely on it
    public function testIdsAndUsernamesCantEndInANewline()
    {
        foreach ([
            'x' => ['id' => "1900000000000000001\n", 'from_user_name' => "someone_1\n"],
            'bluesky' => ['id' => "at://did:plc:abc123/app.bsky.feed.post/3kxyz\n", 'from_user_name' => "someone.bsky.social\n"],
        ] as $platform => $values) {
            $rules = Tweet::rulesFor($platform);
            foreach ($values as $field => $value) {
                $this->assertTrue(Validator::make([$field => $value], [$field => $rules[$field]])->fails(), "$platform $field");
            }
        }
    }

    public function testTheSameBlueskyPostIsStoredOnce()
    {
        $this->sendBluesky([$this->blueskyPost()])->assertOk();
        $this->sendBluesky([$this->blueskyPost()])->assertOk();

        $this->assertSame(1, Tweet::count());
    }
}
