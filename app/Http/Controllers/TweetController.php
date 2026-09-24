<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    /**
     * Return the generated replies for the current language.
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
