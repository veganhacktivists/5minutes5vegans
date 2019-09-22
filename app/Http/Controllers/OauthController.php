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
            $data = $this->oauth_data($request->oauth_token);
            if( !$data )
                return $this->general_error();

            try {
                $connection = new TwitterOAuth\TwitterOAuth($data['consumer_key'], $data['consumer_secret']);
                $data = $connection->oauth("oauth/access_token", ['oauth_token' => $request->oauth_token, 'oauth_verifier' => $request->oauth_verifier]);
            } catch(TwitterOAuth\TwitterOAuthException $e) {
                dd($e);
                $message = json_decode($e->getMessage())->errors[0]->message;
                return view('twitteroauth.index')->withErrors(['general' => $message]);
            }

            return view('twitteroauth.result', $data);
        }

        if( $request->denied)
            if( $this->oauth_data($request->denied) )
                return $this->general_error('You have denied the authorisation.');
            else
                return $this->general_error();

        return view('twitteroauth.index');

    }

    public function verify(Request $request) {

        if( $request->consumer_key || $request->consumer_secret ) {
            if( !($request->consumer_key && $request->consumer_secret ) )
                return $this->general_error('Either both credentials need to be supplied or neither, only one was supplied.');

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
            $request_token = $connection->oauth('oauth/request_token', ['oauth_callback' => route('twitteroauth')]);
            $url = $connection->url('oauth/authorize', ['oauth_token' => $request_token['oauth_token']]);
        } catch(TwitterOAuth\TwitterOAuthException $e) {
            $message = json_decode($e->getMessage())->errors[0]->message;
            return view('twitteroauth.index')->withErrors(['general' => $message]);
        }

        $this->oauth_data($request_token['oauth_token'], $data);
        return redirect($url);

    }

    private function oauth_data($token, $data = null) {
        $key = 'oauth_tokens.' . $token;
        if($data)
            session()->put($key, $data);
        else
            return session()->pull($key);
    }

    private function general_error($error = self::ERROR_GENERIC) {
        return redirect()->route('twitteroauth')->withErrors(['general' => $error]);
    }

}
