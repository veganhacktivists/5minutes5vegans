<?php

namespace App\Http\Controllers;

use App\Services\TweetRegexService;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    /**
     * Return a tweet.
     * @param $tweetRegexService
     * @return string
     */
    public function tweet(TweetRegexService $tweetRegexService)
    {
        return $tweetRegexService->generate_message(__('tweet.tweet'));
    }
}
