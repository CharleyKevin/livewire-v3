<?php

namespace App\Livewire;

use Livewire\Attributes\Locked;
use Livewire\Component;

class Example extends Component
{
    #[Locked]
    public int $id = 1;

    public string $name = 'Charley';
    public string $lastName = '';


    public function render()
    {
        return view('livewire.example');
    }

    public function mount()
    {
        $this->fill([
            'id' => 1,
            'name' => 'John',
            'lastName' => 'Doe'
        ]);
    }

    public function refresh()
    {
        $this->reset('name', 'lastName');
    }
}
