<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use App\Models\Tweet;
use Livewire\Component;

class CommentForm extends Component
{
    public $tweet;
    public $body;


    protected $listeners=[
        'comment',
        'openModal',
    ];



    public function store()
    {

        Comment::create([
            'user_id'=>auth()->user()->id,
            'tweet_id'=>$this->tweet->id,
            'body'=>$this->body,
        ]);

        return redirect('/comment/'.$this->tweet->id);
    }


    public function render()
    {
        return view('livewire.comment-form');
    }
}
