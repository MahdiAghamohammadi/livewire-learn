<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Alert extends Component
{
    public $isVisible = false;
    protected $listeners = [
        'handleShowAlert'
    ];

    public function handleShowAlert()
    {
        $this->isVisible = true;
    }

    public function render()
    {
        return view('livewire.alert');
    }
}
