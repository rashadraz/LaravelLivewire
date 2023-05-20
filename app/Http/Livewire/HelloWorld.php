<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $names = ['Rashad', 'Jelly', 'Chico'];

    public function mount()
    {
        $this->contacts = $name;
    }

    public function render()
    {
        return view('livewire.hello-world');
    }
}
