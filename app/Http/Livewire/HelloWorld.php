<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $name = 'Rashad';
    public $loud = false;
    public $greeting  = ['Hello'];


    public function resetName($name = 'Default')
    {
        $this->name = $name;
    }
    public function render()
    {
        return view('livewire.hello-world');
    }
}
