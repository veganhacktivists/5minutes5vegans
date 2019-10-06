<?php

namespace App\Services;

use Hoa\File\Read;
use Hoa\Compiler\Llk\Llk;
use Hoa\Regex\Visitor\Isotropic;
use Hoa\Math\Sampler\Random;
use \Illuminate\Support\Facades\Log;

class TweetRegexService {

    /**
     * Used by language files in resources/lang to create a full default tweet.
     * This is done to keep the Twitter spam filter from flagging messages if they're just copied/pasted.
     * @param $stringArrays
     * @return string
     */
    public function generate_message($stringArrays) {
        // Read the grammar.
        $grammar  = new Read('hoa://Library/Regex/Grammar.pp');

        // Load the compiler.
        $compiler = Llk::load($grammar);

        $message = '';

        foreach ($stringArrays as $stringArray) {
            // If there's an error in a regex string we grab a new one and try again.
            $NUM_ATTEMPTS = 3;
            $attempts = 0;
            do {
                $pick = $stringArray[array_rand($stringArray)];
                try {
                    // Lex, parse and produce the AST.
                    $ast = $compiler->parse($pick);
                    // Visitors can walk the AST and produce a result from the regex.
                    $generator = new Isotropic(new Random());
                    $toAppend = $generator->visit($ast);
                } catch (\Hoa\Regex\Exception $exception) {
                    Log::warning('The following regex caused an error: ' . $pick);
                    $attempts++;
                    continue;
                }
                $message .= $toAppend . ' ';
                break;
            } while ($attempts < $NUM_ATTEMPTS);
        }

        return $message;
    }

    public function generate_tweets($tweets) {
        $grammar = new Read('hoa://Library/Regex/Grammar.pp');
        $compiler = Llk::load($grammar);
        $results = [];

        foreach ($tweets as $tweet) {
            $icon = $tweet['icon'];
            $title = $tweet['title'];
            $bodyParts = $tweet['body'];
            $body = [];

            foreach ($bodyParts as $strings) {
                $body[] = $this->compileAndGenerate($compiler, $strings);
            }

            $body[] = '#vegan';
            $body[] = '#5m5v';

            $results[] = [
                'icon' => $icon,
                'title' => $title,
                'body' => join(' ', $body)
            ];
        }

        return $results;
    }

    private function compileAndGenerate($compiler, $strings) {
        // If there's an error in a regex string we grab a new one and try again.
        $MAX_ATTEMPTS = 3;
        $attempts = 0;
        $result = '';

        do {
            $string = $strings[array_rand($strings)];

            try {
                $ast = $compiler->parse($string);
                $generator = new Isotropic(new Random());
                $result = $generator->visit($ast);
            } catch (\Hoa\Regex\Exception $exception) {
                Log::warning('The following regex caused an error: ' . $string);
                $attempts++;
                continue;
            }

            break;
        } while ($attempts < $MAX_ATTEMPTS);

        return $result;
    }
}
