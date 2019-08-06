<?php

namespace App\Http\Controllers;
use App\Traits\KnowsVerbiages;

class FeedController extends Controller
{
    use KnowsVerbiages;

    public function index() {

        return view('feed', [ 'verbiages' => $this->getVerbiages() ] );

    }

}
