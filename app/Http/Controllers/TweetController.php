<?php

namespace App\Http\Controllers;

use App;
use App\Services\TweetRegexService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class TweetController extends Controller
{
    /**
     * Return all tweets.
     * @param $tweetRegexService
     * @return string
     */
    public function tweets(TweetRegexService $tweetRegexService)
    {

        $key = 'tweets' . App::getLocale();

        $tweets = Cache::get($key);
        if(is_null($tweets)) {
            $tweets = $tweetRegexService->generate_tweets(__('tweets'));
            Cache::put($key, $tweets, 1);
        }

        return response()
            ->json($tweets)
            ->header('Cache-Control', 'public, max-age=60');
    }

}
