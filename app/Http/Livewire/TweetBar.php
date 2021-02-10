<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class TweetBar extends Component
{
    use WithFileUploads;

    public $body;
    public $photo;

    protected $rules=[
        'body'=>'required',
    ];

    public function store()
    {
        $this->validate();

        if($this->photo){
            auth()->user()->tweets()->create(['body'=>$this->body,'photo'=>$this->photo->store('photos','public')]);
        }
        else{
            auth()->user()->tweets()->create(['body'=>$this->body,'photo'=>null]);
        }
        $this->body='';
        $this->photo=null;
    }

    public function updatedPhoto()
    {
        $this->validate([
            'photo' => 'image|max:1024',
        ]);
    }

    public function render()
    {
        return view('livewire.tweet-bar');
    }
}
