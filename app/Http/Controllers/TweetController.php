<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Support\Facades\Cache;

class TweetController extends Controller
{
    public function tweets()
    {
        $key = 'tweets'.App::getLocale();

        $tweets = Cache::get($key);

        if (empty($tweets)) {
            return response()->json([], 503)->header('Retry-After', 60);
        }

        // Arrays are from before the replies were cached as JSON
        return response(is_string($tweets) ? $tweets : json_encode($tweets), 200, [
            'Content-Type' => 'application/json',
            'Cache-Control' => 'public, max-age=300',
        ]);
    }
}
