<?php

namespace App\Livewire;

use Livewire\Component;

class Example extends Component
{
    public string $name = '';
    public string $lastName = '';


    public function render()
    {
        return view('livewire.example');
    }

    public function mount()
    {
        $this->fill([
            'name' => 'John',
            'lastName' => 'Doe'
        ]);
    }
}
