<div class="main_div">
    <div class="container">
        <h1 class="text-center">{{$name}}</h1>

        <div class="action_content mt-2">
            <button class="btn btn-success mx-1" wire:click="addNewTask">add</button>
            <input type="text" class="from-control mx-1" wire:model="task">
        </div>
        <ul>
            @foreach($tasks as $task)
                <li>{{$task}}</li>
            @endforeach
        </ul>
    </div>
</div>
