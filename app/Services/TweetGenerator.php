<?php

namespace App\Services;

class TweetGenerator
{
    // The first standalone "vegan" becomes the hashtag, unless it starts a name
    // ("Vegan Bootcamp"). Without one, #vegan goes on the end.
    private const VEGAN_WORD = '/(?<= |^)(?:vegan|VEGAN|Vegan(?! \p{Lu}))[^\w\d\s]*(?=[ ]|$)/u';

    /**
     * Every wording of each topic, one option from each part. The page deals
     * them out so copied replies vary, which keeps X from flagging them as spam.
     *
     * @param  array<int, array{icon: string, title: string, body: array<int, array<int, string>>}>  $topics
     * @return array<int, array{icon: string, title: string, variants: array<int, string>}>
     */
    public function generate(array $topics): array
    {
        return array_map(function (array $topic) {
            $variants = array_map(fn (array $parts) => $this->tag(implode(' ', $parts)), $this->combinations($topic['body']));

            return [
                'icon' => $topic['icon'],
                'title' => $topic['title'],
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
