<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class PhotoProfile extends Component
{

    use WithFileUploads;
    public $photo;
    public $background;

    protected $rules = [
        'photo' => 'image|max:1024',
    ];

    public function updatedPhoto()
    {
        $this->resetErrorBag();
    }

    public function storeBack(){


        auth()->user()->update([
            'background_photo'=>$this->background->store('profile-photos', 'public'),
        ]);
        $this->background=null;
    }

    public function storePhoto()
    {
        $this->validate();
            auth()->user()->update([
                'profile_photo' => $this->photo->store('profile-photos', 'public'),
            ]);
        $this->photo = null;
    }

        public function render()
    {
        return view('livewire.photo-profile');
    }
}
