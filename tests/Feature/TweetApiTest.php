<?php

namespace Tests\Feature;

use App\Models\Tweet;
use Illuminate\Foundation\Testing\RefreshDatabase;
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
}
