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
        $tweets = $tweetRegexService->generate_tweets(__('tweets'));
        return response()
            ->json($tweets)
            ->header('Cache-Control', 'public, max-age=3600');
    }

}
