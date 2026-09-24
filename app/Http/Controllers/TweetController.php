<?php

namespace App\Http\Controllers;

use App;
use App\Services\TweetRegexService;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;

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

        if (empty($tweets)) {
            return response()->json([], 503)->header('Retry-After', 60);
        }

        return response()
            ->json($tweets)
            ->header('Cache-Control', 'public, max-age=60');
    }
}
