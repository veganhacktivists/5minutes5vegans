<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Abraham\TwitterOAuth\TwitterOAuth;

class OauthController extends Controller
{

    const consumer_key = '5V0b03UCP0LNPSqTdXngYFGTB';
    const consumer_secret = 'Lu1yDdA52F9LnmIlgsHgX4CwVvomMlhJhWCMNY4jQv4kc7gLQK';

    public function index(Request $request) {

        $connection = new TwitterOAuth(self::consumer_key, self::consumer_secret);
        if( $request->oauth_token and $request->oauth_verifier ) {
            $access_token = $connection->oauth("oauth/access_token", ['oauth_token' => $request->oauth_token, 'oauth_verifier' => $request->oauth_verifier]);
            dd($access_token);
        } else {
            $request_token = $connection->oauth('oauth/request_token', ['oauth_callback' => route('twitteroauth')]);
            $url = $connection->url('oauth/authorize', ['oauth_token' => $request_token['oauth_token']]);
            return redirect($url);
        }

    }

}
