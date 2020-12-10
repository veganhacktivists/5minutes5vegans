<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Traits\KnowsVerbiages;
use App\Verbiage;

class FeedController extends Controller
{

    public function __invoke() {

        if(Auth::check())
            $verbiages = Auth::user()->verbiages;
        else
            $verbiages = false;

        return view('feed', [ 'verbiages' => $verbiages ] );

    }

}
