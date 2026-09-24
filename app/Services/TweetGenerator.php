<?php

namespace App\Services;

class TweetGenerator
{
    // The first standalone "vegan" becomes the hashtag, unless it starts a name
    // ("Vegan Bootcamp"). Without one, #vegan goes on the end.
    private const VEGAN_WORD = '/(?<= |^)(?:vegan|VEGAN|Vegan(?! \p{Lu}))[^\w\d\s]*(?=[ ]|$)/u';

    /**
     * Build one reply per topic by picking one option from each part at random.
     * The variety stops X flagging lots of identical copied replies as spam.
     *
     * @param  array<int, array{icon: string, title: string, body: array<int, array<int, string>>}>  $topics
     * @return array<int, array{icon: string, title: string, body: string}>
     */
    public function generate(array $topics): array
    {
        return array_map(fn (array $topic) => [
            'icon' => $topic['icon'],
            'title' => $topic['title'],
            'body' => $this->tag(implode(' ', array_map(fn (array $options) => $options[array_rand($options)], $topic['body']))),
        ], $topics);
    }

    public function tag(string $body): string
    {
        $tagged = preg_replace(self::VEGAN_WORD, '#$0', $body, 1, $found);

        return $found ? $tagged : $body.' #vegan';
    }
}
