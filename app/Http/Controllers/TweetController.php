<?php

namespace App\Http\Controllers;
use App\Models\Tweet;
use Illuminate\Http\Request;
use App\Http\Requests\TweetStoreRequest;
use Illuminate\Support\Facades\Auth; 
class TweetController extends Controller
{
    function store(TweetStoreRequest $request){
        $tweet = new Tweet;
        $tweet->user_id=Auth::id();
        $tweet->body=$request->body;
        $tweet->save();
        return redirect('/tweets');
    }
    
        

    //     public function index()
    // {
    //     // Fetch tweets from the authenticated user's timeline
    //     $tweets = Auth::user()->timeline();
        
    //     return view('tweets.index', ['tweets' => $tweets]);
    // }

    public function index()
    {
        // Fetch all tweets from the database
        $tweets = Tweet::all();
        
        return response()->json($tweets);
    }
    
    
}
