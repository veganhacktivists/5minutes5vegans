<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class FeedController extends Controller
{
    public function __invoke(): View
    {
        $verbiages = Auth::check() ? Auth::user()->verbiages : false;

        $tweets = Tweet::timeline(App::getLocale())->get();

        return view('feed', [
            'verbiages' => $verbiages,
            'tweets'    => $tweets,
        ]);
    }
}
