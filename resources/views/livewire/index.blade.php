<div>
    <h5 class="text-center py-4 my-4">{{ $title }}</h5>
    <h5 class="text-center py-4 my-4">{{ $welcome }}</h5>

    <div class="text-center">
        <a href="/task/1" class="btn btn-success py-2">tasks</a>
        <a href="/posts" class="btn btn-success py-2">posts</a>
    </div>

    <div class="text-center mt-5">
        <button class="btn btn-primary" wire:click="$emit('handleShowAlert')">show</button>
    </div>

    <livewire:alert />
</div>
