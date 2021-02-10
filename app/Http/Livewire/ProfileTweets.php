<?php

namespace App\Http\Livewire;

use App\Models\Tweet;
use Livewire\Component;

class ProfileTweets extends Component
{
    public $tweets;
    public $tweet;
    public $userid;




    public function delete(){
        $this->tweet->delete();
    }

    public function mount( ){

        $this->tweets=Tweet::where('user_id',$this->userid)->latest()->take(4)->get();

    }


    public function render()
    {
        return view('livewire.profile-tweets');
    }
}
