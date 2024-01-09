<div class="main_div">
    <div class="container">
        <h1 class="text-center">{{ $user->name }}</h1>

        <div class="action_content mt-2">
            <button class="btn mx-1 {{ $editId ? 'btn-warning' : 'btn-success' }}"
                wire:click="{{ $editId ? 'updateTask' : 'addNewTask' }}">{{ $editId ? 'edit' : 'add' }}</button>
            <input type="text" class="from-control mx-1" wire:model="task">
        </div>
        <ul>
            @foreach ($tasks as $task)
                <div class="d-flex flex-row justify-content-around">
                    <div class="p-2">
                        <button class="btn btn-sm rounded-circle btn-warning"
                            wire:click="editTask({{ $task->id }})">
                            edit
                        </button>
                        <button class="btn btn-sm rounded-circle btn-danger"
                            wire:click="deleteTask({{ $task->id }})">
                            delete
                        </button>
                    </div>
                    <div class="p-2">
                        <li>{{ $task->task }}</li>
                    </div>
                </div>
            @endforeach
        </ul>
        {{ $tasks->links() }}
    </div>
</div>
