<?php

namespace App\Livewire;

use Livewire\Component;

class Contador extends Component
{
    public $count =0;

    public function decrement()
    {
        $this->count-- ;
    }

    public function increment($var=5)
    {
        $this->count+= $var;
    }
    
    public function render()
    {
        return view('livewire.contador');
    }
}
