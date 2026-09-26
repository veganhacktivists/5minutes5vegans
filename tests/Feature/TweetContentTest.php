<?php

namespace Tests\Feature;

use App\Services\TweetGenerator;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class TweetContentTest extends TestCase
{
    private const X_LIMIT = 280;

    protected function setUp(): void
    {
        parent::setUp();

        Http::fake([
            'go.veganhacktivists.org/*' => Http::response(['shortUrl' => 'https://go.veganhacktivists.org/abc123']),
        ]);
    }

    /** @return iterable<string, array> */
    private function topicsByLocale(): iterable
    {
        foreach (array_keys(config('laravellocalization.supportedLocales')) as $locale) {
            App::setLocale($locale);
            yield $locale => __('tweets');
        }
    }

    public function testEveryTopicIsWellFormed()
    {
        foreach ($this->topicsByLocale() as $locale => $topics) {
            $this->assertIsArray($topics, "$locale has no replies");
            $this->assertNotEmpty($topics, "$locale has no replies");

            foreach ($topics as $topic) {
                $this->assertNotEmpty($topic['title'], "$locale has a topic without a title");
                $this->assertStringStartsWith('fa', $topic['icon'], "$locale {$topic['title']} has no icon");
                $this->assertNotEmpty($topic['body'], "$locale {$topic['title']} is empty");

                foreach ($topic['body'] as $options) {
                    $this->assertNotEmpty($options, "$locale {$topic['title']} has an empty part");

                    foreach ($options as $option) {
                        $this->assertNotSame('', trim($option), "$locale {$topic['title']} has a blank option");
                        // A backslash means leftover escaping from the old regex format
                        $this->assertStringNotContainsString('\\', $option, "$locale {$topic['title']}: $option");
                    }
                }
            }
        }
    }

    public function testEveryReplyThePageCanGetFitsOnX()
    {
        $generator = new TweetGenerator;

        foreach ($this->topicsByLocale() as $locale => $topics) {
            foreach ($generator->generate($topics) as $i => $topic) {
                $this->assertCount(count($generator->combinations($topics[$i]['body'])), $topic['variants'], "$locale {$topic['title']}");
                $this->assertContains($topic['body'], $topic['variants']);

                foreach ($topic['variants'] as $reply) {
                    $this->assertLessThanOrEqual(self::X_LIMIT, $this->xLength($reply), "$locale {$topic['title']}: $reply");
                }
            }
        }
    }

    public function testTheLengthCountMatchesXsRules()
    {
        // The same cases pin the page's own counter, in tests/browser/feed.spec.js
        $cases = json_decode(file_get_contents(base_path('tests/fixtures/x-length.json')), true);

        foreach ($cases as $case) {
            $this->assertSame($case['length'], $this->xLength($case['text']), "{$case['text']}: {$case['why']}");
        }
    }

    /** Length as X counts it: every link is 23, emoji are 2, most other characters 1. */
    private function xLength(string $text): int
    {
        $text = preg_replace('~https?://\S+~u', str_repeat('x', 23), $text);
        preg_match_all('/\X/u', $text, $graphemes);

        $length = 0;
        foreach ($graphemes[0] as $grapheme) {
            if (preg_match('/\p{Extended_Pictographic}/u', $grapheme)) {
                $length += 2;
                continue;
            }

            $cp = mb_ord($grapheme);
            $length += ($cp <= 4351 || ($cp >= 8192 && $cp <= 8205) || ($cp >= 8208 && $cp <= 8223) || ($cp >= 8242 && $cp <= 8247)) ? 1 : 2;
        }

        return $length;
    }
}
