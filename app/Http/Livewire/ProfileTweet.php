<?php

namespace App\Http\Livewire;
use App\Models\Like;
use App\Models\Tweet;
use App\Models\User;
use Livewire\Component;

class ProfileTweet extends Component
{
    public $tweet;
    public $userid;
    public $user;

    public function mount(){
        $this->user=User::findOrfail($this->userid);
    }

    public function storeLike(){
        $like=$this->tweet->likes()->make();
        $like->user()->associate(auth()->user());
        $like->save();

        (new Notifications)->notify(auth()->user()->id,$this->tweet->user->id,"liked your tweet");

    }

    public function unlike()
    {
        Like::where('tweet_id',$this->tweet->id)->delete();
        (new Notifications)->deleteNotify(auth()->user()->id,$this->tweet->id);
    }



   public function delete(){
       $this->tweet->delete();
   }

    public function render()
    {
        return view('livewire.profile-tweet');
    }
}
