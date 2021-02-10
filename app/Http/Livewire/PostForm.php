<?php

namespace App\Http\Livewire;

use App\Events\TweetCreated;
use Livewire\Component;
use Livewire\WithFileUploads;

class PostForm extends Component
{
    use WithFileUploads;

     public $body='';
     public $photo;
     public $tweet;


   protected $rules=[
       'body'=>'required',
   ];

   public function storePost()
   {
       $this->validate();

       if($this->photo)
       {
           $tweet=auth()->user()->tweets()->create(['body'=>$this->body,'photo'=>$this->photo->store('photos','public')]);

       }
       else
           {
           $tweet=auth()->user()->tweets()->create(['body'=>$this->body,'photo'=>null]);

       }



       $this->body='';
       $this->photo = null;

   }

    public function updatedPhoto()
    {
        $this->validate([
            'photo' => 'image|max:1024',
        ]);
    }

    public function render()
    {
        return view('livewire.post-form');
    }
}
