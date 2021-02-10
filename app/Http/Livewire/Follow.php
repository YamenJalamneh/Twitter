<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Follow extends Component
{
    public $user;


    public function follow(){

        \App\Models\Follow::create(['following'=>auth()->user()->id,'follower'=>$this->user->id]);
        (new Notifications)->notify(auth()->user()->id,$this->user->id,'has followed you');
    }

    public function unfollow(){
        \App\Models\Follow::where('following',auth()->user()->id)->where('follower',$this->user->id)->delete();
        (new Notifications)->deleteNotify(auth()->user()->id,$this->user->id );
    }

    public function render()
    {
        return view('livewire.follow');
    }
}
