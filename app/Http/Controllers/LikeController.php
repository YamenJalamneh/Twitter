<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Tweet;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function like($id){

        $tweet=Tweet::find($id);

        $like=new Like();
        $like->tweet_id=$tweet->id;
        $like->user_id=auth()->user()->id;
        $like->save();

        return redirect()->back();
    }

    public function unlike($id){
        Like::where('tweet_id',$id)->delete();
        return redirect()->back();

    }
}
