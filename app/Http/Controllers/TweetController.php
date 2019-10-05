<?php

namespace App\Http\Controllers;

use App\Services\TweetRegexService;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    /**
     * Return all tweets.
     * @param $tweetRegexService
     * @return string
     */
    public function tweets(TweetRegexService $tweetRegexService)
    {
        return $tweetRegexService->generate_tweets(__('tweets'));
    }

}
