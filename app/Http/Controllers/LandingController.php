<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Traits\KnowsVerbiages;
use App\Verbiage;

class LandingController extends Controller
{

    public function index() {

        if(Auth::check())
            return redirect('feed');
        else
            return view('landing');

    }

}
