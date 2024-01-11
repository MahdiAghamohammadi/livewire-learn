<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Index extends Component
{

    public $title;
    public $welcome;
    public $clockColor = true;

    public function changeColor()
    {
        $this->clockColor = !$this->clockColor;
    }

    public function resetProps()
    {
        $this->reset('title', 'welcome');
    }

    public function mount(): void
    {
        $this->fill([
            'title' => 'Hello my friends',
            'welcome' => 'Welcome to livewire course'
        ]);
    }

    public function render()
    {
        return view('livewire.index');
    }
}
