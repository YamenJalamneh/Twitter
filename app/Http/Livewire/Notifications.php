<?php

namespace App\Http\Livewire;

use App\Models\Notification;
use App\Models\Tweet;
use App\Models\User;
use Livewire\Component;
use Illuminate\Auth;

class Notifications extends Component
{
    public $notifications;
    public $user;
    public $tweet_id;

    protected $listeners=[
        'notify'
    ];


    public function notify($user_id,$tweet_id,$text)
    {
        $this->user=$user_id;
        $this->tweet_id=$tweet_id;

        Notification::create([
           'user_id'=>$user_id,
           'tweet_id'=>$tweet_id,
           'text'=>$text,
        ]);
    }

    public function deleteNotify($user_id,$tweet_id)
    {

            Notification::where('user_id',$user_id)->where('tweet_id',$tweet_id)->delete();
    }

    public function mount()
    {
        $this->notifications= Notification::where('tweet_id',\auth()->user()->id)->
        where('user_id','!=',auth()->user()->id)->get();
    }

    public function render()
    {
        return view('livewire.notifications');
    }
}
