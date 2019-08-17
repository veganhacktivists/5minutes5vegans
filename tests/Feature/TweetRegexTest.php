<?php

namespace Tests\Feature;

use Mcamara\LaravelLocalization\LaravelLocalization;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\TweetController;
use App\Services\TweetRegexService;
use Hoa\File\Read;
use Hoa\Compiler\Llk\Llk;

class TweetRegexTest extends TestCase
{
    /**
     * Tests that a message can be generated.
     *
     * @return void
     */
    public function testGenerateMessage()
    {
        \App::setLocale('en');
        $controller = new TweetController();
        $service = new TweetRegexService();
        $response = $controller->tweet($service);

        // Need to make sure string is returned but string always varies.
        // The challenge22 URL should always be there though.
        $this->assertContains('challenge22', $response);
    }

    /**
     * Tests all English tweet resource files are valid.
     *
     * @return void
     */
    public function testEnglishTweetResources()
    {
        \App::setLocale('en');
        $stringArrays = __('tweet.tweet');
        $grammar  = new Read('hoa://Library/Regex/Grammar.pp');
        $compiler = Llk::load($grammar);
        foreach ($stringArrays as $stringArray) {
            foreach ($stringArray as $regex) {
                $compiler->parse($regex);
            }
        }
        // Assert no exceptions thrown.
        $this->addToAssertionCount(1);
    }
}
