<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class FeedController extends Controller
{
    private const FEED_SIZE = 50;

    public function __invoke(): View
    {
        $verbiages = Auth::check() ? Auth::user()->verbiages : false;

        $tweets = Tweet::timeline(App::getLocale())->recent()->take(self::FEED_SIZE)->get();

        return view('feed', [
            'verbiages' => $verbiages,
            'tweets'    => $tweets,
        ]);
    }
}
