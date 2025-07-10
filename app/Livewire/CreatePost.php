<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class CreatePost extends Component
{
    public $title;
    public $name, $email;

    public function mout(User $user){
        $this->fill(
            $user->only(['name', 'email'])
        );
    }

    public function render()
    {
        return view('livewire.create-post');
    }

    public function save (){
        
    }
}
