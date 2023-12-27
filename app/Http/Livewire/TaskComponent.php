<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TaskComponent extends Component
{

    public string $name;

    public string $task;
    public array $tasks = [];

    public function addNewTask(): void
    {
        $this->tasks[] = $this->task;
        $this->task = null;
    }

    public function mount($name): void
    {
        $this->name = $name;
    }

    public function render()
    {
        return view('livewire.task-component');
    }
}
