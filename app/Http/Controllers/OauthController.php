<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Abraham\TwitterOAuth;

class OauthController extends Controller
{

    const ERROR_GENERIC = 'Something went wrong, please try again.';

    public function index(Request $request) {


        if( $request->oauth_token && $request->oauth_verifier ) {
            $data = self::oauth_data($request->oauth_token);
            if( !$data )
                return self::general_error();

            try {
                $connection = new TwitterOAuth\TwitterOAuth($data['consumer_key'], $data['consumer_secret']);
                $connection->setTimeouts(20, 20);
                $data = $connection->oauth("oauth/access_token", ['oauth_token' => $request->oauth_token, 'oauth_verifier' => $request->oauth_verifier]);
            } catch(TwitterOAuth\TwitterOAuthException $e) {
                return self::twitter_error($e->getMessage());
            }

            return view('twitteroauth.result', $data);
        }

        if( $request->denied)
            if( self::oauth_data($request->denied) )
                return self::general_error('You have denied the authorisation.');
            else
                return self::general_error();

        return view('twitteroauth.index');

    }

    public function verify(Request $request) {

        if( $request->consumer_key || $request->consumer_secret ) {
            if( !($request->consumer_key && $request->consumer_secret ) )
                return self::general_error('Either both credentials need to be supplied or neither, only one was supplied.');

            $data = $request->validate( [
                'consumer_key' => 'regex:/^[a-zA-Z0-9]{25}/',
                'consumer_secret' => 'regex:/^[a-zA-Z0-9]{50}/'
            ]);

        } else {
            $data = [
                'consumer_key' => env('TWITTER_CONSUMER_KEY'),
                'consumer_secret' => env('TWITTER_CONSUMER_SECRET')
            ];
        }

        try {
            $connection = new TwitterOAuth\TwitterOAuth($data['consumer_key'], $data['consumer_secret']);
            $connection->setTimeouts(20, 20);
            $request_token = $connection->oauth('oauth/request_token', ['oauth_callback' => route('twitteroauth')]);
            $url = $connection->url('oauth/authorize', ['oauth_token' => $request_token['oauth_token']]);
        } catch(TwitterOAuth\TwitterOAuthException $e) {
            $message = json_decode($e->getMessage())->errors[0]->message;
            return self::twitter_error($message);
        }

        self::oauth_data($request_token['oauth_token'], $data);
        return redirect($url);

    }

    private static function oauth_data($token, $data = null) {
        $key = 'oauth_tokens.' . $token;
        if($data)
            session()->put($key, $data);
        else
            return session()->pull($key);
    }

    private static function general_error($error = self::ERROR_GENERIC) {
        return redirect()->route('twitteroauth')->withErrors(['general' => $error]);
    }

    private static function twitter_error($error) {
        return self::general_error('Twitter error: ' . $error);
    }

}
