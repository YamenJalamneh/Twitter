<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class EditProfileForm extends Component
{

    public function render()
    {
        return view('livewire.edit-profile-form');
    }
}
