<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\TweetService;
// use App\Models\Tweet;

class IndexController extends Controller
{
    public function __invoke(Request $request, TweetService $tweetService)
    {
        // $tweetService = new TweetService();
        $tweets = $tweetService->getTweets();
        // $tweets = Tweet::orderBy('created_at', 'DESC')->get();
        return view('tweet.index')
            ->with('tweets', $tweets);

        // dd($tweets);
        // return view('tweet.index')
        //     ->with('name', 'laravel')
        //     ->with('version', '8');
    }
}
