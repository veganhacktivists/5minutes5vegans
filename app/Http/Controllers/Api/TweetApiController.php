<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tweet;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Lib\ValidationRules;

class TweetApiController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'lang'   => 'required|string|max:2|in:en,fr,es,de',
            'tweets' => 'required|array',
            ...ValidationRules::merge('tweets', Tweet::$rules, true)
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $validated = $validator->validated();

        $tweets = $validated['tweets'];

        foreach ($tweets as $tweet) {
            if (Tweet::where('id', $tweet['id'])->exists()) {
                continue;
            }

            Tweet::create([
                'lang' => $validated['lang'],
                ...$tweet,
            ]);
        }

        return response()->json(['message' => 'success'], 200);
    }
}
