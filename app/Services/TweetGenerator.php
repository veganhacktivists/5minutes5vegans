<?php

namespace App\Services;

class TweetGenerator
{
    // The first standalone "vegan" becomes the hashtag, unless it starts a name
    // ("Vegan Bootcamp"). Without one, #vegan goes on the end.
    private const VEGAN_WORD = '/(?<= |^)(?:vegan|VEGAN|Vegan(?! \p{Lu}))[^\w\d\s]*(?=[ ]|$)/u';

    /**
     * Build every wording of each topic, one option from each part, so the page
     * can give a different one each time a topic is picked. The variety stops X
     * flagging lots of identical copied replies as spam.
     *
     * @param  array<int, array{icon: string, title: string, body: array<int, array<int, string>>}>  $topics
     * @return array<int, array{icon: string, title: string, body: string, variants: array<int, string>}>
     */
    public function generate(array $topics): array
    {
        return array_map(function (array $topic) {
            $variants = array_map(fn (array $parts) => $this->tag(implode(' ', $parts)), $this->combinations($topic['body']));

            return [
                'icon' => $topic['icon'],
                'title' => $topic['title'],
                // Pages loaded before the variants existed only read this
                'body' => $variants[array_rand($variants)],
                'variants' => $variants,
            ];
        }, $topics);
    }

    public function tag(string $body): string
    {
        $tagged = preg_replace(self::VEGAN_WORD, '#$0', $body, 1, $found);

        return $found ? $tagged : $body.' #vegan';
    }

    /**
     * Every way of picking one option from each part.
     *
     * @param  array<int, array<int, string>>  $parts
     * @return array<int, array<int, string>>
     */
    public function combinations(array $parts): array
    {
        $combos = [[]];

        foreach ($parts as $options) {
            $next = [];
            foreach ($combos as $combo) {
                foreach ($options as $option) {
                    $next[] = [...$combo, $option];
                }
            }
            $combos = $next;
        }

        return $combos;
    }
}
