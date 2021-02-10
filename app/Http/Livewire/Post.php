<?php

namespace App\Http\Livewire;

use App\Events\TweetLiked;
use App\Models\Comment;
use App\Models\Like;
use App\Modelswe\Notification;
use App\Models\Tweet;
use Livewire\Component;
use Livewire\WithFileUploads;
class Post extends Component
{
    use WithFileUploads;
    public $tweet;
    public $body;
    protected $listeners=[
        'storeLike',
        'unlike',
        'tweetLiked'
    ];

    public function tweetLiked($tweet){
        $this->tweet = $tweet;
        $this->tweet=$this->tweet->fresh();
    }



    public function storeLike()
    {
        $like=$this->tweet->likes()->make();
        $like->user()->associate(auth()->user());
        $like->save();

       (new Notifications)->notify(auth()->user()->id,$this->tweet->user->id,"liked your tweet");

       $this->emit('tweetLiked',$this->tweet);

    }

    public function unlike()
    {
        Like::where('tweet_id',$this->tweet->id)->delete();
        (new Notifications)->deleteNotify(auth()->user()->id,$this->tweet->id);
    }

    public function delete(){

        $this->tweet->delete();
    }

    public function refreshPost()
    {
        $this->tweet = $this->tweet->fresh();
    }

    public function render()
    {
        return view('livewire.post');
    }
}
