<?php

namespace App\Http\Livewire;

use App\Models\Task;
use App\Models\User;
use Livewire\Component;

class TaskComponent extends Component
{

    public $user;
    public $task;
    public $tasks;
    public $editId = 0;

    public function addNewTask(): void
    {
        $newTask = Task::query()->create([
            'task' => $this->task,
            'user_id' => $this->user->id
        ]);
        $this->task = null;
        $this->tasks = Task::query()->where('user_id', $this->user->id)->get();
    }

    public function editTask($id)
    {
        $task = Task::find($id);
        $this->task = $task->task;
        $this->editId = $task->id;
    }

    public function updateTask()
    {
        if ($this->editId) {
            $task = Task::find($this->editId);
            $task->task = $this->task;
            $task->save();
            $this->tasks = Task::query()->where('user_id', $this->user->id)->get();
            $this->task = null;
            $this->editId = 0;
        }
    }

    public function deleteTask($id)
    {
        Task::query()->where('id', $id)->delete();
        $this->tasks = $this->tasks->where('id', '!=', $id);
    }

    public function mount($user)
    {
        $this->user = User::find($user);
        $this->tasks = Task::query()->where('user_id', $user)->get();
    }

    public function render()
    {
        return view('livewire.task-component');
    }
}
