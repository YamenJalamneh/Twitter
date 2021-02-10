<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use App\Models\Tweet;
use Livewire\Component;

class Comments extends Component
{
    public $tweet;
    public $comments;

    public function mount(){


        $this->comments=Comment::where('tweet_id',$this->tweet->id)->latest()->get();

    }
    public function render()
    {
        return view('livewire.comments');
    }
}
