<?php

namespace App\Http\Controllers;

use App;
use App\Services\TweetRegexService;
use Illuminate\Support\Facades\Cache;

class TweetController extends Controller
{
    /**
     * Return all tweets.
     *
     * @param $tweetRegexService
     *
     * @return string
     */
    public function tweets()
    {
        $key = 'tweets'.App::getLocale();

        $tweets = Cache::get($key);

        return response()
            ->json($tweets)
            ->header('Cache-Control', 'public, max-age=60');
    }
}
