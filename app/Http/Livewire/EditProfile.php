<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditProfile extends Component
{
    use WithFileUploads;

public $photo;
    public $user;
    public $state=[];


    public $rules=[
        'state.bio'=>'max:30',
        'photo' => 'image|max:1024'
    ];

    public function mount(User $user)
    {
        $this->state = $user->withoutRelations()->toArray();
        $this->dispatchBrowserEvent('openModal');
    }

    public function store()
    {
            auth()->user()->update(
                collect($this->state)->except(['created_at', 'updated_at'])
                    ->toArray()
            );


        $this->photo = null;

        $this->dispatchBrowserEvent('closeModal');
    }


    public function render()
    {
        return view('livewire.edit-profile');
    }
}
