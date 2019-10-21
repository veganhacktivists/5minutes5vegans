<?php

namespace Tests\Feature;

use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\TweetController;
use App\Services\TweetRegexService;
use Hoa\File\Read;
use Hoa\Compiler\Llk\Llk;

class TweetRegexTest extends TestCase
{

    /**
     * Tests that all tweet resource files are valid.
     *
     * @return void
     */
    public function testTweetResources()
    {
        $grammar  = new Read('hoa://Library/Regex/Grammar.pp');
        $compiler = Llk::load($grammar);
        foreach (LaravelLocalization::getSupportedLocales()  as $locale => $value) {
            \App::setLocale($locale);
            $tweets = __('tweets');
            foreach($tweets as $tweet) {
                $stringArrays = $tweet['body'];
                foreach ($stringArrays as $stringArray) {
                    foreach ($stringArray as $regex) {
                        $compiler->parse($regex);
                    }
                }
            }
        }
        $this->addToAssertionCount(1);
    }
}
