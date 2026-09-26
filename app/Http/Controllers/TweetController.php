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

        // Arrays are what the cache held before the replies were stored as JSON
        return response(is_string($tweets) ? $tweets : json_encode($tweets), 200, [
            'Content-Type' => 'application/json',
            'Cache-Control' => 'public, max-age=300',
        ]);
    }
}
