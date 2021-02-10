<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use App\Models\Like;
use App\Models\Tweet;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;

class Posts extends Component
{

    public $tweets;
    public $body;
    public $tweet;

    protected $listeners = ['postAdded'];



    public function postAdded($tweet_id){
     $this->tweets->prepend(Tweet::find($tweet_id));


    }


    public function mount(){
        $this->tweets=Tweet::latest()->take(100)->get();
    }



    public function render()
    {
        return view('livewire.posts');
    }
}
