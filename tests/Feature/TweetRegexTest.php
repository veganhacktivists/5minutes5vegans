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
     * Tests that a message can be generated.
     *
     * @return void
     */
    public function testGenerateMessage()
    {
        foreach (LaravelLocalization::getSupportedLocales() as $locale => $value) {
            \App::setLocale($locale);
            $controller = new TweetController();
            $service = new TweetRegexService();
            $response = $controller->tweet($service);

            // Need to make sure string is returned but string always varies.
            // The challenge22 URL should always be there though.
            $this->assertContains('challenge22', $response);
        }
    }

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
            $stringArrays = __('tweet.tweet');
            foreach ($stringArrays as $stringArray) {
                foreach ($stringArray as $regex) {
                    $compiler->parse($regex);
                }
            }
        }
        $this->addToAssertionCount(1);
    }
}
